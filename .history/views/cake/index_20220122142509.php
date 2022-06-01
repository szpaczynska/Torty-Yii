<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CakeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$base = Base::find()->orderBy('name')->all();

$this->title = 'Cakes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cake-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cake', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php foreach ($cake as $cake): ?>
    <li>
        <?= Html::encode("{$base->name} -{$base->id_b}") ?>
    </li>
<?php endforeach; ?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'id_b',
            'id_c',
            'id_a',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
