<?php

/** @var $this \app\View */

use app\helpers\Html;
use app\helpers\Url;

$topMenu = [
    ['name' => 'Пиццы', 'route' => ['pizza/index']],
    ['name' => 'Солнечная система', 'route' => ['solar-system/index']],
    ['name' => 'Млечный путь', 'route' => ['milky-way/index']],
    ['name' => 'Вселенная', 'route' => ['universe/index']],
];

?>
<ul id="topMenu">
    <?php foreach ($topMenu as $menuItem) { ?>
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
    }
    ?>
</ul>

