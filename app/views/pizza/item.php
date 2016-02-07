<?php

/** @var $this \app\View */

use app\helpers\Html;
use app\helpers\Url;

/** @var $pizza array */

$this->title = $pizza['name'];

?>
<p><img src="<?= Html::encode($pizza['image_url_large']) ?>" alt="Pizza photo" /></p>

<p><?= nl2br(Html::encode($pizza['description'])) ?></p>

<p><a href="<?= Html::encode(Url::to(['pizza/index'])) ?>">Все пиццы</a></p>

