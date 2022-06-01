<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cake;
use app\models\Orders;
use yii\helpers\VarDumper

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form ActiveForm */
?>
<div class="site-orders">

    <?php $form = ActiveForm::begin([
    'id' => 'orders-form',]);?>
            <?php
            VarDumper::dump($model);
?>

        <?= $form->field($model, 'date')->textInput() ?>
        <?= $form->field($model, 'note')->textInput() ?>
        <p>This text will be on top of your cake</p>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-orders -->
