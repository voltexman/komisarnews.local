<?php

use backend\assets\AppAsset;
use backend\widgets\ArticleCategoryNameShow;
use backend\widgets\ArticleStatusShow;
use yii\helpers\Html;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FAS;
use yii\widgets\LinkPager;

AppAsset::register($this);

$this->registerCssFile('@web/vendor/toastr/toastr.min.css');
$this->registerJsFile('@web/vendor/toastr/toastr.min.js', ['depends' => yii\web\JqueryAsset::className()]);
$this->registerCssFile('@web/vendor/switchery/switchery.min.css');
$this->registerJsFile('@web/vendor/switchery/switchery.min.js');
$this->registerCssFile('@web/vendor/datatables/datatables.min.css');
$this->registerJsFile('@web/vendor/datatables/datatables.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/vendor/datatables/dataTables.bootstrap4.min.js', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
$this->registerJsFile('@web/js/article.js', [
    'position' => yii\web\View::POS_END,
    'depends' => [\yii\web\JqueryAsset::className()]
]);
$js = <<<JS
    $('#articles-list').DataTable({
        "dom": "<'row'<'col'l><'col-sm-12'f>>t<'row'<'col'i><'col-sm-12'p>>",
        "bLengthChange": false,
        "bInfo": false,
        "iDisplayLength": 15,
        "language": {
            "search": "Поиск по материалам",
            "searchPlaceholder": "по названию, категориям и просмотрам",
            "paginate": {
                "previous": "Предыдущая",
                "next": "Следующая"
            }
        }
    });
JS;
$this->registerJs($js);

$this->title = 'Список материалов сайта';
$number = 1;
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-filled">
            <div class="panel-body">
                <table id="articles-list" class="table table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Категория</th>
<!--                        <th>Просмотры</th>-->
                        <th>Статус</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articles as $list => $article) : ?>
                        <tr>
                            <th scope="row"><?= $number++ ?></th>
                            <td>
                                <a href="<?= Url::to('article/update') . '/' . $article['id'] ?>"><?= $article['name'] ?></a>
                            </td>
                            <td><?= ArticleCategoryNameShow::widget(['category' => $article['category']]) ?></td>
<!--                            <td>--><?//= FAS::icon('eye') . ' ' . $article['views'] ?><!--</td>-->
                            <td><?= ArticleStatusShow::widget([
                                    'id' => $article['id'],
                                    'publication' => $article['publication'],
                                    'indexation' => $article['indexation']
                                ]) ?></td>
                            <td>
                                <?= Html::a(FAS::icon('info-circle'), Url::to('javascript:void(0)'), ['class' => 'btn btn-default btn-xs article-details', 'id' => $article['id'], 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                                <?= Html::a(FAS::icon('edit') . '' . '', Url::to(['article/update', 'id' => $article['id']]), ['class' => 'btn btn-default btn-xs', 'type' => 'button']) ?>
                                <?= Html::a(FAS::icon('trash') . '' . '', Url::to(['article/delete', 'id' => $article['id']]), ['class' => 'btn btn-default btn-xs', 'type' => 'button']) ?>
                            </td>
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
