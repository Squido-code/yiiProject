<h1>Paísess</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= $country->name ?>
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php
//use yii\helpers\Html;
//use yii\widgets\LinkPager;
//?>
<!--<h1>Paísess</h1>-->
<!--<ul>-->
<!--    --><?php //foreach ($countries as $country): ?>
<!--        <li>-->
<!--            --><? //= Html::encode("{$country->name} ({$country->code})") ?><!--:-->
<!--            --><? //= $country->population ?>
<!--        </li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!---->
<? //= LinkPager::widget(['pagination' => $pagination]) ?>


