<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$this->title = 'Bake a cake';
?>
<div style='position: relative;'>
<img style= 'width:1200px;   opacity: 0.5;' src="<?=Yii::getAlias('@web'); ?>/img/grafika.jpg">
<div style="position: absolute;
  top: 8px;
  left: 16px;
  font-size: 40px;
  font-family: 'Century Gothic';">Welcome in your sweet dream!</div>
  <form action="site/about">
    <input  style="position: absolute;
  top: 80px;
  left: 16px;
  border: none;
  color: white;
  background-color: orange;
  border-radius: 3px;" type="submit" value="See some cake!" />
</form>
</div>
