<?php
/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 22.03.2018
 * Time: 10:31
 */
?>

<a class="add" data-id="2"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="7"  data-count="2" href="javascript:void(0);">Add</a>
<br>
<a class="add" data-id="2"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="7"  data-count="4" href="javascript:void(0);">Add</a>
<br>
<a class="delete" data-id="2"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="7"  data-count="2" href="javascript:void(0);">delete</a>
<br>
<a class="delete" data-id="2"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="7"  data-count="4" href="javascript:void(0);">delete</a>
<br>




<p class="price">

</p>


<?php echo HeaderWidget::widget(['model' => null]); ?>
<main class="index-page">

    <div class="main-container">
        <div class="main-slider">
            <div class="main-slider__item" style="background:url(<?=Yii::getAlias("@web")?>/img/slide1.jpg);"></div>
            <div class="main-slider__item" style="background:url(<?=Yii::getAlias("@web")?>/img/slide2.jpg);"></div>
            <div class="main-slider__item" style="background:url(<?=Yii::getAlias("@web")?>/img/slide3.jpg);"></div>
        </div>
        <div class="wrapper">
            <div class="main-container__inner">
                <div class="main-container__content"><img class="main-page__logo" src="img/1.png"><a class="start-button" href="#"><?=Yii::t('frontend', 'test')?></a></div>
            </div>
        </div>
    </div>
</main>




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
                                <p><?=Yii::t('frontend', 'Price')?>: <span class="price-item"><?=$item->price?></span> <span class="currency">$</span></p>
                            </div>
                            <div class="item-quantity">
                                <button class="minus-btn" type="button" name="button">-</button>
                                <input class="item-amount" type="text" value="1" min="1">
                                <button class="plus-btn" type="button" name="button">+</button>
                            </div>
                            <button class="add-to-cart" type="submit" value="submit"><?=Yii::t('frontend', 'Add to cart')?></button>
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
                <p><span class="triangle"></span> <?=Yii::t('frontend', 'Special offers')?></p></a><a class="cart-next-btn" href="/site/cart">
                <p><?=Yii::t('frontend', 'CONTINUE')?> <span class="triangle"></span></p></a></div>
    </div>
</div>


