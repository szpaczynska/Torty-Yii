<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$this->title = 'Bake a cake';
?>
<div class="site-index">
<img style= 'width:1500px;' src="<?=Yii::getAlias('@web'); ?>/img/grafika.jpg">

</div>
