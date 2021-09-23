<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PersonajesGii */

$this->title = 'Create Personajes Gii';
$this->params['breadcrumbs'][] = ['label' => 'Personajes Giis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personajes-gii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
