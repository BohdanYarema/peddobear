<?php
/**
 * Created by PhpStorm.
 * User: Bogdanek
 * Date: 30.03.18
 * Time: 22:57
 */

use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

?>

<main class="payment-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-payment">
        <div class="wrapper">
            <div class="payment-content">
                <div class="payment-content__header">
                    <h1><span>Personal</span> information</h1>
                </div>
                <div class="payment-content__personal-info">
                    <div class="ted-fon-payment"><img src="img/TED EBASOS.svg"></div>
                    <form class="ted-info" action="" method="post">
                        <div class="input-wrapp">
                            <input id="name" type="input" name="name" placeholder="Your Name" autocomplete="off" required>
                        </div>
                        <div class="input-wrapp">
                            <input id="email" type="email" name="email" placeholder="Email" autocomplete="off" required>
                        </div>
                        <div class="input-wrapp">
                            <input id="phone" type="text" name="phone" placeholder="Phone" autocomplete="off" required>
                        </div>
                        <div class="input-wrapp">
                            <input id="adress" type="text" name="adress" placeholder="Country" autocomplete="off" required>
                        </div>
                        <div class="input-wrapp">
                            <input id="street" type="text" name="street" placeholder="Address" autocomplete="off" required>
                        </div>
                        <div class="input-wrapp">
                            <input id="zipcode" type="text" name="zipcode" placeholder="Zip code" autocomplete="off" required>
                            <input id="city" type="text" name="city" placeholder="City" autocomplete="off" required>
                        </div>
                        <div class="ted-info-payment">
                            <div class="ted-info-payment__item">
                                <input id="pay" type="radio" name="paytype" value="paypal" checked>
                                <label for="pay">PayPal</label>
                                <div class="payment-btn"><img src="img/PayPal.svg"></div>
                            </div>
                            <div class="ted-info-payment__item">
                                <input id="pay" type="radio" name="paytype" value="payu">
                                <label for="pay">PayU</label>
                                <div class="payment-btn"><img src="img/PayU.svg"></div>
                            </div>
                            <div class="ted-info-payment__item">
                                <input id="pay" type="radio" name="paytype" value="applepay">
                                <label for="pay">Apple Pay</label>
                                <div class="payment-btn"><img src="img/applepay.svg"></div>
                            </div>
                        </div>
                        <div class="links-btns"><a class="pay-prev-btn" href="cart.html">
                                <p><span class="triangle"></span> Back</p></a>
                            <input id="pay" type="submit" value="PAY">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <div id="paypal-button"></div>

    <script>
        paypal.Button.render({
            env: 'sandbox', // Or 'sandbox',

            commit: true, // Show a 'Pay Now' button

            style: {
                color: 'gold',
                size: 'small'
            },

            payment: function(data, actions) {
                /*
                 * Set up the payment here
                 */
            },

            onAuthorize: function(data, actions) {
                /*
                 * Execute the payment here
                 */
            },

            onCancel: function(data, actions) {
                /*
                 * Buyer cancelled the payment
                 */
            },

            onError: function(err) {
                /*
                 * An error occurred during the transaction
                 */
            }
        }, '#paypal-button');
    </script>


    <?php echo CookieWidget::widget(['model' => null]); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>


