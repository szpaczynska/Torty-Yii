<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cream */

$this->title = 'Update Cream: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Creams', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_c' => $model->id_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cream-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
