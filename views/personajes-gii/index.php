<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonajesGiiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personajes Giis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personajes-gii-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personajes Gii', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'rol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
