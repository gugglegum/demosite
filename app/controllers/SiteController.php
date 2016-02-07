<?php

namespace app\controllers;


class SiteController extends AbstractController
{
    public function actionIndex()
    {
        $this->layout = 'layouts/main';
        return $this->render('site/index');
    }
}
