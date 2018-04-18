<?php

namespace app\models;

use Yii;
use yii\base\Model;

class PayMentModel extends Model
{
    public static function getCoockie(){
        $cookies = Yii::$app->request->cookies;
        if (($cookie = $cookies->get('payment_order_id')) !== null) {
            $payment = $cookie->value;
        } else {
            $payment = [];
        }
        return $payment;
    }

    public static function setCoockie($data){
        $set_cookies = Yii::$app->response->cookies;
        $set_cookies->add(new \yii\web\Cookie([
            'name'  => 'payment_order_id',
            'value' => $data,
        ]));

        unset($_COOKIE['payment_order_id']);
    }
}
