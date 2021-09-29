<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
    <div class="container">
        <div class="row>">
            <div class="col-md-5">
                <h1>Crear Pais</h1>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'nombre') ?>

                <?= $form->field($model, 'status') ?>

                <?= Html::submitButton('enviar', ['class' => 'btn btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
<?php
