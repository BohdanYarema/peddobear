<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'phone',
            'shipping',
            'summary',
            [
                'attribute'    => 'payment_type',
                'value'         =>  function ($model){
                    return Yii::$app->params['payment_type'][$model->payment_type]['id'];
                }
            ],
            [
                'attribute'    => 'status',
                'value'         =>  function ($model){
                    return Yii::$app->params['status'][$model->status];
                }
            ],
            'created_at:datetime',

            [
                'class'     => 'yii\grid\ActionColumn',
                'template'  => '{view} {delete}'
            ],
        ],
    ]); ?>
</div>
