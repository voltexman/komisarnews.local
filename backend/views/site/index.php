<?php

use yii\web\View;
use yii\web\JqueryAsset;
use backend\assets\AppAsset;
use rmrevin\yii\fontawesome\FAS;
use backend\widgets\DashboardVisitorsCount;
use backend\widgets\DashboardArticlesCount;
use backend\widgets\DashboardSubscribersCount;
use backend\widgets\DashboardOrdersCount;

AppAsset::register($this);

$this->title = 'Администрирования сайта';

$this->registerCssFile('@web/vendor/toastr/toastr.min.css');
$this->registerJsFile('@web/vendor/popper/popper.min.js', ['depends' => [JqueryAsset::className()], 'position' => View::POS_HEAD]);
$this->registerJsFile('@web/vendor/sparkline/index.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/flot/jquery.flot.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/flot/jquery.flot.resize.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/flot/jquery.flot.spline.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/chart.js/dist/Chart.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/toastr/toastr.min.js', ['depends' => [JqueryAsset::className()]]);
$this->registerJsFile('@web/js/dashboard.js', ['depends' => [JqueryAsset::className()], 'position' => View::POS_END]);
$dashboard = <<< JS
	// Flot charts data and options
	var data1 = [[0, 36], [1, 24], [2, 11], [3, 17], [4, 10], [5, 15], [6, 24], [7, 30]];
	var data2 = [[0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66]];

	var chartUsersOptions = {
        series: {
            splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 1
            }
        },
        grid: {
            tickColor: "#404652",
            borderWidth: 0,
            borderColor: '#404652',
            color: '#404652'
        },
        colors: ["#f7af3e", "#DE9536"]
	};

	$.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);
JS;
$this->registerJs($dashboard, yii\web\View::POS_READY);
?>
<div class="row">
    <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?= DashboardVisitorsCount::widget() ?>
            </div>
        </div>
    </div>
    <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?= DashboardArticlesCount::widget() ?>
            </div>
        </div>
    </div>
    <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?= DashboardSubscribersCount::widget() ?>
            </div>
        </div>
    </div>
    <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?= DashboardOrdersCount::widget() ?>
            </div>
        </div>
    </div>
</div>

<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <div class="panel">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="panel-body h-200 list">-->
<!--                        <div class="stats-title">-->
<!--                            <h4><i class="fa fa-bar-chart text-warning" aria-hidden="true"></i> Общая посещаемость</h4>-->
<!--                        </div>-->
<!--                        <div class="small">-->
<!--                            Total users from the beginning of activity. See detailed charts for more information-->
<!--                            locations and traffic source.-->
<!--                        </div>-->
<!--                        <div class="sparkline3"></div>-->
<!--                        <div class="row">-->
<!--                            <div class="col-4 col-sm-4 col-md-4">-->
<!--                                <small class="stat-label">Today</small>-->
<!--                                <h4 class="m-t-xs">170 <i class="fa fa-level-up text-warning"></i></h4>-->
<!--                            </div>-->
<!--                            <div class="col-4 col-sm-4 col-md-4">-->
<!--                                <small class="stat-label">Last month %</small>-->
<!--                                <h4 class="m-t-xs">20 <i class="fa fa-level-down c-white"></i></h4>-->
<!--                            </div>-->
<!--                            <div class="col-4 col-sm-4 col-md-4">-->
<!--                                <small class="stat-label">Year</small>-->
<!--                                <h4 class="m-t-xs">2180 <i class="fa fa-level-up text-warning"></i></h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-8">-->
<!--                    <div class="panel-body">-->
<!--                        <div class="text-center slight">-->
<!--                        </div>-->
<!--                        <div class="flot-chart" style="height: 160px;margin-top: 5px">-->
<!--                            <div class="flot-chart-content" id="flot-line-chart"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="row">
    <h5 class="text-center">Заказы</h5>
    <div class="col-md-12">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?php if ($orders) : ?>
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Телефон</th>
                            <th>Почта</th>
                            <th>Город</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order)  : ?>
                            <tr>
                                <td><a href="javascript:void(0)" data-toggle="modal"
                                       data-target="#myModal" id="<?= $order['id'] ?>"
                                       class="order-details"><?= FAS::icon('user') . ' ' . $order['fio'] ?></a>
                                </td>
                                <td><?= FAS::icon('phone') . '&nbsp' . $order['phone'] ?></td>
                                <td><?= FAS::icon('envelope') . '&nbsp' . $order['email'] ?></td>
                                <td><?= FAS::icon('map-marker') . '&nbsp' . $order['city'] ?></td>
                                <td>
                                    <button data-toggle="dropdown"
                                            class="btn btn-danger btn-xs dropdown-toggle btn-select-order-status-<?= $order['id'] ?>"
                                            id="<?= $order['id'] ?>"><?= $order['status'] ?> </button>
                                    <ul class="dropdown-menu select-order-status" id="<?= $order['id'] ?>">
                                        <li><a class="dropdown-item" href="javascript:void(0)">В ожидании</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Завершён</a></li>
                                    </ul>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h5>Новых заказов нет</h5>
                    <small></small>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <h5 class="text-center">Подписчики</h5>
    <div class="col-md-12">
        <div class="panel panel-filled">
            <div class="panel-body">
                <?php if ($subscribers) : ?>
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th>Почта</th>
                            <th>Дата/Время</th>
                            <th>Город</th>
                            <th>Связаться</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($subscribers as $subscriber)  : ?>
                            <tr>
                                <td><?= FAS::icon('envelope') . '&nbsp' . $subscriber['email'] ?></td>
                                <td><?= FAS::icon('calendar') . '&nbsp' . $subscriber['date'] . '&nbsp&nbsp' . FAS::icon('clock') . '&nbsp' . $subscriber['time'] ?></td>
                                <td><?= FAS::icon('map-marker') . '&nbsp' . $subscriber['location'] ?></td>
                                <td><a href="javascript:void(0)" class="btn btn-default btn-xs btn-mail-send"
                                       data-toggle="modal"
                                       data-target="#myModal">Отправить письмо</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h5>Новых подписчиков нет</h5>
                    <small></small>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"></div>
</div>