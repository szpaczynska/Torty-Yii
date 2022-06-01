<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$query = Cake::find()->where('id=2');
$this->title = 'Bake a cake';
?>
<div class="site-index">
<h1>Cakes</h1>
<ul>
<?php foreach ($cake as $cake): ?>
    <li>
        <?= Html::encode("{$cake->name} -{$cake->description}") ?>
        <?= echo $query->createCommand()->sql;?>
    </li>
<?php endforeach; ?>
</ul>
<img src="<?=Yii::getAlias('@web'); ?>/img/czekoladowy.jpg">
</div>
