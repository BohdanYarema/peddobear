<?php
namespace app\components;

use app\models\CartModel;
use app\models\PayMentModel;
use app\modules\models\Page;
use yii\base\Component;
use Yii;
use yii\base\Model;
use yii\web\View;

/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 07.12.2017
 * Time: 18:17
 *
 * @var $this View
 */

class checkPayment extends Model
{
    public static function getCheck()
    {
        $data = PayMentModel::getCoockie();
        if (!empty($data)){
            $model = \app\models\Payment::find()
                ->where(['payment_order_id' => $data['payment_order_id']])
                ->one();

            if ($model !== null){
                if ($model->status == 1){
                    return 1;
                } elseif($model->status == 2) {
                    return 2;
                } else {
                    return 0;
                }
            }
        } else {
            return 0;
        }
    }
}