<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CartModel extends Model
{
    public function addToCart($id, $count){
        $model = Shop::find()->where(['id' => $id])->one();
        if ($model === null){
            return 0;
        } else {
            foreach ($model->shopI18ns as $item){
                if ($model->status == 1){
                    $price = $item->price;
                } else {
                    $price = $item->special_price;
                }

                $data[$model->id][$item->i18n] = [
                    'price'     => $price,
                    'count'     => $count,
                    'summary'   => $price * $count
                ];
            }

            $cart = self::checkCoockie();
            $cart = $this->deleteCoockie($id, $cart);
            $cart[] = $data;
            $this->setCoockie($cart);


            $summ       = 0;
            $total      = 0;
            $single     = 0;
            foreach ($cart as $item) {
                foreach ($item as $value){
                    $summ   += floatval($value[Yii::$app->language]['summary']);
                    $total  += $value[Yii::$app->language]['count'];
                    $single = floatval($value[Yii::$app->language]['summary']);
                }
            }
            return [
                'summary'   => $summ,
                'single'    => $single,
                'count'     => $total
            ];
        }
    }

    public function deleteFormCart($id){

        $cart = $this->checkCoockie();
        $cart = $this->deleteCoockie($id, $cart);
        $this->setCoockie($cart);

        if (empty($cart)){
            return 0;
        } else {
            $summ       = 0;
            $total      = 0;
            $single     = 0;
            foreach ($cart as $item) {
                foreach ($item as $value){
                    $summ   += floatval($value[Yii::$app->language]['summary']);
                    $total  += $value[Yii::$app->language]['count'];
                    $single = floatval($value[Yii::$app->language]['summary']);
                }
            }
            return [
                'summary'   => $summ,
                'single'    => $single,
                'count'     => $total
            ];
        }

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
            if (array_key_exists($id, $value)){
                unset($cart[$key]);
            }
        }
        return $cart;
    }

    public static function checkCoockie(){
        $cookies = Yii::$app->request->cookies;
        if (($cookie = $cookies->get('cart')) !== null) {
            $cart      = $cookie->value;
        } else {
            $cart = [];
        }

        return $cart;
    }

    public static function getSumm(){
        $summ = 0;
        $cart = self::checkCoockie();
        if (empty($cart)){
            return 0;
        } else {
            foreach ($cart as $item) {
                foreach ($item as $key => $value){
                    $model = Shop::find()->where(['id' => $key])->one();
                    if ($model !== null){
                        $summ += $value[Yii::$app->language]['price'] * $value[Yii::$app->language]['count'];
                    }
                }
            }

            return $summ;
        }
    }

    public static function getCart(){
        $cart = self::checkCoockie();

        if (empty($cart)){
            return [];
        } else {
            $response = [];
            foreach ($cart as $item) {
                foreach ($item as $key => $value){
                    $model = Shop::find()->where(['id' => $key])->one();
                    if ($model !== null){
                        $model->count     = $value[Yii::$app->language]['count'];
                        $model->summary   = $value[Yii::$app->language]['price'];
                        $response[] = $model;
                    }
                }
            }
            return $response;
        }
    }
}
