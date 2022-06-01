<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$order = Orders::find()->orderBy('id')->all();
$cake = Cake::find()->orderBy('id')->all();

$this->title = 'Shopping cart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>Your orders</h2>
    <ul>
<?php foreach ($order as $order): ?>
    <li>
        <?= Html::encode("{$c->name where $cake->id == $orders} -{$cake->description}") ?>
    </li>
<?php endforeach; ?>
</ul>



<p>
<?php
$sql="Select *from cakes.cake";
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
