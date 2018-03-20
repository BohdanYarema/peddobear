<?php
use app\widgets\HeaderWidget;

/* @var $this yii\web\View */
/* @var $model \app\models\Shop[] */


$this->title = 'My Yii Application';
?>
<main class="shop-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-shop">
        <div class="wrapper">
            <?php if (!empty($model)):?>
                <div class="shop-item" data-slider-logos-text>
                    <?php foreach ($model as $item):?>
                        <div class="shop-item-wrap">
                            <div class="shop-item-wrap__description">
                                <div class="shop-header">
                                    <h1><?=$item->locale->title?></h1>
                                </div>
                                <div class="shop-text">
                                    <p><?=$item->locale->description?></p>
                                </div>
                            </div>
                            <div class="shop-item-wrap__price">
                                <div class="price-amount">
                                    <p>Price: <span class="price-item"><?=$item->price?></span> <span class="currency">$</span></p>
                                </div>
                                <div class="item-quantity">
                                    <button class="minus-btn" type="button" name="button">-</button>
                                    <input class="item-amount" type="text" value="1" min="1">
                                    <button class="plus-btn" type="button" name="button">+</button>
                                </div>
                                <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                            </div>
                            <div class="shop-item-wrap__img"><img class="shop" src="<?=$item->image_base_url.'/'.$item->image_path;?>"></div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="slider-btn-wrap">
                    <div class="ted-fon-slider"><img src="<?=Yii::getAlias("@web")?>/img/blagotworitelnost.svg"></div>
                    <div class="btn-left" data-slider-logos-prev><span></span></div>
                    <div class="slider-nav" data-slider-logos>
                        <?php foreach ($model as $item):?>
                            <div class="img-ted-mini"><img src="<?=$item->image_base_url.'/'.$item->image_path;?>"></div>
                        <?php endforeach;?>
                    </div>
                    <div class="btn-right" data-slider-logos-next><span></span></div>
                </div>
            <?php endif;?>
            <div class="buttons-links"><a class="cart-prev-btn" href="special.html">
                    <p><span class="triangle"></span> Special offers</p></a><a class="cart-next-btn" href="cart.html">
                    <p>CONTINUE <span class="triangle"></span></p></a></div>
        </div>
    </div>
</main>
