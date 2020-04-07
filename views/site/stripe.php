<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PayMentModel;

/* @var $this yii\web\View */
?>

<main class="payment-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-payment">
        <div class="wrapper">
            <div class="payment-content">
                <div class="payment-content__header">
                    <h1><strong>Personal</strong> information</h1>
                </div>
                <div class="payment-content__personal-info">
                    <div class="ted-fon-payment">
                        <img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg">
                    </div>
                    <form action="" method="POST" id="payment-form">
                        <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                        <span class="payment-errors"></span>
                        <label>Card Number</label>
                        <input type="text" size="20" data-stripe="number">
                        <label>Expiration (MM/YY)</label>
                        <input type="text" size="2" data-stripe="exp_month">
                        <input type="text" size="2" data-stripe="exp_year">
                        <label>CVC</label>
                        <input type="text" size="4" data-stripe="cvc">
                        <input type="submit" class="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>



