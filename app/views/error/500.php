<?php

/** @var $this \app\View */
/** @var $message string|null */

use app\helpers\Html;

$this->title = 'Ошибка HTTP 500';

?>
<p>Произошла внутренняя ошибка сервера.</p>
<?php if (APPLICATION_ENV !== 'production' && $message !== null) { ?>
    <p>ERROR: <?= Html::encode($message) ?></p>
<?php } ?>

