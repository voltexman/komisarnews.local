<?php

use rmrevin\yii\fontawesome\FAS;

?>
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title"><?= $order['fio'] ?></h4>
        <b><?= $order['status'] ?></b>
    </div>
    <div class="modal-body">
        <h4>Данные заказа</h4>
        <div class="col-md-6 col-6">
            <small class="stat-label"></small>
            <h4 class="m-t-xs"><?= FAS::icon('phone')->addCssClass('text-accent') . ' ' . $order['phone'] ?></h4>
        </div>
        <div class="col-md-6 col-6">
            <small class="stat-label"></small>
            <h4 class="m-t-xs"><?= FAS::icon('map-marker')->addCssClass('text-accent') . ' ' . $order['city'] ?></h4>
        </div>
        <div class="col-md-12 col-12">
            <small class="stat-label"></small>
            <h4 class="m-t-xs"><?= FAS::icon('envelope')->addCssClass('text-accent') . ' ' . $order['email'] ?></h4>
        </div>
        <hr>
        <h4 class="m-t-none">Параметры</h4>
        <div class="row">
            <div class="col-md-4 col-4">
                <small class="stat-label">Возраст</small>
                <h4 class="m-t-xs"><?= $order['age'] ?> лет</h4>
            </div>
            <div class="col-md-4 col-4">
                <small class="stat-label">Вес волос</small>
                <h4 class="m-t-xs"><?= $order['weight'] ?> гр.</h4>
            </div>
            <div class="col-md-4 col-4">
                <small class="stat-label">Длина среза</small>
                <h4 class="m-t-xs"><?= $order['length'] ?> см.</h4>
            </div>
            <div class="col-md-6 col-6">
                <small class="stat-label">Цвет</small>
                <h4 class="m-t-xs"><?= $order['color'] ?></h4>
            </div>
            <div class="col-md-12 col-6">
                <small class="stat-label">Сообщение</small>
                <p class="m-t-xs"><?= $order['message'] ?></p>
            </div>
        </div>
        <h4 class="m-t-none">Фотографии</h4>
        <?php if ($photos) : ?>
            <?php foreach ($photos as $photo) : ?>
                <a class="image" href="<?= '/frontend/web/uploads/' . $order['directory'] . '/' . $photo ?>">
                    <img src="<?= '/frontend/web/uploads/' . $order['directory'] . '/thumbnails/' . $photo ?>" alt=""
                     class="rounded image-lg">
                </a>
            <?php endforeach; ?>
        <?php else : ?>
            <h6 class="m-t-none">Клиент не прислал фотографий</h6>
        <?php endif; ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-accent" data-dismiss="modal">Закрыть</button>
    </div>
</div>
