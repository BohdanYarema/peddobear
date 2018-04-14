<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 14.04.18
 * Time: 08:58
 */

$log = new \app\modules\models\Log();
$log->text = json_encode($_POST);
$log->save();