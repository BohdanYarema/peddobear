<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'en',
    'sourceLanguage'=>'en',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\Admin',
        ],
    ],
    'components' => [
        'fileStorage' => [
            'class' => '\trntv\filekit\Storage',
            'baseUrl' => '@web/source',
            'filesystem' => [
                'class' => 'app\components\LocalFlysystemBuilder',
                'path' => '@webroot/source'
            ],
            'as log' => [
                'class' => 'app\components\FileStorageLogBehavior',
                'component' => 'fileStorage'
            ]
        ],
        'assetManager' => [
            'linkAssets' => false,
            'appendTimestamp' => true,
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'TG5sLCxBqGZhqFjwOpGnNDA__cGuIO63',
            'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass'     => 'app\models\User',
            'enableAutoLogin'   => true,
            'loginUrl'          => ['admin/default/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => require(__DIR__.'/_urlManager.php'),
        'i18n' => [
            'translations' => [
                '*' => ['class' => 'yii\i18n\DbMessageSource']
            ],
        ],
    ],
    'as globalAccess'=>[
        'class'=>'\app\components\GlobalAccessBehavior',
        'rules'=>[
            [
                'controllers'=>['admin/default'],
                'allow' => true,
                'roles' => ['@'],
            ],
            [
                'controllers'=>['admin/default'],
                'allow' => true,
                'roles' => ['?'],
                'actions'=>['login']
            ],
            [
                'controllers'=>['admin/i18n-source-message'],
                'allow' => true,
                'roles' => ['@'],
            ],
            [
                'controllers'=>['admin/i18n-message'],
                'allow' => true,
                'roles' => ['@'],
            ],
            [
                'controllers'=>['admin/shop'],
                'allow' => true,
                'roles' => ['@'],
            ],
            [
                'controllers'=>['admin/page'],
                'allow' => true,
                'roles' => ['@'],
            ],
            [
                'controllers'=>['file-storage'],
                'allow' => true,
                'roles' => ['?', '@'],
            ],
            [
                'controllers'=>['site'],
                'allow' => true,
                'roles' => ['?', '@'],
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
