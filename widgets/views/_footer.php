<?php
/**
 * Created by PhpStorm.
 * User: BobbyZi
 * Date: 09.03.2018
 * Time: 18:27
 */

use yii\helpers\Url;

?>

<div class="footer">
    <div class="wrapper">
        <div class="footer-outer">
            <div class="footer-headers"></div>
            <div class="footer-info-inner">
                <div class="footer-info">
                    <div class="footer-info__header-item">
                        <h4>Contact <span>Information</span></h4>
                    </div>
                    <div class="footer-info__mail"><img src="<?=Yii::getAlias("@web")?>/img/mail.svg"><a href="mailto: shop@tedacar.eu">shop@tedacar.eu</a></div>
                    <div class="footer-info__title">
                        <p><span>Social</span> media:</p>
                    </div>
                    <div class="footer-info__icons">
                        <a href="https://t.me/ted_a_car" target="_blank">
                            <img src="<?=Yii::getAlias("@web")?>/img/telega.svg">
                        </a>
                        <a href="https://www.instagram.com/tedacar.eu/" target="_blank">
                            <img src="<?=Yii::getAlias("@web")?>/img/insta.svg">
                        </a>
                        <a href="https://www.facebook.com/pg/TEDACAREU/shop/?ref=page_internal" target="_blank">
                            <img src="<?=Yii::getAlias("@web")?>/img/facebook.svg">
                        </a>
                    </div>
                </div>
                <div class="footer-phones">
                    <div class="footer-phones__header-item">
                        <h4>Cooperation and<br> <span>wholsale purchase</span></h4>
                    </div>
                    <div class="footer-phones__item">
                        <img src="<?=Yii::getAlias("@web")?>/img/phone.svg"><a href="tel: +48 533 757 777">+48 533 757 777</a></div>
                    <div class="footer-phones__item">
                        <img src="<?=Yii::getAlias("@web")?>/img/whatsapp.svg"><a href="tel: +48 533 757 777">+48 533 757 777</a></div>
                    <div class="footer-phones__item">
                        <img src="<?=Yii::getAlias("@web")?>/img/mail.svg"><a href="mailto: shop@tedacar.eu">shop@tedacar.eu</a></div>
                </div>
                <div class="footer-payments">
                    <div class="footer-payments__header-item">
                        <h4><span>Payment</span> options</h4>
                    </div>
                    <div class="footer-payments__img-item">
                        <img src="<?=Yii::getAlias("@web")?>/img/PayPal.svg">
                        <img src="<?=Yii::getAlias("@web")?>/img/PayU.svg">
                        <img src="<?=Yii::getAlias("@web")?>/img/applepay.svg">
                    </div>
                </div>
                <div class="footer-copy">
                    <p>&#169 TED A CAR EU</p>
                </div>
            </div>
        </div>
    </div>
</div>


