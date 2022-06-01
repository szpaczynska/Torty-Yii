<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Base;
use app\models\Cream;
use app\models\Addition;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Cake */
/* @var $form ActiveForm */
?>
<div class="site-cake">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'id_b')-> dropDownList(ArrayHelper::map(Base::find()->all(),'id_b','name'), ['prompt'=>'Choose ...']);  ?>
        <?= $form->field($model, 'id_c')-> dropDownList(ArrayHelper::map(Cream::find()->all(),'id_c','name'), ['prompt'=>'Choose ...']);  ?>
        <?= $form->field($model, 'id_a')-> dropDownList(ArrayHelper::map(Addition::find()->all(),'id_a','name'), ['prompt'=>'Choose ...']);  ?>
        <?= $form->field($model, 'description')->textInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-cake -->
