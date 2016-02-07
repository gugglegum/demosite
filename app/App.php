<?php

namespace app;

abstract class App
{
    /**
     * Конфиг сайта
     * @var array
     */
    public static $config;

    /**
     * Метод запуска приложения
     * @throws Exception
     */
    public static function run()
    {
        // Загрузка и объединение конфигов
        if (!file_exists(PSR4_ROOT . '/config.local.php')) {
            throw new Exception('You have to create file config.local.php with your settings');
        }
        self::$config = ((array) require(PSR4_ROOT . '/config.local.php')) + ((array) require(PSR4_ROOT . '/config.php'));

        // Маршрутизация запроса
        $router = Router::getInstance();
        $route = $router->route($_SERVER['REQUEST_URI']);

        // Вызов обработчика и обработка ошибок
        try {
            self::_runAction($route['controller'], $route['action'], $route['params']);
        } catch (HttpException $e) {
            if ($e->getCode() === 404) {
                self::_runAction('error', '404', []);
            } else {
                self::_runAction('error', '500', [
                    'message' => $e->getMessage(),
                ]);
            }
        } catch (\Exception $e) {
            self::_runAction('error', '500', [
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Вызывает выполнение заданного обработчика запроса (основное действие сайта) по имени его контроллера и экшина
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     */
    private static function _runAction($controllerName, $actionName, $params)
    {
        $controllerClass = '\\app\\controllers\\' . self::_routeNameReflection($controllerName) . 'Controller';
        $actionMethod = 'action' . self::_routeNameReflection($actionName);
        $controller = new $controllerClass();
        echo $controller->$actionMethod($params);
    }

    /**
     * Преобразует строку вида "lorem-ipsum" в строку вида "LoremIpsum"
     *
     * @param string $name
     * @return string
     */
    private static function _routeNameReflection($name)
    {
        $parts = explode('-', $name);
        array_walk($parts, function(&$value) {
            $value = ucfirst($value);
        });
        return implode('', $parts);
    }
}
