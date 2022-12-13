<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title">Отправка письма</h4>
        <b>Получатель:</b>
    </div>
    <div class="modal-body">
        <?php $form = ActiveForm::begin() ?>

        <div class="col-md-12 col-12">
            <?= $form->field($model, 'subject')->textInput(['autocomplete' => 'off']) ?>
        </div>

        <div class="col-md-12 col-12">
            <?= $form->field($model, 'message')->textarea(['rows' => 5]) ?>
        </div>

        <?= Html::submitInput('Отправить', ['class' => 'btn btn-warning pull-right']) ?>

        <?php ActiveForm::end() ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-accent" data-dismiss="modal">Закрыть</button>
    </div>
</div>
