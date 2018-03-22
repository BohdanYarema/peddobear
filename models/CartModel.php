<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CartModel extends Model
{
    public function addToCart($id, $count){
        $cookies = Yii::$app->request->cookies;
        if (($cookie = $cookies->get('cart')) !== null) {
            $cart      = $cookie->value;
        } else {
            $cart = [];
        }

        foreach ($cart as $key => $value){
            if ($value['id'] == $id){
                unset($cart[$key]);
            }
        }

        $cart[]    = ['id' => $id, 'count' => $count];

        $set_cookies = Yii::$app->response->cookies;
        $set_cookies->add(new \yii\web\Cookie([
            'name'  => 'cart',
            'value' => $cart,
        ]));

        return true;
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
        // Check the availability of the cookie
        if ($cookies->has('cart')){
            $cart = $cookies->getValue('cart');
        }
        return $cart;

    }
}
