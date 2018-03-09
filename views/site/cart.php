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
                    <h1>Shopping cart</h1>
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
                            <p class="product-description">Ted a Car Joma</p>
                        </div>
                        <div class="product__price">12.99 <span class="currency">$</span></div>
                        <div class="product__quantity">
                            <button class="minus-btn" type="button" name="button">+</button>
                            <input type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">-</button>
                        </div>
                        <div class="product__line-price">12.99 <span class="currency">$</span></div>
                        <div class="product__removal">
                            <div class="remove-product">
                                <button class="remove"> </button>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__image"><img src="img/FullSizeRender 3.jpg"></div>
                        <div class="product__details">
                            <p class="product-description">Ted a Car BLV</p>
                        </div>
                        <div class="product__price">45.99 <span class="currency">$</span></div>
                        <div class="product__quantity">
                            <button class="minus-btn" type="button" name="button">+</button>
                            <input type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">-</button>
                        </div>
                        <div class="product__line-price">45.99 <span class="currency">$</span></div>
                        <div class="product__removal">
                            <div class="remove-product"></div>
                        </div>
                    </div>
                    <div class="totals">
                        <div class="totals-item">90.57 <span class="currency">$</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
