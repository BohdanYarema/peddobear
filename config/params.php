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
            'status'    => 0,
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
            'poland'            => 0.01,
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
        'token'         => '006e9c7e-5220-420d-824e-36bd098b4dff',
        'merchantPosId' => '586502'
    ]
];
