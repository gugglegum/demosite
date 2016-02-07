<?php

/** @var $this \app\View */

use app\helpers\Html;

$this->title = 'Ошибка HTTP 404';

?>
<p>Запрошенная вами страница <code><?= Html::encode($_SERVER['REQUEST_URI']) ?></code> на сервере не найдена.</p>
