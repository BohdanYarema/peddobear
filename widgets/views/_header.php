<?php
/**
 * Created by PhpStorm.
 * User: BobbyZi
 * Date: 09.03.2018
 * Time: 18:27
 */

use yii\helpers\Url;

?>


<div class="header">
    <div class="header-wraper">
        <div class="header-inner">
            <div class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="index-page"     href="<?=Url::to('/')?>"> <span class="none-after">Home</span></a></li>
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="about-page"     href="<?=Url::to('/about')?>"> <span>About us</span></a></li>
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="shop-page"      href="<?=Url::to('/shop')?>"> <span>Shop</span></a></li>
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="special-page"   href="<?=Url::to('/specials')?>"> <span>Special offers</span></a></li>
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="cart-page"      href="<?=Url::to('/cart')?>"> <span>Shoping Cart</span></a></li>
                    <li class="header-nav__item"><a class="header-nav__link" data-menu="contact-page"   href="<?=Url::to('/contacts')?>"> <span>Contacts</span></a></li>
                </ul>
                <div class="total-cart"><a class="cart-button" href="<?=Url::to('/cart')?>">
                        <div class="total-cart__cart"><img src="<?=Yii::getAlias("@web")?>/img/basket.svg"></div>
                        <div class="total-cart__total">
                            <div class="total-price"><span class="cart-amount">100<span class="currency">$</span></span></div>
                        </div></a></div>
                <div class="header-lang">
                    <?php foreach (Yii::$app->params['availableLocales'] as $key =>  $lang):?>
                        <?php if ($key == Yii::$app->language):?>
                            <div class="header-lang__select lang-<?=$lang?> active">
                                <a class="header-lang__link" href="#">
                                    <p><?=$lang?></p>
                                </a>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                    <span>
                    </span>
                    <?php foreach (Yii::$app->params['availableLocales'] as $key =>  $lang):?>
                        <?php if ($key != Yii::$app->language):?>
                            <div class="header-lang__select lang-<?=$lang?>">
                                <?php
                                echo \yii\helpers\Html::a('<p>'.$lang.'</p>', array_merge(
                                    \Yii::$app->request->get(),
                                    [\Yii::$app->controller->route, 'language' => $lang]), [
                                    'class' => 'header-lang__link'
                                ]);
                                ?>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="menu-icon"><span></span></div>
            </div>
        </div>
    </div>
</div>
