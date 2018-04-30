<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

/* @var $this yii\web\View */
/* @var $model \app\models\Shop[] */

?>
<main class="shop-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-shop">
        <div class="wrapper">

            <?php if (!empty($model)):?>
                <div class="shop-item" data-slider-logos-text>
                    <?php foreach ($model as $item):?>
                        <div class="shop-item-wrap">
                            <div class="shop-item-wrap__description revealator-slidedown revealator-once revealator-delay3">
                                <div class="shop-header">
                                    <h1><?=$item->locale->title?></h1>
                                </div>
                                <div class="shop-text">
                                    <p><?=$item->locale->description?></p>
                                </div>
                            </div>
                            <div class="shop-item-wrap__price revealator-slidedown revealator-once revealator-delay5">
                                <div class="price-amount">
                                    <p>Price: <span class="price-item"><?=$item->locale->price?></span> </p>
                                </div>
                                <div class="item-quantity">
                                    <button class="minus-btn" type="button" name="button">-</button>
                                    <input id="item__<?=$item->id?>" class="item-amount" type="text" value="1" min="1">
                                    <button class="plus-btn" type="button" name="button">+</button>
                                </div>
                                <button class="add-to-cart" data-id="<?=$item->id?>"  data-selector="item__<?=$item->id?>" type="submit" value="submit"><?=Yii::t('frontend', 'Add to cart')?></button>
                                <div class="warning-block">
                                    <?php if($item->counter <= 3):?>
                                        <h4>WARNING! <br></h4>
                                        <p>There are only 3 items left, <br> the delivery time can be <br> increased</p>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="shop-item-wrap__img revealator-slidedown revealator-once revealator-delay7">
                                <img class="shop" src="<?=$item->image_base_url.'/'.$item->image_path;?>">
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>

            <?php if (!empty($model)):?>
                <div class="slider-btn-wrap revealator-slideup revealator-delay5 revealator-once revealator-duration10">
                    <?php if (Yii::$app->language == 'pl'):?>
                        <div class="ted-fon-slider-pl" style="display: block"><img src="<?=Yii::getAlias("@web")?>/img/blagotworitelnost.svg"></div>
                    <?php else:?>
                        <div class="ted-fon-slider" style="display: block"><img src="<?=Yii::getAlias("@web")?>/img/Charity.svg"></div>
                    <?php endif;?>
                    <div class="btn-left" data-slider-logos-prev><span></span></div>
                    <div class="slider-nav" data-slider-logos>
                        <?php foreach ($model as $item):?>
                            <div class="img-ted-mini">
                                <img src="<?=$item->slide_base_url.'/'.$item->slide_path;?>">
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="btn-right" data-slider-logos-next><span></span></div>
                </div>
            <?php endif;?>

            <div class="buttons-links">
                <a class="cart-prev-btn" href="<?=\yii\helpers\Url::to(['/special'])?>">
                    <p><span class="triangle"></span> <?=Yii::t('frontend', 'special offers')?></p>
                </a>
                <a class="cart-next-btn" href="<?=\yii\helpers\Url::to(['/cart'])?>">
                    <p><?=Yii::t('frontend', 'continue')?> <span class="triangle"></span></p>
                </a>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
