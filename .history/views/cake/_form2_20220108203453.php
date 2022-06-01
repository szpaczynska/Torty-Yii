<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Base;
use app\models\Cream;
use app\models\Addition;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Cake */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cake-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'id_b')-> dropDownList(ArrayHelper::map(Base::find()->all(),'id_b','name'), ['prompt'=>'Choose ...']); ?>

    <?=$form->field($model, 'id_c')-> dropDownList(ArrayHelper::map(Cream::find()->all(),'id_c','name'), ['prompt'=>'Choode ...']); ?>

    <?=$form->field($model, 'id_a')-> dropDownList(ArrayHelper::map(Addition::find()->all(),'id_a','name'), ['prompt'=>'Wybierz ...']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
