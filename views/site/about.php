<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

/* @var $this yii\web\View */
?>

<main class="about-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-about">
        <div class="wrapper">
            <div class="block-content">
                <div class="left-part revealator-slideright revealator-delay5 revealator-duration10">
                    <div class="left-part__header">
                        <h1 class="aboutted"><?=Yii::t('frontend', 'ABOUT TED')?></h1>
                    </div>
                    <div class="background-ted-mob"><img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg"></div>
                    <div class="left-part__icon-text">
                        <div class="order-text-row">
                            <div class="icon-block"><img src="<?=Yii::getAlias("@web")?>/img/1parfume.svg"></div>
                            <div class="text-block">
                                <p>
                                    <?=Yii::t('frontend', 'text_about_one')?>
                                </p>
                            </div>
                        </div>
                        <div class="order-text-row">
                            <div class="icon-block"><img src="<?=Yii::getAlias("@web")?>/img/2dimont.svg"></div>
                            <div class="text-block">
                                <p>
                                    <?=Yii::t('frontend', 'text_about_two')?>
                                </p>
                            </div>
                        </div>
                        <div class="order-text-row">
                            <div class="icon-block"><img src="<?=Yii::getAlias("@web")?>/img/3france.svg"></div>
                            <div class="text-block">
                                <p>
                                    <?=Yii::t('frontend', 'text_about_three')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="left-part__footer">
                        <div class="footer-title">
                            <h2><?=Yii::t('frontend', 'Now the world smells like your scent')?></h2>
                        </div>
                    </div>
                </div>
                <div class="right-part revealator-slideleft revealator-delay10">
                    <div class="right-part__header">
                        <h1 class="aboutted"><?=Yii::t('frontend', 'TED IS')?></h1>
                    </div>
                    <div class="background-ted"><img src="<?=Yii::getAlias("@web")?>/img/TED EBASOS.svg"></div>
                    <div class="right-part__icon-text">
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="<?=Yii::getAlias("@web")?>/img/icon1.svg"></div>
                            <div class="text-icon">
                                <p><?=Yii::t('frontend', 'text_about_right_three')?></p>
                            </div>
                        </div>
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="<?=Yii::getAlias("@web")?>/img/icon2.svg"></div>
                            <div class="text-icon">
                                <p><?=Yii::t('frontend', 'text_about_right_three')?></p>
                            </div>
                        </div>
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="<?=Yii::getAlias("@web")?>/img/icon3.svg"></div>
                            <div class="text-icon">
                                <p>
                                    <?=Yii::t('frontend', 'text_about_right_three')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right-part__footer">
                        <h4>
                            <?=Yii::t('frontend', 'Three internal layers are being |evenly penetrated with perfume liquid by special machine. Each layer absorbs an ideal amount of fragrance. Finally it brings you luxury fragrance as well as saves your money')?>
                        </h4>
                    </div><a class="right-part__next-btn" href="/shop">
                        <p><?=Yii::t('frontend', 'next')?> <span class="triangle"></span></p></a>
                </div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
