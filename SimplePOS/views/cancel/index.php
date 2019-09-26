<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembatalan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Pesanan',
            'Nama_Barang',
            'Qty',
            'Harga',
            ['class' => 'yii\grid\ActionColumn','template'=>'{delete}','header'=>'Action'],
        ],
    ]); ?>


</div>
