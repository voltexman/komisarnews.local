<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
<?php $form = ActiveForm::begin([
    'action' => Url::to('subscriber'),
    'options' => [
        'id' => 'subscription-form',
        'class' => 'subscribe-form'
    ]
]); ?>

<div class="input-group" style="width: 100%">

    <?= $form->field($model, 'email', ['template' => "{input}"])->textInput([
        'class' => 'form-control',
        'id' => 'subscriber-email',
        'placeholder' => 'Ваша E-Mail адреса'
    ]) ?>

    <span class="input-group-addon">
        <?= Html::submitInput('Підписатися', ['class' => 'btn btn-default', 'id' => 'subscribe-button']) ?>
    </span>
</div>

<?= $form->field($model, 'email', ['template' => "{error}"]); ?>

<?php $form = ActiveForm::end(); ?>

