<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Addition */

$this->title = 'Update Addition: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Additions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_a' => $model->id_a]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="addition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
