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
//print_r($cake_id_o);
$o2 = Cake::find()
    ->select('name')
    ->where(['cake.id' => $cake_id_o])
    ->asArray()
    ->all();
print_r($o2[0]['name']);
print_r(' - ');
$o3 = Cake::find()
    ->select('description')
    ->where(['cake.id' => $cake_id_o])
    ->asArray()
    ->all();
print_r($o3[0]['description']);

$o4 = Cake::find()
    ->select('id_b')
    ->where(['cake.id_b' => $cake_id_o])
    ->asArray()
    ->all();
print_r($o4[0]['id_b']);

$o5 = Cake::find()
    ->select('id_c')
    ->where(['cake.id_c' => $cake_id_o])
    ->asArray()
    ->all();
print_r($o5[0]['id_c']);

$o6 = Cake::find()
    ->select('id_a')
    ->where(['cake.id_a' => $cake_id_o])
    ->asArray()
    ->all();
print_r($o6[0]['id_a']);

/*
$cena1 = Base::find()
            ->select('base.price')
            ->where(['base.id_b' => $i1])
            ->asArray()
            ->all();
           //print_r($cena1[0]['price']);

            $cena2 = Cream::find()
            ->select('cream.price')
            ->where(['cream.id_c' => $i2])
            ->asArray()
            ->all();
            //print_r($cena2);

            $cena3 = Addition::find()
            ->select('addition.price')
            ->where(['addition.id_a' => $i3])
            ->asArray()
            ->all();
            //print_r($cena3);


            $suma = $cena1[0]['price'] + $cena2[0]['price'] + $cena3[0]['price'];
           print_r($suma.'$');
*/

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
echo "Transakcja wykonana pomy??lnie <br/>\n";
// wydruk zawarto??ci tablicy asocjacyjnej ??? rezultat zapytania print_r($result);
}
catch(\Exception $e) { $transaction->rollBack(); throw $e;}
catch(\Throwable $e) {$transaction->rollBack(); throw $e;}
?> </p>

</div>
*/