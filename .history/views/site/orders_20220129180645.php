<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cake;
use app\models\Orders;
use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form ActiveForm */
?>
<div class="site-orders">

    <?php $form = ActiveForm::begin([
    'id' => 'orders-form',]);?>
<?php
           // print_r($model);
?>
        <?= $form->field($model, 'user_id')->dropDownList(['a' => Yii::$app->user->identity->id]) ?>
        <?= $form->field($model, 'cake_id')->dropDownList(ArrayHelper::map(Cake::find()->all(),'id','name'), ['prompt'=>'Choose cake you want']);   ?>
        <?= $form->field($model, 'note')->textInput() ?>
        <p>This text will be on top of your cake</p>
        <?= $form->field($model, 'date')->textInput() ?>
        <?= $form->field($model, 'paid')->dropDownList(['a' => 0])?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <a class="btn btn-primary" href="koszyk">Skip (for now)</a>


</div><!-- site-orders -->
