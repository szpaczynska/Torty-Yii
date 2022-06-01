<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cream */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Creams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cream-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_c' => $model->id_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_c' => $model->id_c], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_c',
            'name',
            'price',
        ],
    ]) ?>

</div>
