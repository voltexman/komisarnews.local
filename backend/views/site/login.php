<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAsset;

AppAsset::register($this);
?>

<?php $form = ActiveForm::begin(['id' => 'loginForm']) ?>

<div class="form-group">
    <?= $form->field($model, 'username')->textInput(['autocomplete' => 'off']) ?>
</div>

<div class="form-group">
    <?= $form->field($model, 'password')->passwordInput() ?>
</div>

<?= Html::submitButton('Вход', ['class' => 'btn btn-accent']) ?>

<?php ActiveForm::end() ?>
