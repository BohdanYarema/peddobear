<?php


namespace app\models;


interface PaymentSystem
{
    public function buy($model);
}