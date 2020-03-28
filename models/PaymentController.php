<?php


namespace app\models;


class PaymentController
{
    protected $payment;

    public function __construct(PaymentSystem $payment)
    {
        $this->payment = $payment;
    }


    public function pay($model)
    {
        return $this->payment->buy($model);
    }
}