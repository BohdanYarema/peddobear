<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700',
        'https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800',
        'css/style.css',
    ];
    public $js = [
        //'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js',
        //'js/main.js',
        'js/my.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
