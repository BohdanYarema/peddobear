<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 02.04.18
 * Time: 00:37
 */

namespace app\models;

use app\modules\models\Page;
use Yii;

class Popup extends \yii\base\Model
{
    public static function getPopupStatus()
    {
        $cookies = Yii::$app->request->cookies;

        $popup = Page::find()->where(['slug' => 'coockie'])->one();

        if ($popup === null || $popup->status == 0) {
            return false;
        } else {
            $cookie = $cookies->get('popup');

            if (!empty($cookie)) {
                $date = $cookie->value;

                if (intval($date) === $popup->updated_at) {
                    return false;
                } else {
                    $cookies_set = Yii::$app->response->cookies;
                    $cookies_set->add(new \yii\web\Cookie([
                        'name' => 'popup',
                        'value' => $popup->updated_at,
                    ]));
                    return true;
                }
            } else {
                $date = $popup->updated_at;
                $set_cookies = Yii::$app->response->cookies;
                $set_cookies->add(new \yii\web\Cookie([
                    'name' => 'popup',
                    'value' => $date,
                ]));
                return true;
            }
        }
    }

    public static function getPopup()
    {
        $popup = Page::find()->where(['slug' => 'coockie'])->one();
        return $popup;
    }
}