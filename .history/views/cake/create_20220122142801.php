<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cake */
$base = Base::find()->orderBy('name')->all();

$this->title = 'Create Cake';
$this->params['breadcrumbs'][] = ['label' => 'Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cake-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php foreach ($cake as $cake): ?>
    <li>
        <?= Html::encode("{$base->name} -{$base->id_b}") ?>
    </li>
    <?php endforeach; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
