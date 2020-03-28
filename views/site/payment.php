<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PayMentModel;

/* @var $this yii\web\View */

$payments = Yii::$app->params['payment_type'];

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
                    <div class="ted-fon-payment"><img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg"></div>

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'ted-info'
                        ],
                        'fieldConfig' => ['template' => "{label}\n{input}\n{error}"],
                    ]); ?>
                        <?= $form->field($model, 'payment_order_id')->hiddenInput()->label(false) ?>
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
                            $payments,
                            [
                                'item' => function($index) use (&$payments) {

                                    $disabled = '';
                                    if ($payments[$index]['status'] === 0){
                                        $disabled = 'disabled="disabled"';
                                    }

                                    $return = "<div class='ted-info-payment__item'>";
                                    $return .= '<input id="'.$payments[$index]['id'].'" type="radio" name="Payment[payment_type]" value="' . $index . '" tabindex="'.$index.'" '.$disabled.'>';
                                    $return .= '<label class="modal-radio">';
                                    $return .= ucwords($payments[$index]['name']);
                                    $return .= '</label><div class="payment-btn"><img src="'.Yii::getAlias("@web").$payments[$index]['image'].'"></div>';

                                    if ($payments[$index]['status'] === 0){
                                        $return .= "<p>(Soon)</p>";
                                    }

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
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
