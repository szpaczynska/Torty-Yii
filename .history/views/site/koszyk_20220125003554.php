<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Orders;
use app\models\Cake;
use app\models\Base;

use app\models\Cream;
use app\models\Addition;

use yii\db\Query;

$this->title = 'Shopping cart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h2>Your orders:</h2>
    <p></p>
    <?php
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_cart_item',
    'itemOptions' =>
    [
        'class' => 'col mb-5'
    ],
    'layout' => '{summary}<div class="row">{items}</div>{pager}'
]);
?>
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <a class="btn btn-primary" href="contact">Buy and pay</a>
</div>
<p>
<?php
/*$sql="Select *from cakes.cake";
$pgdb = Yii::$app->db;
$transaction = $pgdb->beginTransaction();
try {
$result=$pgdb->createCommand($sql)->queryAll();
// executing SQL statements
$transaction->commit();
echo "Transakcja wykonana pomyślnie <br/>\n";
// wydruk zawartości tablicy asocjacyjnej – rezultat zapytania print_r($result);
}
catch(\Exception $e) { $transaction->rollBack(); throw $e;}
catch(\Throwable $e) {$transaction->rollBack(); throw $e;}
?> </p>

</div>
*/