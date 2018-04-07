<?php

namespace app\modules;

use Yii;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->layout = 'admin';
        Yii::$app->language = 'pl';
        // custom initialization code goes here
    }
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/users/*'] = [
            'class'          => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en',
        ];
    }

}
