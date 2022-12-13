<?php

use frontend\assets\AppAsset;
use frontend\widgets\AdminContact;
use frontend\widgets\SocialIcons;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

AppAsset::register($this);

$this->registerLinktag(['rel' => 'icon', 'type' => 'image/ico', 'href' => 'favicon.ico']);
$this->registerMetaTag(['name' => 'author', 'content' => 'Eugene']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Raleway:100,300,400">
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto:100,300,400">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy=scroll data-target=#main-nav-collapse data-offset=100>
<?php $this->beginBody() ?>
<div class=page-loader>
    <div class=loader>Загрузка...</div>
</div>

<div class="wrap">

    <nav id=fixedTopNav class="navbar navbar-fixed-top main-navigation" itemscope
         itemtype=https://schema.org/SiteNavigationElement>
        <div class=container>
            <div class=navbar-header>
                <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#main-nav-collapse>
                    <span class=sr-only>Toggle navigation</span>
                    <span class=ion-drag></span>
                </button>
                <div class=navbar-brand itemscope itemtype=https://schema.org/Organization>
                    <span itemprop=name class=sr-only>Reign</span>
                    <a itemprop=url href=<?= Url::home() ?>>Kom<em>!</em>sarNews</a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id=main-nav-collapse>
                <?php
                echo Menu::widget([
                    'items' => [
                        ['label' => 'Головна', 'url' => [Url::to('site/index')]],
                        [
//                            'label' => 'Купівля волосся',
//                            'url' => ['services/index'],
//                            'options' => ['class' => 'dropdown'],
//                            'template' => '<a href="{url}" class="dropdown-toggle {activeCssClass}" data-toggle="dropdown">{label}</a>',
//                            'encodeLabels' => false,
//                            'items' => \frontend\models\Articles::viewMenuItems('sale'),
                        ],
                        ['label' => 'Статті',
                            'url' => ['services/index'],
                            'options' => ['class' => 'dropdown'],
                            'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label}</a>',
                            'items' => \frontend\models\Articles::viewMenuItems('article'),
                        ],
                        ['label' => 'Оцінити волосся', 'url' => Url::to(['order'])],
                        ['label' => 'Контакти', 'url' => Url::to(['contacts'])]
                    ],
                    'submenuTemplate' => '<ul class="dropdown-menu" role="menu">{items}</ul>',
                    'activeCssClass' => 'active',
                    'options' => [
                        'class' => 'nav navbar-nav navbar-right',
                        'role' => 'menu'
                    ],
                ]);
                ?>
            </div>
        </div>
    </nav>

    <?php if (Url::current() !== '/') : ?>

        <header id=header class="home-parallax home-fade dark-bg header-inner">
            <div class=color-overlay></div>
            <div class=container>
                <h1><?= $this->title; ?></h1>
            </div>
        </header>

    <?php endif; ?>

    <?= $content ?>

</div>

<section id=footer-widgets class="section footer-widgets dark-bg">
    <div class=container>
        <div class=row>
            <div class="col-md-4 col-sm-6">
                <div class="content-wrap widget-contact"><h4>Контакти</h4>
                    <?= AdminContact::widget() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id=footer class=footer>
    <div class=container>
        <div class=row>
            <div class="col-md-3 col-sm-4">
                <p class="copyright text-xs-center">&copy; 2019 KomisarNews</p>
            </div>
            <div class="col-md-5 col-sm-4">
                <?= SocialIcons::widget(['position' => 'footer']) ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer-menu text-xs-center">Всі права застережено</div>
            </div>
        </div>
    </div>
</footer>
<a id=totop href=#totop><i class="fa fa-angle-double-up"></i></a>

<!--<script type=text/javascript src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

<?php $this->endBody() ?>
<!--[if lt IE 10]>
<script>
    $('input, textarea').placeholder();
</script>
<![endif]-->
</body>
</html>
<?php $this->endPage() ?>
