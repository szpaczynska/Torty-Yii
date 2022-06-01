<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Our cakes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<p>
<?php
$url = Yii::getAlias("@web") . '/img/';
$sql="Select *from cakes.base";
$pgdb = Yii::$app->db;
$transaction = $pgdb->beginTransaction();
try {
$result=$pgdb->createCommand($sql)->queryAll();
// executing SQL statements
$transaction->commit();
//echo "Transakcja wykonana pomyślnie <br/>\n";
// wydruk zawartości tablicy asocjacyjnej – rezultat zapytania print_r($result);
}
catch(\Exception $e) { $transaction->rollBack(); throw $e;}
catch(\Throwable $e) {$transaction->rollBack(); throw $e;}
?> </p>
<div class="section mcb-section" style="background:url(<?= $url ?>accept_all_you_see-wallpaper-1680x1050.jpg); background-repeat:no-repeat; background-position:center top;-webkit-background-size:">
</div>
