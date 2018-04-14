<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"notifyUrl\": \"https://peddobear.local.test/notify\",
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
    "Authorization: Bearer 2d59a1d1-929d-4a9f-b3cd-a87532d528d1"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);




//$model = \app\modules\models\Log::find()->all();
//foreach ($model as $item) {
//    print_r(json_decode($item->text, true));
//}