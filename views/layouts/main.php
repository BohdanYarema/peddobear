<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\checkPayment;
use app\models\PayMentModel;

AppAsset::register($this);

$data = checkPayment::getCheck();
if ($data == 1){
    Yii::$app->getResponse()->redirect(['/success']);
} elseif($data == 2){
    Yii::$app->getResponse()->redirect(['/cancel']);
}

?>

<!--
    <?php
print_r(PayMentModel::getCoockie());
    ?>
-->

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#333333ff">
    <link rel="icon" href="<?=Yii::getAlias("@web")?>/img/favicon.png" type="image/x-icon">
    <meta name="format-detection" content="telephone=no">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="theme-color" content="#333333ff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="preloader">
    <div class="loading-indicator"></div>
</div>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
