<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Orders;
use app\models\Cake;
use yii\db\Query;

$this->title = 'Shopping cart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h2>Your orders</h2>
    <ul>
    <?php
    $i1= Yii::$app->user->identity->user_id;
    $o1 = Orders::find()
    ->select('cake_id')
    ->where(['orders.user_id' => $i1])
    ->asArray()
    ->all();
    //print_r($cena1);
$cake_id_o = $o1[0]['cake_id'];
print_r($cake_id_o);

?>
</ul>
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-primary" href="koszyk">Buy and pay</a></div>
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