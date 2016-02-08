<?php

/** @var $this \app\View */

use app\helpers\Html;
use app\helpers\Url;

?>
<ul id="subMenu">
    <?php foreach ($this->subMenu as $menuItem) { ?>
        <?php
        $href = Url::to($menuItem['route']);
        if (strpos($_SERVER['REQUEST_URI'], $href) !== 0) {
            ?>
            <li><a href="<?= Html::encode($href) ?>"><?= Html::encode($menuItem['name']) ?></a></li><?php
        } else {
            if ($_SERVER['REQUEST_URI'] !== $href) {
                ?>
                <li class="current"><a href="<?= Html::encode($href) ?>"><?= Html::encode($menuItem['name']) ?></a></li><?php
            } else {
                ?>
                <li class="current"><?= Html::encode($menuItem['name']) ?></li><?php
            }
        }
    }?>
</ul>

