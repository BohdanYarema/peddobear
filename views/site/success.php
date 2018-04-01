<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 31.03.18
 * Time: 16:29
 */


$model = \app\modules\models\Log::find()->all();
foreach ($model as $value){
    var_dump(json_decode($value->text, true));
}
