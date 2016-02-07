<?php

/** @var $this \app\View */

use app\helpers\Html;
use app\helpers\Url;

?>
<ul id="subMenu">
    <?php foreach ($this->subMenu as $menuItem) { ?>
        <?php
        $href = Url::to($menuItem['route']);
        if ($href !== $_SERVER['REQUEST_URI']) {
            ?>
            <li><a href="<?= Html::encode($href) ?>"><?= Html::encode($menuItem['name']) ?></a></li><?php
        } else {
            ?>
            <li class="current"><?= Html::encode($menuItem['name']) ?></li><?php
        }
    }?>
</ul>

