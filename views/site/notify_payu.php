<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 14.04.18
 * Time: 08:58
 */

$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);

$log = new \app\modules\models\Log();
$log->text = json_encode($raw_post_array[0]);
$log->save();

$result = json_decode($raw_post_array[0], true);
$order_id   = $result['order']['orderId'];
$status     = $result['order']['status'];

$model = \app\models\Payment::find()
    ->where(['payment_order_id' => $order_id])
    ->one();
if ($status == 'COMPLETED'){
    $model->status = 1;
} else {
    $model->status = 2;
}
$model->save();

foreach ($model->paymentItems as $item){
    $shop = \app\models\Shop::find()->where(['id' => $item->shop_id])->one();
    if($shop !== null){
        $shop->counter = $shop->counter - $item->count;
        $shop->save();
    }
}