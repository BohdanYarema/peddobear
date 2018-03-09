<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 23.06.16
 * Time: 12:04
 *
 * @var $model []
 */

namespace app\widgets;

use yii\base\Widget;


class HeaderWidget extends Widget{
    public $model;

    public function init(){
        parent::init();
    }
    public function run(){
        return $this->render('_header',[
            'model'             => $this->model
        ]);
    }
}
?>