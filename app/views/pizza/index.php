<?php

/** @var $this \app\View */
/** @var $items array */
/** @var $title string */

use app\helpers\Html;
use app\helpers\Url;

$this->title = $title;

?>
<table id="pizzas">
    <?php foreach ($items as $item) { ?>
        <tr>
            <td class="image"><a href="<?= Html::encode(Url::to(['pizza/item', 'topic' => $item['topicUrlName'], 'id' => $item['id']])) ?>"><img src="<?= Html::encode($item['image_url_small']) ?>" alt="Pizza" /></a></td>
            <td class="name">
                <h4><a href="<?= Html::encode(Url::to(['pizza/item', 'topic' => $item['topicUrlName'], 'id' => $item['id']])) ?>"><?= Html::encode($item['name']) ?></a></h4>
                <p class="description"><?= Html::encode($item['description']) ?></p>
            </td>
            <td class="price"><?= Html::encode($item['price']) ?>.-</td>
        </tr>
    <?php } ?>
</table>
