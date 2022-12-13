<?php

/**
 * @var $article Article
 */

use backend\models\Article;
use frontend\widgets\AboutUs;
use gietos\yii\ionicons\Ion;
use yii\helpers\Html;
use yii\helpers\Url;

$article['indexation'] ? $indexation = 'index, follow' : $indexation = 'noindex, nofollow';

$this->title = $article['name'];
$this->registerMetaTag(['name' => 'robots', 'content' => $indexation]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $article['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $article['description']]);
?>

<section class=section>
    <div class="container">
        <div class="section-content">
            <?= $article['text']; ?>
        </div>
    </div>
</section>

<?php if ($article['category'] != 'article') : ?>
<?= AboutUs::widget(); ?>
<?php endif; ?>
