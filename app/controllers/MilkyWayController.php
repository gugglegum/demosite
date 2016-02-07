<?php

namespace app\controllers;


class MilkyWayController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $this->view->subMenu = [
            ['name' => 'История открытия Галактики', 'route' => ['milky-way/history']],
            ['name' => 'Расположение Солнца в Галактике', 'route' => ['milky-way/position']],
            ['name' => 'Эволюция и будущее Галактики', 'route' => ['milky-way/evolution']],
            ['name' => 'Панорамы', 'route' => ['milky-way/panoramas']],
        ];
    }

    public function actionIndex()
    {
        return $this->render('milky-way/index');
    }

    public function actionHistory()
    {
        return $this->render('milky-way/history');
    }

    public function actionPosition()
    {
        return $this->render('milky-way/position');
    }

    public function actionEvolution()
    {
        return $this->render('milky-way/evolution');
    }

    public function actionPanoramas()
    {
        return $this->render('milky-way/panoramas');
    }
}
