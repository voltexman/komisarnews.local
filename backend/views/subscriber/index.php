<?php

use rmrevin\yii\fontawesome\FAR;
use rmrevin\yii\fontawesome\FAS;
use backend\assets\AppAsset;
use yii\web\JqueryAsset;

AppAsset::register($this);

$this->registerCssFile('@web/vendor/toastr/toastr.min.css');
$this->registerCssFile('@web/vendor/datatables/datatables.min.css');
$this->registerJsFile('@web/vendor/toastr/toastr.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/datatables/datatables.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/datatables/dataTables.bootstrap4.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/js/subscriber.js', ['depends' => JqueryAsset::className()]);

$this->title = 'Подписчики';
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
                        <th>E-Mail</th>
                        <th>Дата/Время</th>
                        <th>Город</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($subscribers as $list => $subscriber) : ?>
                        <tr>
                            <th scope="row"><?= $number++ ?></th>
                            <td><?= FAS::icon('envelope') . ' ' . $subscriber['email'] ?></td>
                            <td><?= FAS::icon('calendar') . ' ' . $subscriber['date'] . FAS::icon('clock') .
                                ' ' . $subscriber['time'] ?></td>
                            <td><?= FAS::icon('map-marker') . ' ' . $subscriber['location'] ?></td>
                            <td><a href="javascript:void(0)" class="btn btn-default btn-xs btn-mail-send"
                                   data-toggle="modal"
                                   data-target="#myModal"><?= FAR::icon('paper-plane')?> Отправить письмо</a></td>
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
