<?php
/**
 * @var app\models\Cake $model
 *
 */
use app\models\Base;
use app\models\Cream;
use app\models\Addition;
use yii\db\Query;
use app\models\BaseQuery;
use app\models\CreamQuery;
use yii\data\ActiveDataProvider;

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
            <h5 class="fw-bolder"><a herf="#"><?php echo $model->name ?></a></h5>
            <!-- Product reviews-->
            <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
            </div>
            <!-- Product price-->
            <?php $i1= $model->id_b;
            $cena1 = Base::find()
            ->select('base.price')
            ->where(['base.id_b' => $i1])
            ->asArray()
            ->all();
           echo(ArrayHelper::map(Base::findById($i1)->all(),'id_b','name'));
            //print_r($cena1[0]);

            $i2= $model->id_c;
            $cena2 = Cream::find()
            ->select('cream.price')
            ->where(['cream.id_c' => $i2])
            ->asArray()
            ->all();
            //print_r($cena2);

            $i3= $model->id_a;
            $cena3 = Addition::find()
            ->select('addition.price')
            ->where(['addition.id_a' => $i3])
            ->asArray()
            ->all();
            //print_r($cena3);


            $suma = $cena1[0] + $cena2[0] + $cena3[0];
           print_r($suma);

            ?>
            <div>
            <?php echo $model->description ?>
            </div>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
    </div>
</div>
