<?php

use backend\assets\AppAsset;
use yii\web\JqueryAsset;

AppAsset::register($this);

$this->registerCssFile('@web/vendor/switchery/switchery.min.css');
$this->registerJsFile('@web/vendor/switchery/switchery.min.js');

$this->registerCssFile('@web/vendor/select2/dist/css/select2.min.css');
$this->registerJsFile('@web/vendor/select2/dist/js/select2.js', ['depends' => JqueryAsset::className()]);
$this->registerCssFile('@web/vendor/summernote/dist/summernote-bs4.css');
$this->registerJsFile('@web/vendor/summernote/dist/summernote-bs4.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/summernote/lang/summernote-ru-RU.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/popper/popper.min.js');

$js = <<<JS
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
    $('.summernote').summernote({
        lang:'ru-RU',
        height: 400,
    });
        $(".category-select").select2({
        placeholder: "Выбор категории",
        allowClear: true,
        minimumResultsForSearch: -1
    });
JS;
$this->registerJs($js);

$this->title = 'Изменение материала: ' . $model['name'];
$this->context->pageName = [
    'pageIcon' => 'pe-7s-pen',
    'pageTitle' => 'Изменение материала',
    'pageDescription' => 'Редактирование содержимого и мета тегов'
];
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-filled">
            <div class="panel-heading">
                <div class="panel-tools"></div>
            </div>
            <div class="panel-body">

                <?php if (Yii::$app->controller->action->id !== 'create') : ?>
                <p>На редактировнии статьи <code>"<?= $model['name'] ?>"</code>, с идентификатором
                    <code><?= $model['id'] ?></code>, и алиасом <code><?= $model['alias'] ?></code>
                    <?php endif; ?>

                    <?= $this->render('_form', [
                        'model' => $model
                    ]) ?>
            </div>
        </div>
    </div>
