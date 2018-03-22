<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CartModel extends Model
{
    public function addToCart($id, $count){
        $cart = $this->checkCoockie();
        $cart = $this->deleteCoockie($id, $cart);
        $cart[]    = ['id' => $id, 'count' => $count];
        $this->setCoockie($cart);
    }

    public function deleteFormCart($id){

        $cart = $this->checkCoockie();
        $cart = $this->deleteCoockie($id, $cart);
        $this->setCoockie($cart);
    }

    public function setCoockie($data){
        $set_cookies = Yii::$app->response->cookies;
        $set_cookies->add(new \yii\web\Cookie([
            'name'  => 'cart',
            'value' => $data,
        ]));
    }

    public function deleteCoockie($id, $cart){
        foreach ($cart as $key => $value){
            if ($value['id'] == $id){
                unset($cart[$key]);
            }
        }
        return $cart;
    }

    public function checkCoockie(){
        $cookies = Yii::$app->request->cookies;
        if (($cookie = $cookies->get('cart')) !== null) {
            $cart      = $cookie->value;
        } else {
            $cart = [];
        }

        return $cart;
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
