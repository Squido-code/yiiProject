<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryGii */

$this->title = 'Create Country Gii';
$this->params['breadcrumbs'][] = ['label' => 'Country Giis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-gii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
