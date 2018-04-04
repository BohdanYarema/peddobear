<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;
use app\models\CartModel;

/* @var $this yii\web\View */

$cart = CartModel::getCart();
$shiping = CartModel::getShiping();
?>

<main class="cart-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-cart">
        <div class="wrapper">
            <div class="cart-block">
                <div class="cart-block__header">
                    <h1><?=Yii::t('frontend', 'shopping cart')?></h1>
                </div>
                <?php if (!empty($cart)):?>
                    <div class="cart-block__cart">
                    <div class="column-labels">
                        <label class="product-details"> </label>
                        <label class="product-price"><?=Yii::t('frontend', 'price')?></label>
                        <label class="product-quantity"><?=Yii::t('frontend', 'quantity')?></label>
                        <label class="product-line-price"><?=Yii::t('frontend', 'total')?></label>
                        <label class="product-removal"><?=Yii::t('frontend', 'remove')?></label>
                    </div>
                    <?php $count = 0?>
                    <?php foreach ($cart as $item):?>
                        <?php $count += $item->count;?>
                        <div class="product item__<?=$item->id?>">
                            <div class="product__item">
                                <div class="product__item__image"><img src="<?=$item->image_base_url.'/'.$item->image_path;?>"></div>
                                <div class="product__item__details">
                                    <p class="product-description">
                                        <span class="ted-name"><?=$item->locale->title?></span>
                                    </p>
                                </div>
                            </div>
                            <div class="product__price"><?=$item->getEndPrice()?></div>
                            <div class="product__quantity">
                                <button class="minus-btn minus-btn--db" data-id="<?=$item->id?>" data-selector="item__<?=$item->id?>" type="button" name="button">-</button>
                                <input type="text" value="<?=$item->count?>" min="1" id="item__<?=$item->id?>">
                                <button class="plus-btn plus-btn--db"  data-id="<?=$item->id?>" data-selector="item__<?=$item->id?>" type="button" name="button">+</button>
                            </div>
                            <div class="product__line-price db_price--single__<?=$item->id?>"><?=$item->summary?></div>
                            <div class="product__removal"><a class="remove-product"><img class="remove-krest" data-id="<?=$item->id?>" src="<?=Yii::getAlias("@web")?>/img/Krest.svg"></a></div>
                        </div>
                    <?php endforeach;?>
                    <div class="totals">
                        <div class="totals__titles">
                            <div class="titles-wrapper">
                                <label class="titl">
                                    <h4><?=Yii::t('frontend', 'delivery point')?></h4>
                                </label>
                                <label class="titl">
                                    <h4><?=Yii::t('frontend', 'total quantity')?></h4>
                                </label>
                                <label class="titl">
                                    <h4><?=Yii::t('frontend', 'total price')?></h4>
                                </label>
                            </div>
                        </div>
                        <div class="totals__values">
                            <div class="values-wrapp">
                                <label class="radio-delivery">
                                    <div class="radio-wrapp">
                                        <input class="qwe" id="qwe" type="radio" name="dilivery" value="poland" <?php if($shiping == 'poland'){echo 'checked';}?> >
                                        <input class="qwe" id="qwe" type="radio" name="dilivery" value="world" <?php if($shiping == 'world'){echo 'checked';}?>>
                                    </div>
                                    <div class="radio-labeles-wrapp">
                                        <div class="radio-labeles-wrapp__label">
                                            <p>Poland</p>
                                        </div>
                                        <div class="radio-labeles-wrapp__label">
                                            <p>World</p>
                                        </div>
                                    </div>
                                </label>
                                <label class="common-quantity"><?=$count?></label>
                                <label class="common-price db_price"><?=CartModel::getSumm() + Yii::$app->params['delivery'][Yii::$app->language][$shiping]?>
                                    <div class="delivery-label">(<?=Yii::t('frontend', 'Delivery costs included')?>)</div>
                                </label>
                            </div>
                        </div>
                        <div class="buttons-links"><a class="cart-prev-btn" href="shop.html">
                                <p><span class="triangle"></span> <?=Yii::t('frontend', 'return')?></p></a><a class="cart-next-btn" href="<?=\yii\helpers\Url::to(['/payment'])?>">
                                <p><?=Yii::t('frontend', 'continue')?> <span class="triangle"></span></p></a></div>
                        <div class="ted-fon"><img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg"></div>
                    </div>
                </div>
                <?php else:?>
                    <div class="cart-empty " style="display: flex">
                        <div class="cart-empty__header">
                            <h1><?=Yii::t('frontend', 'cart is empty')?></h1>
                        </div>
                        <div class="cart-empty__logo"><img src="<?=Yii::getAlias("@web")?>/img/SADTED.png"></div>
                        <div class="cart-empty__subtext">
                            <p><?=Yii::t('frontend', 'fix it')?></p>
                        </div><a class="cart-empty__btn" href="<?=\yii\helpers\Url::to(['/shop'])?>">
                            <p><?=Yii::t('frontend', 'return to shop')?></p></a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
