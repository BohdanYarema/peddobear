<?php
$test = '["{\"order\":{\"orderId\":\"PWQDQX4G8R180417GUEST000P01\",\"orderCreateDate\":\"2018-04-17T22:21:38.171+02:00\",\"notifyUrl\":\"http:\/\/tedacar.eu\/notify\",\"customerIp\":\"127.0.0.1\",\"merchantPosId\":\"586502\",\"description\":\"Ted a Car purchase\",\"currencyCode\":\"PLN\",\"totalAmount\":\"2100\",\"buyer\":{\"customerId\":\"guest\",\"email\":\"bohdanyarema1992@gmail.com\"},\"payMethod\":{\"amount\":\"2100\",\"type\":\"PBL\"},\"status\":\"COMPLETED\",\"products\":[{\"name\":\"test\",\"unitPrice\":\"6\",\"quantity\":\"1\"},{\"name\":\"test\",\"unitPrice\":\"6\",\"quantity\":\"1\"},{\"name\":\"test\",\"unitPrice\":\"6\",\"quantity\":\"1\"}]},\"localReceiptDateTime\":\"2018-04-17T22:21:46.527+02:00\",\"properties\":[{\"name\":\"PAYMENT_ID\",\"value\":\"1083019218\"}]}"]';

$result = json_decode(json_decode($test, true)[0], true);
$result['order']['orderId'];
$result['order']['status'];