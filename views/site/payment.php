<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

?>


<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">-->
<!--    <input type="hidden" name="cmd" value="_xclick">-->
<!--    <input type="hidden" name="business" value="bohdanyarema1992-facilitator@gmail.com">-->
<!--    <input type="hidden" name="item_name" value="Peddobear item">-->
<!--    <input type="hidden" name="item_number" value="User123">-->
<!--    <input type="hidden" name="currency_code" value="PLN">-->
<!--    <input type="hidden" name="amount" value="0.01">-->
<!--    <input type="hidden" name="cancel_return" value="http://peddobear.devservice.pro/cancel">-->
<!--    <input type="hidden" name="return" value="http://peddobear.devservice.pro/success">-->
<!--    <input type="hidden" name="notify_url" value="http://peddobear.devservice.pro/notify">-->
<!--    <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">-->
<!--</form>-->

<main class="payment-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-payment">
        <div class="wrapper">
            <div class="payment-content">
                <div class="payment-content__header">
                    <h1><strong>Personal</strong> information</h1>
                </div>
                <div class="payment-content__personal-info">
                    <div class="ted-fon-payment"><img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg"></div>

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'ted-info'
                        ],
                        'fieldConfig' => ['template' => "{label}\n{input}"],
                    ]); ?>
                        <?= $form->errorSummary($model) ?>
                        <?= $form->field($model, 'name', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Your Name'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'email', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Email'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'phone', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Phone'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'country', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Country'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'address', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Address'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'zipcode', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'Zip code'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?= $form->field($model, 'city', [
                            'options' => [
                                'class' => 'input-wrapp'
                            ]
                        ])->textInput([
                            'placeholder' => Yii::t('frontend', 'City'),
                            'autocomplete' => 'off'
                        ])->label(false) ?>

                        <?php echo $form->field($model, 'payment_type')->radioList(
                            [0 => 'PayPal', 1 => 'PayU', 2 => 'Apple Pay'],
                            [
                                'item' => function($index, $label, $name, $checked, $value) {
                                    $return = "<div class='ted-info-payment__item'>";
                                    $return .= '<input id="payapple" type="radio" name="' . $name . '" value="' . $value . '" tabindex="3">';
                                    $return .= '<label class="modal-radio">';
                                    $return .= ucwords($label);
                                    $return .= '</label><div class="payment-btn"><img src="'.Yii::getAlias("@web").'/img/PayPal.svg"></div>';
                                    $return .= '</div>';
                                    return $return;
                                },
                                'class' => 'ted-info-payment',
                            ]
                        )->label(false); ?>
                        <div class="links-btns">
                            <a class="pay-prev-btn" href="/cart">
                                <p>
                                    <span class="triangle"></span> Back
                                </p>
                            </a>
                            <?= Html::submitButton(Yii::t('frontend', 'Pay'), ['class' => '', 'id' => 'pay']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="cookies-bar" #catapult-cookie-bar>
        <div class="cookies-bar-inner">
            <div class="cookies-bar-inner__text">
                <p>Nasza strona internetowa używa plików cookies (tzw. ciasteczka) w celach statystycznych, reklamowych oraz funkcjonalnych. Dzięki nim możemy indywidualnie dostosować stronę do twoich potrzeb. Każdy może zaakceptować pliki cookies albo ma możliwość wyłączenia ich w przeglądarce, dzięki czemu nie będą zbierane żadne informacje. </p>
            </div>
            <div class="cookies-bar-inner__btn">
                <button id="catapultCookie">OK</button>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
