<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cream */

$this->title = 'Create Cream';
$this->params['breadcrumbs'][] = ['label' => 'Creams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cream-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
