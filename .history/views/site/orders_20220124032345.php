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
            print_r($model);
?>
        <?= $form->field($model, 'date')->textInput() ?>
        <?= $form->field($model, 'note')->textInput() ?>
        <p>This text will be on top of your cake</p>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <a class="btn btn-primary" href="koszyk">Skip (for now)</a>
    </div>


</div><!-- site-orders -->
