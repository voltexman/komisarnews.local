<?php

use frontend\assets\AppAsset;
use frontend\widgets\AdminContact;
use frontend\widgets\SocialIcons;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

AppAsset::register($this);

$this->title = $metaTags['contacts_title'];
$this->registerMetaTag(['name' => 'robots', 'content' => $metaTags['contacts_indexation']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $metaTags['contacts_keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $metaTags['contacts_description']]);

$this->registerCssFile('@web/css/contacts.css');
$this->registerJsFile(
    '@web/js/mailing.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>

<div class="site-contact">
    <section id=contact class="section contact">
        <div class=container>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h5>Зв`яжіться з нами надіславши листа</h5>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name', ['inputOptions' => ['autocomplete' => 'off']]) ?>

                        <?= $form->field($model, 'contact', ['inputOptions' => ['autocomplete' => 'off']]) ?>

                        <?= $form->field($model, 'message', ['inputOptions' => ['style' => 'resize:none']])
                            ->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Відправити', ['class' => 'btn btn-default btn-lg', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="mailing-banner-inform">
                            <?= FAS::icon('info')->pullRight() ?>
                            <div><?= $metaTags->contacts_text ?></div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="contact-info-wrap">
                                <h5>Контактна інформація</h5>
                                <address class=contact-info>
                                    <?= AdminContact::widget(); ?>
                                </address>
                                <h5>Ми в соціальних мережах</h5>
                                <div class=contact-info>
                                    <?= SocialIcons::widget(['position' => 'page']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
