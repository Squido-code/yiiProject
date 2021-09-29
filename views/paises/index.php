<?php

use yii\helpers\Html;

?>
<div class="container">
    <h1>Paises</h1>
    <?= Html::a("Crear", ["create"], ['class' => 'btn btn-primary']); ?>
    <br>

    <div class="row">
        <?php foreach ($paises as $data): ?>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h3><?= $data->nombre; ?></h3>
                        <?= Html::a("Actualizar", ["update", "id" => $data->id], ['class' => 'btn btn-primary btn-xs']); ?>
                    </div>
                    <div class="card-body">
                        <?= $data->status == 1 ? "Enabled" : "Disabled"; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
