<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body class=blank>
<?php $this->beginBody() ?>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Main content-->
    <section class="content">

        <div class="container-center animated slideInDown">

            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Вход</h3>
                    <small>Необходимо авторизоваться</small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <!---->
                    <!--                    --><?php //$form = ActiveForm::begin(['id' => 'loginForm']) ?>
                    <!---->
                    <!--                    <div class="form-group">-->
                    <!--                        --><? //= $form->field($model, 'username')->textInput(['autocomplete' => 'off']) ?>
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="form-group">-->
                    <!--                        --><? //= $form->field($model, 'password')->passwordInput() ?>
                    <!--                    </div>-->
                    <!---->
                    <!--                    --><? //= Html::submitButton('Вход', ['class' => 'btn btn-accent']) ?>
                    <!---->
                    <!--                    --><?php //ActiveForm::end() ?>

                    <?= $content ?>

                </div>
            </div>


        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
