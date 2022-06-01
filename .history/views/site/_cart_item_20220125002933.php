<?php
/**
 * @var app\models\Orders $model
 *
 */
use app\models\Base;
use app\models\Cream;
use app\models\Cake;
use app\models\Addition;
use yii\db\Query;
use app\models\BaseQuery;
use app\models\CreamQuery;
use yii\data\ActiveDataProvider;
use app\models\Orders;

use yii\helpers\ArrayHelper;


?>
<div class="card h-100">
    <!-- Sale badge-->
    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
    <!-- Product image-->
    <img class="card-img-top" src="<?=Yii::getAlias('@web'); ?>/img/czekoladowy.jpg" alt="..." />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder"><a herf="#"></a></h5>
            <!-- Product reviews-->
            <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
            </div>
            <!-- Product price-->
            <?php
            $i1= Yii::$app->user->identity->user_id;

?>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <a class="btn btn-primary" href="contact">Buy and pay</a>
</div>
</div>
