<?php

use rmrevin\yii\fontawesome\FAS;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php $form = ActiveForm::begin([
    'action' => Url::base() . '/article/' . Yii::$app->controller->action->id,
]) ?>

<div class="col-sm-12">
    <?= $form->field($model, 'title')->textInput(['autocomplete' => 'off']) ?>
</div>

<div class="clearfix">
    <?= $form->field($model, 'name', ['options' => ['class' => 'col-sm-6 pull-left']])->textInput(['autocomplete' => 'off']) ?>

    <?= $form->field($model, 'alias', ['options' => ['class' => 'col-sm-6 pull-right']])->textInput(['autocomplete' => 'off']) ?>
</div>

<div class="col-sm-12">
    <?= $form->field($model, 'text')->textarea(['class' => 'summernote']) ?>
</div>

<div class="col-sm-12 mt-3">

    <!--    --><? //= $form->field($model, 'text')->widget(Widget::className(), [
    //        'settings' => [
    //            'lang' => 'ru',
    //            'minHeight' => 200,
    //            'maxHeight' => 480,
    //            'toolbarFixed' => true,
    //            'toolbarFixedTopOffset' => 60,
    //            'toolbarContext' => false,
    //            'imageUpload' => Url::to(['@web/images/content']),
    //            'imageManagerJson' => Url::to(['@web/images/content']),
    //            'plugins' => [
    //                'fontsize',
    //                'fontcolor',
    //                'imagemanager',
    //                'fullscreen',
    //            ],
    //        ],
    //    ]) ?>
</div>

<div class="col-sm-6">
    <?= $form->field($model, 'category', ['inputOptions' => ['class' => 'form-control category-select']])
        ->dropDownList([
            'article' => 'Статьи',
            'sale' => 'Продажа волос',
            'cities' => 'Города'
        ]) ?>
</div>

<div class="col-sm-12">
    <div class="panel panel-filled">
        <div class="panel-heading">
            <div class="panel-tools">
                <a class="panel-toggle"><?= FAS::icon('chevron-up') ?></a>
            </div>
            SEO оптимизация
        </div>
        <div class="panel-body">
            <div class="col-sm-12">
                <?= $form->field($model, 'publication')->checkbox(['class' => 'js-switch']) ?>
                <?= $form->field($model, 'indexation')->checkbox(['class' => 'js-switch']) ?>
            </div>
            <div class="col-sm-12">
                <?= $form->field($model, 'keywords')->textInput(['autocomplete' => 'off']) ?>
            </div>

            <div class="col-sm-12">
                <?= $form->field($model, 'description')->textarea(['rows' => '5']) ?>
            </div>

            <?= $form->field($model, 'id')->hiddenInput()->label('') ?>
        </div>
    </div>
</div>

<div class="btn-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-default']) ?>
    <?= Html::resetButton('Очистить', ['class' => 'btn btn-default']) ?>
    <?= Html::a('Отменить', Url::previous(), ['class' => 'btn btn-default']) ?>
</div>

<?php ActiveForm::end() ?>
