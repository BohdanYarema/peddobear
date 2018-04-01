<?php
namespace app\components;

use app\modules\models\Page;
use yii\base\Component;
use Yii;

/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 07.12.2017
 * Time: 18:17
 */

class popupComponent extends Component
{
    public function init()
    {
        parent::init();
    }

    public function getPopupStatus()
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

    public function getPopup()
    {
        $popup = Page::find()->where(['slug' => 'coockie'])->one();
        return $popup;
    }

}