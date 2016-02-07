<?php

namespace app\controllers;

class UniverseController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $this->view->subMenu = [
            ['name' => 'Облик Вселенной', 'route' => ['universe/shape']],
            ['name' => 'Наблюдения', 'route' => ['universe/observations']],
            ['name' => 'Теоретические модели', 'route' => ['universe/models']],
        ];
    }

    public function actionIndex()
    {
        return $this->render('universe/index');
    }

    public function actionShape()
    {
        return $this->render('universe/shape');
    }

    public function actionObservations()
    {
        return $this->render('universe/observations');
    }

    public function actionModels()
    {
        return $this->render('universe/models');
    }
}
