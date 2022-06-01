<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form ActiveForm */
?>
<div class="site-orders">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->Yii:: $app->user->identity->id?>
        <?= $form->field($model, 'cake_id')-> dropDownList(ArrayHelper::map(Cake::find()->all(),'id','name'), ['prompt'=>'Choose ...']);  ?>
        <?= $form->field($model, 'date')->textInput() ?>
        <?= $form->field($model, 'note')->textInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-orders -->
