<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;


$this->title = 'Cake of the month';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= ArrayHelper::map(Base::find()->all(),'id_b','name');?>
    <img style= 'width:350px;' src="<?=Yii::getAlias('@web'); ?>/img/owocowy.jpg">

</div>
