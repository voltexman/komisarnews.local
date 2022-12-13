<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Raleway:100,300,400">
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Roboto:100,300,400">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy=scroll data-target=#main-nav-collapse data-offset=100>
<?php $this->beginBody() ?>

<section class=four-o-four>
    <div class=four-o-four-inner>
        <div class=container>
            <div class=row>
                <div class="col-sm-6 col-sm-offset-6">
                    <img src=assets/images/404.jpg class="four-o-four-img visible-xs" alt="">
                    <h3>Oops! Похоже что Вы затерялись.</h3>
                    <p>Пожалуйста вернитесь и перейдите на другую ссылку</p>
                    <h1>404</h1><a href="<?= Url::to(Url::base()); ?>" class="btn btn-default">На главную</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
