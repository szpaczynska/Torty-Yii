<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;
use app\models\Cake;


$this->title = 'Thank you for your order!';
$this->params['breadcrumbs'][] = $this->title;
/*$cake = Cake::find()
    ->indexBy('2')
    ->all();*/
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
<p>Hope to see you soon</p>
</div>
