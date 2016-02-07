<?php

namespace app;

/**
 * Парсер шаблонов
 *
 */
class View
{
    /**
     * Заголовок страницы
     * @var string
     */
    public $title;

    /**
     * Субменю (боковое меню второго уровня)
     * @var array
     */
    public $subMenu = [];

    /**
     * Путь к шаблонам
     * @var string
     */
    private $_viewsPath;

    /**
     * @param string $viewsPath
     */
    public function __construct($viewsPath)
    {
        $this->_viewsPath = $viewsPath;
    }

    /**
     * Парсит заданный шаблон (вьюху)
     *
     * @param string $view      Имя шаблона
     * @param array $params     Параметры для передачи в шаблон
     * @return string           Результат парсинга
     * @throws Exception        Если файл с шаблоном не найден
     */
    public function render($view, array $params = array())
    {
        extract($params);
        ob_start();
        $file = $this->_viewsPath . DIRECTORY_SEPARATOR . $view . '.php';
        if (!file_exists($file)) {
            throw new Exception("Failed to render view '{$view}': file not found");
        }
        require($file);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
