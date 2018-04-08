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

?>

<main class="success-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-success">
        <div class="wrapper">
            <div class="successful-wrap">
                <div class="successful">
                    <div class="successful__header">
                        <h1>thank you!</h1>
                    </div>
                    <div class="successful__logo"><img src="<?=Yii::getAlias("@web")?>/img/SMILETED.png"></div>
                    <div class="successful__subtext">
                        <p> your payment was <br> proccesed successfully</p>
                    </div><a class="successful__btn" href="/shop">
                        <p>buy some more ted'<span>s</span></p></a>
                </div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
