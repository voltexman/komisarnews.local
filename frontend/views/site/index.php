<?php

use frontend\widgets\AboutUs;

$this->title = $metaTags['main_title'];
$this->registerMetaTag(['name' => 'robots', 'content' => $metaTags['main_indexation']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $metaTags['main_keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $metaTags['main_description']]);
?>

<header id="header" class="header-wrapper home-parallax home-fade dark-bg" style="top: 0px;">
    <div class="color-overlay" style="opacity: 0.3;"></div>
    <div class="header-wrapper-inner">
        <div class="container">
            <div class="intro" style="opacity: 1;">
                <h1><?= $this->title; ?></h1>
                <p>Дорого, швидко, надійно</p>
                <a href="#services" class="btn btn-default-o onPageNav">Вибрати ваше місто</a>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#why-choose-us" class="onPageNav"><i class="ion-ios-arrow-down"></i></a>
        </div>
    </div>
</header>

<section class=section>
    <div class="container">
        <div class="section-content">
            <?= $metaTags['main_text']; ?>
        </div>
    </div>
</section>

<?= AboutUs::widget(); ?>
