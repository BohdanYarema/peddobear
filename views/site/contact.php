<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

/* @var $this yii\web\View */

?>

<main class="contacts-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-contacts">
        <div class="wrapper">
            <div class="contacts-inner">
                <div class="contacts-inner__header revealator-slideright revealator-delay6 revealator-duration2">
                    <h1><?=Yii::t('frontend', 'contact information')?></h1>
                </div>
                <div class="contact-info-inner">
                    <div class="contact-info revealator-zoomin revealator-delay10 revealator-duration7">
                        <div class="contact-info__header-item">
                            <h4><?=Yii::t('frontend', 'contact information')?></h4>
                        </div>
                        <div class="contact-info__mail"><img src="<?=Yii::getAlias("@web")?>/img/mail.svg"><a href="mailto: shop@tedacar.eu">shop@tedacar.eu</a></div>
                        <div class="contact-info__title">
                            <p><?=Yii::t('frontend', 'social media')?>:</p>
                        </div>
                        <div class="contact-info__icons"><a href="#"><img src="<?=Yii::getAlias("@web")?>/img/telega.svg"></a><a href="#"> <img src="<?=Yii::getAlias("@web")?>/img/insta.svg"></a><a href="#"><img src="<?=Yii::getAlias("@web")?>/img/facebook.svg"></a></div>
                    </div>
                    <div class="contact-phones revealator-zoomin revealator-delay10 revealator-duration7">
                        <div class="contact-phones__header-item">
                            <h4><?=Yii::t('frontend', 'cooperation')?></h4>
                        </div>
                        <div class="contact-phones__item"><img src="<?=Yii::getAlias("@web")?>/img/phone.svg"><a href="tel: +48 533 757 777">+48 533 757 777</a></div>
                        <div class="contact-phones__item"><img src="<?=Yii::getAlias("@web")?>/img/whatsapp.svg"><a href="tel: +48 533 757 777">+48 533 757 777</a></div>
                        <div class="contact-phones__item"><img src="<?=Yii::getAlias("@web")?>/img/mail.svg"><a href="mailto: shop@tedacar.eu">shop@tedacar.eu</a></div>
                    </div>
                    <div class="contact-payments revealator-zoomin revealator-delay10 revealator-duration7">
                        <div class="contact-payments__header-item">
                            <h4><?=Yii::t('frontend', 'payment options')?></h4>
                        </div>
                        <div class="contact-payments__img-item"><img src="<?=Yii::getAlias("@web")?>/img/PayPal.svg"><img src="<?=Yii::getAlias("@web")?>/img/PayU.svg"><img src="<?=Yii::getAlias("@web")?>/img/applepay.svg"></div>
                    </div>
                    <div class="contact-copy revealator-zoomin revealator-delay10 revealator-duration7">
                        <p>&#169 TED A CER EU</p>
                    </div>
                </div>
                <div class="contacts-inner__ebasos revealator-zoomin revealator-delay10 revealator-duration7"><img src="<?=Yii::getAlias("@web")?>/img/SMILETED.png"></div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
</main>