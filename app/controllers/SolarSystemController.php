<?php

namespace app\controllers;


class SolarSystemController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $this->view->subMenu = [
            ['name' => 'Структура', 'route' => ['solar-system/structure']],
            ['name' => 'Терминология', 'route' => ['solar-system/terms']],
            ['name' => 'Солнце', 'route' => ['solar-system/sun']],
        ];
    }

    public function actionIndex()
    {
        return $this->render('solar-system/index');
    }

    public function actionStructure()
    {
        return $this->render('solar-system/structure');
    }

    public function actionTerms()
    {
        return $this->render('solar-system/terms');
    }

    public function actionSun()
    {
        return $this->render('solar-system/sun');
    }
}
