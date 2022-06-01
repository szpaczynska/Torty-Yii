<?php

/* @var $this yii\web\View */
/** @var yii\data\ActivDataProvider $dataProvider
 */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;
use app\models\Base;
use yii\db\Query;
?>
<p></p>
<?php
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_product_item',
    'itemOptions' =>
    [
        'class' => 'col mb-5'
    ],
    'layout' => '{summary}<div class="row">{items}</div>{pager}'
]);
?>
