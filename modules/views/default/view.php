<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'phone',
            'country',
            'address',
            'zipcode',
            'city',
            'payment_type',
            'currency',
            'shipping',
            'summary',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            'payment_order_id',
        ],
    ]) ?>


    <?php
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\PaymentItems::find()->where(['payment_id' => $model->id]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'payment_id',
                'shop_id',
                [
                    'attribute' => 'shop_id',
                    'value'     => 'shop.locale.title',
                    'format'    => 'html'
                ],
                'price',
                'count',
                'summary',
                'created_at:datetime',
            ],
        ]);
    ?>
</div>
