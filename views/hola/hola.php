<?php use yii\helpers\Html; ?>
<!--el parámetro message es procesado por HTML-encoded antes de ser impreso.
Esto es necesario ya que el parámetro viene de un usuario final, haciéndolo vulnerable a ataques cross-site scripting (XSS)
pudiendo inyectar código de Javascript malicioso dentro del parámetro.-->
<h1><?= Html::encode($message) ?></h1>
