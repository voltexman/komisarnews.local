<?php

/**
 * @var $metaTags
 */

use frontend\assets\AppAsset;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Json;

AppAsset::register($this);

$this->title = $metaTags['order_title'];
$this->registerMetaTag(['name' => 'robots', 'content' => $metaTags['order_indexation']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $metaTags['order_keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $metaTags['order_description']]);

$cities = Json::encode($model->cities);

$this->registerCssFile('https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css');
$this->registerCssFile('@web/css/order.css');
$this->registerCssFile('@web/css/selectric.css');
$this->registerCssFile('@web/css/checkbox.css');
$this->registerJsFile(
    '@web/js/bootstrap3-typeahead.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/jquery.selectric.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/order.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$js = <<<JS
    $(function() {
        $('.cities').typeahead({
            source: $cities
        });
        $('select').selectric();
    });
JS;
$this->registerJs($js);

?>
<div class="site-sale">
    <section id=contact class="section contact">
        <div class=container>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h5>Для того щоб продати волосся необхідно заповнити форму</h5>

                        <?php
                        $form = ActiveForm::begin([
                            'id' => 'contact-form',
                            'options' => [
                                'enctype' => 'multipart/form-data'
                            ]
                        ]); ?>

                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'fio', ['inputOptions' => ['autocomplete' => 'off']]) ?>
                            </div>

                            <div class="col-sm-6">
                                <?= $form->field($model, 'city', ['inputOptions' => [
                                    'autocomplete' => 'off',
                                    'class' => 'cities form-control'
                                ]
                                ]) ?>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'email', ['inputOptions' => ['autocomplete' => 'off']]) ?>
                            </div>

                            <div class="col-sm-6">
                                <?= $form->field($model, 'phone', ['inputOptions' => ['autocomplete' => 'off']]) ?>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'color')->dropDownList($model->colors) ?>
                            </div>

                            <div class="col-sm-6">
                                <?= $form->field($model, 'weight')->input('number', ['min' => 0,
                                    'max' => 10000,
                                    'value' => 0]) ?>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'length')->input('number', ['min' => 0,
                                    'max' => 2000,
                                    'value' => 0]) ?>
                            </div>

                            <div class="col-sm-6">
                                <?= $form->field($model, 'age')->input('number', ['min' => 18,
                                    'max' => 50,
                                    'value' => 18]) ?>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li>
                                        <input type="checkbox" id="checkboxOne" value="Срезанные" name="options[]">
                                        <label for="checkboxOne">Зрізані</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkboxTwo" value="Крашенные" name="options[]">
                                        <label for="checkboxTwo">Фарбовані</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkboxThree" value="С сединой" name="options[]">
                                        <label for="checkboxThree">З сивиною</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row no-gutters"></div>

                        <?= $form->field($model, 'images[]')->widget(FileInput::classname(), [
                            'language' => 'uk',
                            'options' => [
                                'multiple' => true,
                                'accept' => 'image/*'
                            ],
                            'pluginOptions' => [
                                'previewFileType' => 'image',
                                'allowedFileExtensions' => ['jpg', 'gif', 'png', 'jpeg'],
                                'showPreview' => true,
                                'showCaption' => false,
                                'showRemove' => true,
                                'showUpload' => false,
                                'browseLabel' => 'Відкрити фото',
                                'maxFileCount' => 10,
                                'maxFileSize' => 4000,
                                'removeClass' => 'btn btn-danger',
                                'browseClass' => 'btn btn-dark',
                                'overwriteInitial' => false,
                                'uploadUrl' => 'order'
                            ]
                        ]); ?>

                        <?= $form->field($model, 'message', ['inputOptions' => ['style' => 'resize:none']])
                            ->textarea(['rows' => 6, 'placeholder' => 'Додаткова або будь-яка інша інформація']) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Відправити', ['class' => 'btn btn-default btn-lg', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="sale-banner-inform">
                            <?= FAS::icon('info')->pullRight(); ?>
                            <p>Заповніть всі необхіні поля та надішліть нам замовлення.</p>
                            <p>Бажано вказати колір, вагу і довжину Вашого волосся.</p>
                            <p>Електронна пошта та номер телефону нам необхідний для зворотнього зв`язку з Вами та для
                                того щоб повідомити Вас про купівлю волосся і його вартість. Спочатку Ви отримаєте
                                сповіщення про те що наш фахівець ознайомлюється з замовленням, після чого Вам надійде
                                другий лист з інформацією про вартість та іншими деталями.<br><i>Зазвичай це займає не
                                    більше декількох годин після відправлення замовлення.</i></p>
                            <p>В полі "Ваше повідомлення" Ви можете вказати будь-яку іншу, на Вашу думку, важливу
                                інформацію стосовно волосся. Наприклад, структуру волосся, стан зрізу: свіжа рівна
                                стрижка або просто укладене волосся або шиньйон. Вкажіть якомога більше інформації,
                                важливі всі деталі.</p>
                            <p class="text-uppercase">Ми не надаємо Ваші контактні дані іншим особам та не розсилаємо
                                спам!</p>
                            <p class="text-uppercase">Не намагайтеся обдурити оцінювача, використовуючи прийоми, щоб
                                поліпшити якість волосся, або розтягувати пасмо щоб візуально збільшити довжину. Наш
                                фахівець обов'язково розпізнає обман.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
