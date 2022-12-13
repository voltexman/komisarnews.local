<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<section class=four-o-four>
    <div class=four-o-four-inner>
        <div class=container>
            <div class=row>
                <div class="col-sm-6 col-sm-offset-6">
                    <img src=assets/images/404.jpg class="four-o-four-img visible-xs" alt="Alternative Text">
                    <h3>Oops! Похоже что Вы затерялись.</h3>
                    <p>Пожалуйста вернитесь и перейдите на другую ссылку</p>
                    <h1>404</h1><a href="<?= Url::to(Url::base()); ?>" class="btn btn-default">На главную</a>
                </div>
            </div>
        </div>
    </div>
</section>
