<?php

use yii\helpers\Html;
use yii\web\JqueryAsset;

$this->title = 'Управление страницами сайта';

use yii\widgets\ActiveForm;

$this->registerCssFile('@web/vendor/summernote/dist/summernote-bs4.css');
$this->registerJsFile('@web/vendor/summernote/dist/summernote-bs4.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/summernote/lang/summernote-ru-RU.js', ['depends' => [JqueryAsset::className()]]);
$this->registerCssFile('@web/vendor/select2/dist/css/select2.min.css');
$this->registerJsFile('@web/vendor/select2/dist/js/select2.js', ['depends' => JqueryAsset::className()]);
$this->registerJsFile('@web/vendor/popper/popper.min.js');

$js = <<<JS
    $(".indexation_items").select2({
        placeholder: "Выбрать вариант индексации",
        allowClear: true,
        minimumResultsForSearch: -1
    });
    $('.summernote').summernote({
        lang:'ru-RU',
        height: 400,
    });
JS;
$this->registerJs($js);

?>
<div class="tabs-container">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li><a class="nav-link active" data-toggle="tab" href="#tab-1" aria-expanded="true"> Главная</a></li>
        <li><a class="nav-link" data-toggle="tab" href="#tab-2" aria-expanded="false">Продажа</a></li>
        <li><a class="nav-link" data-toggle="tab" href="#tab-3" aria-expanded="false">Контакты</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <div class="panel-body">

                <div class="col-sm-6">
                    <?= $form->field($model, 'main_indexation', ['inputOptions' => ['class' => 'form-control indexation_items']])
                        ->dropDownList($indexationItems) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'main_title')->textInput(['autocomplete' => 'off']) ?>
                </div>

                <div class="col-sm-12">
                    <?= $form->field($model, 'main_text')->textarea(['class' => 'summernote']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'main_keywords')->textInput(['autocomplete' => 'off', 'class' => 'form-control keywords']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'main_description')->textarea(['rows' => 3]) ?>
                </div>

            </div>
        </div>
        <div id="tab-2" class="tab-pane">
            <div class="panel-body">

                <div class="col-sm-6">
                    <?= $form->field($model, 'order_indexation', ['inputOptions' => ['class' => 'form-control indexation_items']])
                        ->dropDownList($indexationItems) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'order_title')->textInput(['autocomplete' => 'off']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'order_keywords')->textInput(['autocomplete' => 'off']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'order_description')->textarea(['rows' => 3]) ?>
                </div>

            </div>
        </div>
        <div id="tab-3" class="tab-pane">
            <div class="panel-body">

                <div class="col-sm-6">
                    <?= $form->field($model, 'contacts_indexation', ['inputOptions' => ['class' => 'form-control indexation_items']])
                        ->dropDownList($indexationItems) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'contacts_title')->textInput(['autocomplete' => 'off']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'contacts_keywords')->textInput(['autocomplete' => 'off']) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'contacts_description')->textarea(['rows' => 3]) ?>
                </div>

                <div class="col">
                    <?= $form->field($model, 'contacts_text')->textarea(['rows' => 3]) ?>
                </div>

            </div>
        </div>
    </div>

    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-warning']) ?>

    <?php $form = ActiveForm::end(); ?>

</div>