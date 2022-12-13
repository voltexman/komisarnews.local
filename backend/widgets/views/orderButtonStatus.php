<button data-toggle="dropdown"
        class="btn <?= $class ?> btn-xs dropdown-toggle btn-select-order-status-<?= $order['id'] ?>"
        id=""><?= $order['status'] ?></button>
<ul class="dropdown-menu select-order-status" id="<?= $order['id'] ?>">
    <li><a class="dropdown-item" href="javascript:void(0)">В ожидании</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Завершён</a></li>
</ul>
