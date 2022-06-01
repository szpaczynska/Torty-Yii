<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$tab[]=['"/img/czekoladowy.jpg"','/img/owocowy.jpg','/img/truskawkowy.jpg','/img/cynamonowy.jpg'];
$this->title = 'Bake a cake';
?>
<div class="site-index">
<h1>Cakes</h1>
<ul>
<?php foreach ($cake as $cake): ?>
    <li>
        <?= Html::encode("{$cake->name} -{$cake->description}") ?>
    </li>
<?php endforeach; ?>
</ul>
<a href="koszyk"><img style= 'width:270px;'src="<?=Yii::getAlias('@web'); ?>/img/czekoladowy.jpg" value="1"></a>
<?php
$query = new Query();
    $query->select('MAX(id)')->from('cakes.cake');
    $command = $query->createCommand();
    $records = $command->queryAll();
?>
<img style= 'width:270px;' src="<?=Yii::getAlias('@web'); ?>/img/owocowy.jpg">
<img style= 'width:270px;' src="<?=Yii::getAlias('@web'); ?>/img/truskawkowy.jpg">
<img style= 'width:270px;' src="<?=Yii::getAlias('@web'); ?>/img/cynamonowy.jpg">
<p></p>

</div>
