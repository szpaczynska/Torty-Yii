<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cake;
/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form ActiveForm */
?>
<div class="site-orders">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'date')->textInput() ?>
        <?= $form->field($model, 'note')->textInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-orders -->
