<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Country;
use yii\widgets\ActiveForm;
?>
<h1>Library</h1>
<ul class="library" style="list-style-type: none;">
    <li>
        <div>书名</div>
        <div>编号</div>
        <div>作者</div>
        <div>类型</div>
    </li>
<?php foreach ($countries as $country): ?>
    <li>
        <div><?= Html::encode("{$country->name}") ?></div>
        <div><?= Html::encode("{$country->ID}") ?></div>
        <div><?= Html::encode("{$country->author}") ?></div>
        <div><?= Html::encode("{$country->type}") ?></div>
        
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
