<?php


namespace app\models;

use yii\base\Model;
use Yii;

class PayPal implements PaymentSystem
{
    /**
     * @var $model Payment
     */
    public $model;

    public $returnUrl = 'http://yarema.fun/success';
    public $cancelUrl = 'http://yarema.fun/cancel';
    public $notifyUrl = 'http://yarema.fun/notifypaypal';
    public $paypalEmail = 'bohdanyarema1992-facilitator@gmail.com';
    public $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    public $itemName = 'Ted a Car purchase';

    public function buy($model)
    {
        $this->model = $model;
        return $this->generateLink();
    }

    public function generateLink(){
        $currency       = Yii::$app->params['delivery'][Yii::$app->language]['currency'];
        $price          = $this->model->summary + $this->model->shipping;

        $querystring = "?business=" . urlencode($this->paypalEmail) . "&";
        $querystring .= "currency_code=" . urlencode($currency) . "&";
        $querystring .= "cmd=" . urlencode('_xclick') . "&";
        $querystring .= "item_name=" . urlencode($this->itemName . 'payment id - '. $this->model->payment_order_id) . "&";
        $querystring .= "amount=". urlencode($price) . "&";
        $querystring .= "custom=". urlencode($this->model->payment_order_id) . "&";

        $querystring .= "return=" . urlencode(stripslashes($this->returnUrl)) . "&";
        $querystring .= "cancel_return=" . urlencode(stripslashes($this->cancelUrl)) . "&";
        $querystring .= "notify_url=" . urlencode($this->notifyUrl);

        return $this->paypalURL . $querystring;
    }
}