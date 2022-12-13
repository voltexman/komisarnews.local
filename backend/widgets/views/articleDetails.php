<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title"><?= $article['name'] ?></h4>
<!--        <small>--><?//= $article['category'] ?><!--</small>-->
    </div>
    <div class="modal-body">
        <h4 class="m-t-none">SEO и статистические данные</h4>
        <p style="line-height: 14px;font-size: 12px"><b>Ключевые слова:</b> <?= $article['keywords'] ?></p>
        <p style="line-height: 14px;font-size: 12px"><b>Описание:</b> <?= $article['description'] ?></p>
<!--        <div class="row">-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">Сегодня</small>-->
<!--                <h4 class="m-t-xs">170 <i class="fa fa-level-up text-accent"></i></h4>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">За месяц</small>-->
<!--                <h4 class="m-t-xs">20 <i class="fa fa-level-down c-white"></i></h4>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">Всего</small>-->
<!--                <h4 class="m-t-xs">246 <i class="fa fa-level-up text-accent"></i></h4>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">Поделившихся</small>-->
<!--                <h4 class="m-t-xs">246 <i class="fa fa-level-up text-accent"></i></h4>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">Коэффициент</small>-->
<!--                <h4 class="m-t-xs">246 <i class="fa fa-level-up text-accent"></i></h4>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-4">-->
<!--                <small class="stat-label">Всего</small>-->
<!--                <h4 class="m-t-xs">246 <i class="fa fa-level-up text-accent"></i></h4>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="progress m-t-xs full progress-small">-->
<!--            <div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class=" progress-bar progress-bar-warning">-->
<!--                <span class="sr-only">65% Complete (success)</span>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-accent" data-dismiss="modal">Закрыть</button>
    </div>
</div>
