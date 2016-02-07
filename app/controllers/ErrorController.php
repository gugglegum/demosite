<?php

namespace app\controllers;

class ErrorController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'layouts/error';
    }

    public function action404()
    {
        http_response_code(404);
        return $this->render('error/404');
    }

    public function action500(array $params)
    {
        http_response_code(500);
        return $this->render('error/500', $params);
    }
}
