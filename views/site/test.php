<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"notifyUrl\": \"https://peddobear.local.test/test\",
  \"customerIp\": \"127.0.0.1\",
  \"merchantPosId\": \"586502\",
  \"description\": \"RTV market\",
  \"currencyCode\": \"PLN\",
  \"totalAmount\": \"100\",
  \"products\": [
    {
      \"name\": \"Wireless mouse\",
      \"unitPrice\": \"15000\",
      \"quantity\": \"1\"
    },
    {
      \"name\": \"HDMI cable\",
      \"unitPrice\": \"6000\",
      \"quantity\": \"1\"
    }
  ]
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer 57b418fb-da2d-49f7-bb4e-521a2b17e6d1"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);