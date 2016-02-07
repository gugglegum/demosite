<?php

/** @var $this \app\View */
/** @var $content string */

use app\helpers\Html;
use app\helpers\Url;

?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <link href="/css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="logo"><a href="<?= Html::encode(Url::to(['site/index'])) ?>">Мой сайт</a></div>

<?= $this->render('layouts/_topMenu') ?>

<div id="middle">

<?= $this->render('layouts/_subMenu') ?>

<div id="content">
<h1><?= Html::encode($this->title) ?></h1>

<?= $content ?>

</div>
</div>

</body>
</html>

