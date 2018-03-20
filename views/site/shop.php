<?php
use app\widgets\HeaderWidget;

/* @var $this yii\web\View */


$this->title = 'My Yii Application';
?>
<main class="shop-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-shop">
        <div class="wrapper">
            <div class="shop-item" data-slider-logos-text>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1><span>miss</span> ted</h1>
                        </div>
                        <div class="shop-text">
                            <p>Miss Ted - a symbol of elegance, perfection and luxurt. An aroma for romantic woman who desires the embrance of a passionate romance. In the beginning, your senses will be mastered by a refreshing coctail of fruity tones that will fill you with new energy and endless optimism</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">10</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/SNOWFRESH.png"></div>
                </div>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1>Allure</h1>
                        </div>
                        <div class="shop-text">
                            <p>Allure - Luxurious, sexy with a delicate yet palpable note of vanilla. A fragrance created for individualists, women who love traveling and extreme romance. Suitable for both day and evening, for official meetings and for casual occasions.</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">4</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/one.png"></div>
                </div>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1>Candy</h1>
                        </div>
                        <div class="shop-text">
                            <p>Candy - floral aroma, dedicated to all women who are not afraid to show their opinion and defend what’s theirs. Give yourself in to temptation in the form of pink strength. Leave the crowd and shine. Start doing everything your own way and gain energy to overcome everyday obstacles.</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">6</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/frappe.png"></div>
                </div>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1><span>Caramel</span> frappe</h1>
                        </div>
                        <div class="shop-text">
                            <p>Caramel frappe - a gentle caramel with bright coffee notes. Now the aroma of invigorating coffee will not leave you, giving energy of coffee and the pleasant, sweet bitterness of caramel.</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">13</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/frappe.png"></div>
                </div>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1>One</h1>
                        </div>
                        <div class="shop-text">
                            <p>One - the fragrance will emphasize your attractiveness, class and elegance. It's a luxurious, luxurious fragrance that is famous for its aldehyde and aromatic essences that will delight everyone around you. Reveal your masculinity and personality.</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">5</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/frappe.png"></div>
                </div>
                <div class="shop-item-wrap">
                    <div class="shop-item-wrap__description">
                        <div class="shop-header">
                            <h1>Joma</h1>
                        </div>
                        <div class="shop-text">
                            <p>Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.</p>
                        </div>
                    </div>
                    <div class="shop-item-wrap__price">
                        <div class="price-amount">
                            <p>Price: <span class="price-item">1</span> <span class="currency">$</span></p>
                        </div>
                        <div class="item-quantity">
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input class="item-amount" type="text" value="1" min="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                        </div>
                        <button class="add-to-cart" type="submit" value="submit">Add to cart</button>
                    </div>
                    <div class="shop-item-wrap__img"><img class="shop" src="img/frappe.png"></div>
                </div>
            </div>
            <div class="slider-btn-wrap">
                <div class="ted-fon-slider"><img src="img/blagotworitelnost.svg"></div>
                <div class="btn-left" data-slider-logos-prev><span></span></div>
                <div class="slider-nav" data-slider-logos>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 2.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 3.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 4.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 2.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 3.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 2.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 3.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 4.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 2.jpg"></div>
                    <div class="img-ted-mini"><img src="img/FullSizeRender 3.jpg"></div>
                </div>
                <div class="btn-right" data-slider-logos-next><span></span></div>
            </div>
            <div class="buttons-links"><a class="cart-prev-btn" href="special.html">
                    <p><span class="triangle"></span> Special offers</p></a><a class="cart-next-btn" href="cart.html">
                    <p>CONTINUE <span class="triangle"></span></p></a></div>
        </div>
    </div>
</main>
