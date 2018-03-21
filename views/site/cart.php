<?php
use app\widgets\HeaderWidget;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<main class="cart-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-cart">
        <div class="wrapper">
            <div class="cart-block">
                <div class="cart-block__header">
                    <h1><span>Shopping</span> cart</h1>
                </div>
                <div class="cart-block__cart">
                    <div class="column-labels">
                        <label class="product-image"> </label>
                        <label class="product-details"> </label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-line-price">Total</label>
                        <label class="product-removal">Remove</label>
                    </div>
                    <div class="product">
                        <div class="product__image"><img src="img/FullSizeRender 2.jpg"></div>
                        <div class="product__details">
                            <p class="product-description"><span class="ted-name">Ted a Car</span> Joma</p>
                        </div>
                        <div class="product__price">12.99 <span class="currency">$</span></div>
                        <div class="product__quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <div class="product__line-price">12.99 <span class="currency">$</span></div>
                        <div class="product__removal"><a class="remove-product"><img class="remove-krest" src="img/Krest.svg"></a></div>
                    </div>
                    <div class="product">
                        <div class="product__image"><img src="img/FullSizeRender 3.jpg"></div>
                        <div class="product__details">
                            <p class="product-description"><span class="ted-name">Ted a Car</span> BLV</p>
                        </div>
                        <div class="product__price">45.99 <span class="currency">$</span></div>
                        <div class="product__quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <div class="product__line-price">45.99 <span class="currency">$</span></div>
                        <div class="product__removal"><a class="remove-product"><img class="remove-krest" src="img/Krest.svg"></a></div>
                    </div>
                    <div class="totals">
                        <div class="totals__titles">
                            <div class="titles-wrapper">
                                <label class="titl">
                                    <h4><span>Delivery</span> Point</h4>
                                </label>
                                <label class="titl">
                                    <h4><span>Total</span> Quantity</h4>
                                </label>
                                <label class="titl">
                                    <h4><span>Total</span> Price</h4>
                                </label>
                            </div>
                        </div>
                        <div class="totals__values">
                            <div class="values-wrapp">
                                <label class="radio-delivery">
                                    <div class="radio-wrapp">
                                        <input id="qwe" type="radio" name="dilivery" value="poland" checked>
                                        <input id="qwe" type="radio" name="dilivery" value="world">
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
                                <label class="common-quantity">4</label>
                                <label class="common-price">90.57 <span class="currency">$</span></label>
                            </div>
                        </div>
                        <div class="buttons-links"><a class="cart-prev-btn" href="shop.html">
                                <p><span class="triangle"></span> RETURN TO shop</p></a><a class="cart-next-btn" href="payment.html">
                                <p>CONTINUE <span class="triangle"></span></p></a></div>
                        <div class="ted-fon"><img src="img/TED EBASOS.svg"></div>
                    </div>
                </div>
                <div class="cart-empty">
                    <div class="cart-empty__header">
                        <h1>Your cart is empty</h1>
                    </div>
                    <div class="cart-empty__logo"><img src="img/SADTED.png"></div>
                    <div class="cart-empty__subtext">
                        <p>But you can fix it</p>
                    </div><a class="cart-empty__btn" href="shop.html">
                        <p>Return to shop</p></a>
                </div>
            </div>
        </div>
    </div>
</main>
