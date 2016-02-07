<?php

/** @var $this \app\View */
/** @var $content string */

use app\helpers\Html;

?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<h1><?= Html::encode($this->title) ?></h1>

<?= $content ?>
</body>
</html>
