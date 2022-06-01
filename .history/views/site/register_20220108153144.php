<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewUser */
/* @var $form ActiveForm */
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">
<h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput() ?>
        <?= $form->field($model, 'password')->textInput() ?>
        <?= $form->field($model, 'email')->passwordInput()  ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
