<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cake */

$this->title = 'Update Cake: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cake-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
