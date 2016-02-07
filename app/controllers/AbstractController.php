<?php

namespace app\controllers;

use app\App;
use app\db\Mysqli;
use app\View;

abstract class AbstractController
{
    protected $layout = 'layouts/generic';
    protected $db;
    protected $view;

    public function __construct()
    {
        $this->view = new View(APPLICATION_PATH . '/views');
        $this->db = new Mysqli(
            App::$config['db']['host'],
            App::$config['db']['user'],
            App::$config['db']['password'],
            App::$config['db']['database']
        );
    }

    public function render($view, array $params = [])
    {
        return $this->view->render($this->layout, [
            'content' => $this->view->render($view, $params),
        ]);
    }
}
