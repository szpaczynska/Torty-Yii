<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
use yii\widgets\LinkPager;
use app\models\Cake;

$cake = Cake::find()->orderBy('name')->all();
$this->title = 'Bake a cake';
?>
<div class="site-index">
<h1>Cakes</h1>
<ul>
<?php foreach ($cake as $cake): ?>
    <li>
        <?= Html::encode("{$cake->name} {$cake->id} {$cake->id_b} {$cake->id_c} {$cake->id_a} {$cake->descryption}") ?>
    </li>
<?php endforeach; ?>
</ul>

</div>
