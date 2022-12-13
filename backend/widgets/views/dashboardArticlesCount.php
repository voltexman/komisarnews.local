<?php

use rmrevin\yii\fontawesome\FAS;
?>
<h2 class="m-b-none">
    <?= $count?> <span class="slight"><?= FAS::icon('share-alt', ['class' => 'text-warning'])?> <?= $shared?></span>
</h2>

<div class="small"><?= $suffix?></div>
