<?php

return [
    'adminEmail' => 'admin@example.com',
    'availableLocales'=>[
        'pl' => 'pl',
        'en' => 'en',
    ],
    'status'=>[
        0 => 'Just send',
        1 => 'Complete',
        2 => 'Pending or other',
        3 => 'Not verify',
    ],
    'payment_type'=>[
        0 => [
            'image'     => '/img/PayPal.svg',
            'status'    => 1,
            'id'        => 'pay',
            'key'       => 0
        ],
        1 => [
            'image'     => '/img/PayU.svg',
            'status'    => 1,
            'id'        => 'payu',
            'key'       => 1
        ],
        2 => [
            'image'     => '/img/applepay.svg',
            'status'    => 0,
            'id'        =>  'payapple',
            'key'       => 2
        ],
    ],
    'delivery'=>[
        'pl' => [
            'currency'          => 'PLN',
            'currency_name'     => 'PLN',
            'poland'            => 10,
            'world'             => 15
        ],
        'en' => [
            'currency'          => 'USD',
            'currency_name'     => '$',
            'poland'            => 3,
            'world'             => 5
        ],
    ],
    'PayU' => [
        'token'         => 'b00c2f83-c50c-461a-8255-2ca7fb087dd9',
        'merchantPosId' => '669539'
    ]
];
