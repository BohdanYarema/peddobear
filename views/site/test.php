<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

$post = [
    "notifyUrl"     => "http://peddobear.devservice.pro/notify",
    "customerIp"    => "127.0.0.1",
    "merchantPosId" => Yii::$app->params['PayU']['merchantPosId'],
    "description"   => "RTV market",
    "currencyCode"  => "PLN",
    "totalAmount"   => "100",
    "products"      => [
        [
            "name"=> "Wireless mouse",
            "unitPrice"=> "100",
            "quantity"=> "1"
        ]
    ]
];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer ".Yii::$app->params['PayU']['token']
));

$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
    return false;
} else {
    return $response;
}