<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$this->title = 'Bake a cake';
Yii::app()->clientScript->registerCSSFile(Yii::app()->baseUrl.'/path/to/your/script');
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
<img classs="image" src="<?=Yii::getAlias('@web'); ?>/img/czekoladowy.jpg">
<img src="<?=Yii::getAlias('@web'); ?>/img/owocowy.jpg">
<img src="<?=Yii::getAlias('@web'); ?>/img/truskawkowy.jpg">
<img src="<?=Yii::getAlias('@web'); ?>/img/cynamonowy.jpg">

</div>
