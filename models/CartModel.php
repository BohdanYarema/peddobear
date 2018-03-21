<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CartModel extends Model
{
    public function addCookie($id, $count){
        $cookies = Yii::$app->response->cookies;

        // добавление новой куки в HTTP-ответ
        $cookies->add(new \yii\web\Cookie([
            'name'  => 'cart',
            'value' => [
                $id => $count
            ],
        ]));
    }

    public function deleteCookie(){
        $cookies = Yii::$app->response->cookies;

        // удаление куки...
        $cookies->remove('cart');
    }

    public function checkCookie($id){
        $cookies = Yii::$app->request->cookies;
        // альтернативный способ получения куки "language"
        $cookie = $cookies->get('cart');
        if ($cookie !== null) {
            $data = $cookie->value;
            if (array_key_exists($id, $data)){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    public function getCookie(){
        $cookies = Yii::$app->request->cookies;
        // альтернативный способ получения куки "language"
        $cookie = $cookies->get('cart');
        if ($cookie !== null) {
            $data = $cookie->value;
            return $data;
        } else {
            return [];
        }

    }
}
