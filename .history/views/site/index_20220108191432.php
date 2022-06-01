<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;

$this->title = 'Bake a cake';
?>
<div class="site-index">
<?php $domain = yii\helpers\Url::base(true);
      echo Html::img($domain.'/img/grafika.jpg')
  ?></div>
