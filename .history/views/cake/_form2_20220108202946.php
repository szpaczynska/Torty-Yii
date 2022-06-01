<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cake */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cake-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'id_b')-> dropDownList(ArrayHelper::map(Cake::find()->all(),'id_b','name'), ['prompt'=>'Wybierz ...']); ?>

    <?= $form->field($model, 'id_c')->textInput() ?>

    <?= $form->field($model, 'id_a')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
