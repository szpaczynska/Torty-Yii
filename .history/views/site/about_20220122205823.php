<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;
use app\models\Base;
use yii\data\ActiveDataProvider;

use yii\db\Query;


/** @var yii\data\ActivDataProvider $dataProvider
 */
?>
<div class="row">
<?php
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_product_item'
]);
?>







                    </div>