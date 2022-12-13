<?php

use backend\assets\AppAsset;
use rmrevin\yii\fontawesome\FAR;
use backend\widgets\AddButtonShow;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-expand-md navbar-default fixed-top">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="<?= Url::home() ?>">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="<?= Url::home() ?>">KOMISAR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="#">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
            <form class="navbar-form mr-auto">
                <!--                <input type="text" class="form-control" placeholder="Поиск по сайту" style="width: 175px">-->
            </form>
            <ul class="nav navbar-nav">
                <li class="nav-item uppercase-link">
                    <?= Html::a('Выход', Url::to('/admin/logout'), ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item profil-link">
                    <?= Html::a(Html::tag('span', 'www.KomisarNews.com', ['class' => 'profile-address']), Url::to('/'), ['target' => '_blank']) ?>
                    <?= Html::a(Html::img('@web/images/profile.jpg', ['class' => 'rounded-circle', 'alt' => '']), 'javascript:void(0)') ?>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <?php
            echo Menu::widget([
                'options' => ['class' => 'nav luna-nav'],
                'activeCssClass' => 'active',
                'encodeLabels' => false,
                'items' => [
                    [
                        'label' => FAR::icon('copy') . ' Статьи',
                        'url' => Url::to('@web/articles'),
                        'active' => $this->context->route == 'article/index'
                    ],
//                    ['label' => 'Блоки', 'url' => Url::to('@web/blocks')],
                    [
                        'label' => FAR::icon('id-card') . ' Заказы',
                        'url' => Url::to('@web/orders'),
                        'active' => $this->context->route == 'order/index']
                    ,
                    [
                        'label' => FAR::icon('user') . ' Подписчики',
                        'url' => Url::to('@web/subscribers'),
                        'active' => $this->context->route == 'subscriber/index'
                    ],
//                    ['label' => 'Письма', 'url' => Url::to('@web/mails')],
                    [
                        'label' => FAR::icon('file') . ' Страницы',
                        'url' => Url::to('@web/pages'),
                        'active' => $this->context->route == 'pages/index'
                    ],
//                    ['label' => 'Информация', 'options' => ['class' => 'nav-category']],
//                    ['label' => 'Статистика', 'url' => Url::to('@web/statistics')],
                    ['label' => 'Настройки', 'url' => Url::to('@web/settings')],
//                    ['label' => 'Справка', 'url' => Url::to('@web/help')]
                ],
            ]);
            ?>
            <ul class="nav luna-nav">
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">KOMISAR</span> Все права защищены.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>    <!-- End navigation-->

    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <?= AddButtonShow::widget(); ?>
                        </div>
                        <div class="header-icon">
                            <i class="pe <?= $this->context->pageName['pageIcon']; ?>"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs"><?= $this->context->pageName['pageTitle']; ?></h3>
                            <small><?= $this->context->pageName['pageDescription'] ?></small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <?= $content ?>

        </div>
    </section>
    <!-- End main content-->

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
