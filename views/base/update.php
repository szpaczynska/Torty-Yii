<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Base */

$this->title = 'Update Base: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_b' => $model->id_b]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
