<?php
//$ch = curl_init();
//
//curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//curl_setopt($ch, CURLOPT_HEADER, FALSE);
//
//curl_setopt($ch, CURLOPT_POST, TRUE);
//
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{
//  \"notifyUrl\": \"https://peddobear.local.test/test\",
//  \"customerIp\": \"127.0.0.1\",
//  \"merchantPosId\": \"586502\",
//  \"description\": \"RTV market\",
//  \"currencyCode\": \"PLN\",
//  \"totalAmount\": \"100\",
//  \"products\": [
//    {
//      \"name\": \"Wireless mouse\",
//      \"unitPrice\": \"15000\",
//      \"quantity\": \"1\"
//    },
//    {
//      \"name\": \"HDMI cable\",
//      \"unitPrice\": \"6000\",
//      \"quantity\": \"1\"
//    }
//  ]
//}");
//
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    "Content-Type: application/json",
//    "Authorization: Bearer 57b418fb-da2d-49f7-bb4e-521a2b17e6d1"
//));
//
//$response = curl_exec($ch);
//curl_close($ch);
//
//var_dump($response);


////set Production Environment
//OpenPayU_Configuration::setEnvironment('secure');
//
////set POS ID and Second MD5 Key (from merchant admin panel)
//OpenPayU_Configuration::setMerchantPosId('586502');
//OpenPayU_Configuration::setSignatureKey('c5f55fbd51ca1d45409a2b4c36e6231f');
//
////set Oauth Client Id and Oauth Client Secret (from merchant admin panel)
//OpenPayU_Configuration::setOauthClientId('586502');
//OpenPayU_Configuration::setOauthClientSecret('c2d8d791dc3f043115820e22261e6dda');
//
//
//$order['continueUrl'] = 'http://localhost/'; //customer will be redirected to this page after successfull payment
//$order['notifyUrl'] = 'http://localhost/';
//$order['customerIp'] = $_SERVER['REMOTE_ADDR'];
//$order['merchantPosId'] = OpenPayU_Configuration::getMerchantPosId();
//$order['description'] = 'New order';
//$order['currencyCode'] = 'PLN';
//$order['totalAmount'] = 3200;
//$order['extOrderId'] = '1342111111'; //must be unique!
//
//$order['products'][0]['name'] = 'Product1';
//$order['products'][0]['unitPrice'] = 1000;
//$order['products'][0]['quantity'] = 1;
//
//$order['products'][1]['name'] = 'Product2';
//$order['products'][1]['unitPrice'] = 2200;
//$order['products'][1]['quantity'] = 1;
//
////optional section buyer
//$order['buyer']['email'] = 'dd@ddd.pl';
//$order['buyer']['phone'] = '123123123';
//$order['buyer']['firstName'] = 'Jan';
//$order['buyer']['lastName'] = 'Kowalski';
//
//$response = OpenPayU_Order::create($order);
//
//header('Location:'.$response->getResponse()->redirectUri);
//
//exit();