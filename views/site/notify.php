<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 14.04.18
 * Time: 08:58
 */

$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);

$log = new \app\modules\models\Log();
$log->text = $raw_post_array;
$log->save();