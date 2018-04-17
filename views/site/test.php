<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);


curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"notifyUrl\": \"http://peddobear.devservice.pro/notify\",
  \"customerIp\": \"127.0.0.1\",
  \"merchantPosId\": \"586502\",
  \"description\": \"RTV market\",
  \"currencyCode\": \"PLN\",
  \"totalAmount\": \"100\",
  \"products\": [
    {
      \"name\": \"Wireless mouse\",
      \"unitPrice\": \"100\",
      \"quantity\": \"1\"
    }
  ]
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer 2a49df22-495e-41ef-88f8-1965250f1327"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);




//$model = \app\modules\models\Log::find()->all();
//foreach ($model as $item) {
//    print_r(json_decode($item->text, true));
//}