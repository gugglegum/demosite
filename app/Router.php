<?php

namespace app;

/**
 * Маршрутизатор запросов
 *
 * Парсит входящий URL запроса и определяет каким обработчиком (контроллер/экшин) его обрабатывать.
 *
 * Сам класс реализует паттерн синглтона, что гарантирует существование только одного его экземпляра с возможность
 * получить его (или создать в первый раз) через статический метод getInstance().
 *
 * @package app
 */
class Router
{
    private static $_instance;
    private $_routes;

    /**
     * Router constructor.
     */
    protected function __construct()
    {
        $this->_routes = require(APPLICATION_PATH . '/routes.php');
    }

    /**
     * Синглтон-метод
     *
     * @return Router
     */
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Парсит URL и возвращает обработчик
     *
     * @param $requestUri
     * @return array
     */
    public function route($requestUri)
    {
        $controller = 'error';
        $action = '404';
        $params = [];

        foreach ($this->_routes as $routeName => $routeInfo) {
            if (preg_match($routeInfo['pattern'], $requestUri, $matches)) {
                list($controller, $action) = explode('/', $routeName);
                $params = array_filter($matches, function($key) {
                    return !is_int($key);
                }, ARRAY_FILTER_USE_KEY);
                break;
            }
        }

        return [
            'controller' => $controller,
            'action' => $action,
            'params' => $params,
        ];
    }

    /**
     * Возвращает регулярное выражение для заданного маршрута
     *
     * @param string $routeName
     * @return string
     * @throws Exception
     */
    public function getRoutePattern($routeName)
    {
        return $this->_getRouteInfo($routeName)['pattern'];
    }

    /**
     * Возвращает маску реверсивного построения URL по имени маршрута
     *
     * @param string $routeName
     * @return string
     * @throws Exception
     */
    public function getRouteReverse($routeName)
    {
        return $this->_getRouteInfo($routeName)['reverse'];
    }

    /**
     * Возвращает информацию о маршруте по его имени
     *
     * @param string $routeName
     * @return array
     * @throws Exception
     */
    private function _getRouteInfo($routeName)
    {
        if (!array_key_exists($routeName, $this->_routes)) {
            throw new Exception("Unknown route '{$routeName}'");
        }
        return $this->_routes[$routeName];
    }
}
