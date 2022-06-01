<?php

use yii\helpers\Html;
use app\models\Base;
use app\models\Cream;
use app\models\Addition;


/* @var $this yii\web\View */
/* @var $model app\models\Cake */
$base = Base::find()->orderBy('id_b')->all();
$cream = Cream::find()->orderBy('id_c')->all();
$addition = Addition::find()->orderBy('id_a')->all();

$this->title = 'Create Cake';
$this->params['breadcrumbs'][] = ['label' => 'Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cake-create">

    <h1><?= Html::encode($this->title) ?></h1>
   <ul> <p>Bases</p>
    <?php foreach ($base as $base): ?>
        <ul>
    <li>
        <?= Html::encode("{$base->id_b}- {$base->name} ") ?>
    </li>
    </ul>
    <?php endforeach; ?>
    </ul>
    <ul><p>Cream</p>
    <?php foreach ($cream as $cream): ?>
    <li>
        <?= Html::encode("{$cream->id_c}- {$cream->name} ") ?>
    </li>
    <?php endforeach; ?>
    </ul>
    <ul><p>Addition</p>
    <?php foreach ($addition as $addition): ?>
    <li>
        <?= Html::encode("{$addition->id_a}- {$addition->name} ") ?>
    </li>
    <?php endforeach; ?>
    </ul>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
