<?php


namespace app\models;

use yii\base\Model;
use Stripe\Stripe as StripeSdk;
use Stripe\Charge;
use Stripe\Error\Card;
use Yii;

class Stripe implements PaymentSystem
{
    /**
     * @var $model Payment
     */
    public $model;

    public $secretKey = 'sk_test_UUcIAtsC14BkSzg881jDwB4C00N3IXffnh';
    public $itemName = 'Ted a Car purchase by stripe ';

    public function buy($model)
    {
        // Устанавливаем секретный ключ
        StripeSdk::setApiKey($this->secretKey);

        // Забираем token из формы
        $token = $model->stripeToken;

        $currency       = strtolower(Yii::$app->params['delivery'][Yii::$app->language]['currency']);
        $price          = ($model->summary + $model->shipping) * 100;

        // Создаём оплату
        try {
            $charge = Charge::create(array(
                "amount" => $price,
                "currency" => $currency,
                "source" => $token,
                "description" => $this->itemName . 'payment id - '. $model->payment_order_id
            ));

            $paymentLog = new PaymentLogs();
            $paymentLog->payment_id = $model->id;
            $paymentLog->summary = json_encode($charge);
            $paymentLog->save();

            return '/success';
        } catch(Card $e) {
            $paymentLog = new PaymentLogs();
            $paymentLog->payment_id = $model->id;
            $paymentLog->summary = $e->getMessage();
            $paymentLog->save();
            return '/cancel';
        }
    }
}