<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 31.03.18
 * Time: 16:29
 */

use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

var_dump(Yii::$app->session->setFlash('payment', true));

?>

<main class="failed-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-failed">
        <div class="wrapper">
            <div class="failed-wrap">
                <div class="failed">
                    <div class="failed__header">
                        <h1>payment failed </h1>
                    </div>
                    <div class="failed__logo"><img src="<?=Yii::getAlias('@web')?>/img/MIDDLETED.png"></div>
                    <div class="failed__subtext">
                        <p>don't panic! try again</p>
                    </div><a class="failed__btn" href="shop.html">
                        <p>Return to shop</p></a>
                </div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
