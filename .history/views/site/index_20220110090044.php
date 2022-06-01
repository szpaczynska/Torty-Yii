<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$this->title = 'Bake a cake';
?>
<div style='  position: relative;'>
<img style= 'width:1200px;   opacity: 0.5;' src="<?=Yii::getAlias('@web'); ?>/img/grafika.jpg">

</div>
