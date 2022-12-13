<?php

use rmrevin\yii\fontawesome\FAS;
use backend\assets\AppAsset;
use yii\web\JqueryAsset;
use yii\web\View;

AppAsset::register($this);

$this->registerCssFile('@web/vendor/toastr/toastr.min.css');
$this->registerCssFile('@web/vendor/magnific/dist/css/magnific-popup.css');
$this->registerCssFile('@web/vendor/datatables/datatables.min.css');
$this->registerJsFile('@web/vendor/magnific/dist/js/jquery.magnific-popup.js', ['depends' => JqueryAsset::className()]);
$this->registerJsFile('@web/vendor/popper/popper.min.js', ['depends' => [JqueryAsset::className()], 'position' => View::POS_HEAD]);
$this->registerJsFile('@web/vendor/toastr/toastr.min.js', ['depends' => JqueryAsset::className()]);
$this->registerJsFile('@web/vendor/datatables/datatables.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/datatables/dataTables.bootstrap4.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/js/order.js', ['depends' => [JqueryAsset::className()]]);

$this->title = 'Заказы';
$number = 1;
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-filled">
            <div class="panel-body">
                <table id="subscribersList" class="table table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ФИО</th>
                        <th>Телефон</th>
                        <th>Почта</th>
                        <th>Город</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $list => $order) : ?>
                        <tr>
                            <th scope="row"><?= $number++ ?></th>
                            <td><a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#myModal" id="<?= $order['id'] ?>"
                                   class="order-details"><?= FAS::icon('user') . ' ' . $order['fio'] ?></a></td>
                            <td><?= FAS::icon('phone') . ' ' . $order['phone'] ?></td>
                            <td><?= FAS::icon('envelope') . ' ' . $order['email'] ?></td>
                            <td><?= FAS::icon('map-marker') . ' ' . $order['city'] ?></td>
                            <td><?= \backend\widgets\OrderButtonStatus::widget(['order' => $order]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"></div>
</div>
