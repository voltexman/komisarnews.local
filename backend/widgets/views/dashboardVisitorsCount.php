<?php

use rmrevin\yii\fontawesome\FAS;

?>
<h2 class="m-b-none">
    <?= $counts ?><span class="slight"><?= FAS::icon('play', ['class' => 'text-warning'])->rotate(270) ?> +20%</span>
</h2>

<div class="small"><?= $suffix ?></div>
