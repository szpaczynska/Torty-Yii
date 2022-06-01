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
            //echo $model->cake_id;

            $o2 = Cake::find()
            ->select('name')
            ->where(['cake.id' => $model->cake_id])
            ->asArray()
            ->all();
        print_r('<h4>'.$o2[0]['name'].'</h4>');

        $o3 = Cake::find()
            ->select('description')
            ->where(['cake.id' => $model->cake_id])
            ->asArray()
            ->all();
        print_r('<p>'.$o3[0]['description'].'</p>');

        $o4 = Cake::find()
            ->select('id_b')
            ->where(['cake.id' => $model->cake_id])
            ->asArray()
            ->all();
        //print_r($o4[0]['id_b']);

        $o5 = Cake::find()
            ->select('id_c')
            ->where(['cake.id' => $model->cake_id ])
            ->asArray()
            ->all();
        //print_r($o5[0]['id_c']);

        $o6 = Cake::find()
            ->select('id_a')
            ->where(['cake.id' => $model->cake_id])
            ->asArray()
            ->all();
        //print_r($o6[0]['id_a']);



            $cena1 = Base::find()
            ->select('base.price')
            ->where(['base.id_b' => $o4[0]['id_b']])
            ->asArray()
            ->all();
           //print_r($cena1[0]['price']);

            $cena2 = Cream::find()
            ->select('cream.price')
            ->where(['cream.id_c' => $o5[0]['id_c']])
            ->asArray()
            ->all();
            //print_r($cena2);

            $cena3 = Addition::find()
            ->select('addition.price')
            ->where(['addition.id_a' => $o6[0]['id_a']])
            ->asArray()
            ->all();
            //print_r($cena3);


            $suma = $cena1[0]['price'] + $cena2[0]['price'] + $cena3[0]['price'];
           print_r('<h2 style="color:red">'.$suma.'$</h2>');




?>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <a class="btn btn-primary" href="contact">Buy and pay</a>
</div>
</div>
