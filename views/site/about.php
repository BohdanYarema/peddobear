<?php
use app\widgets\HeaderWidget;
use app\widgets\FooterWidget;
use app\widgets\CookieWidget;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<main class="about-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container-about">
        <div class="wrapper">
            <div class="block-content">
                <div class="left-part revealator-slideright revealator-delay5 revealator-duration10">
                    <div class="left-part__header">
                        <h1 class="aboutted">About <span>Ted</span></h1>
                    </div>
                    <div class="background-ted-mob"><img src="img/TED EBASOS.svg"></div>
                    <div class="left-part__icon-text">
                        <div class="order-text-row">
                            <div class="icon-block"><img src="img/1parfume.svg"></div>
                            <div class="text-block">
                                <p><span>TED A CAR</span> is a universal and premium kind of air aromatization in the form of a stylish accessory that can be used in a car, in the bathroom or in any room.</p>
                            </div>
                        </div>
                        <div class="order-text-row">
                            <div class="icon-block"><img src="img/2dimont.svg"></div>
                            <div class="text-block">
                                <p><span>TED A CAR</span> is different from its competitors with it’s fashionable and stylish design, as well as unusual  and original fragrances that will be appreciated by connoisseurs of fashion accessories and style.</p>
                            </div>
                        </div>
                        <div class="order-text-row">
                            <div class="icon-block"><img src="img/3france.svg"></div>
                            <div class="text-block">
                                <p><span>Persistent and pleasant</span> aromas developed in Europe will quickly help your move unpleasant smells, and also make your surrounding more comfortable to be in and just cheer up!</p>
                            </div>
                        </div>
                    </div>
                    <div class="left-part__footer">
                        <div class="footer-title">
                            <h2>Now the world smells like your scent!</h2>
                        </div>
                    </div>
                </div>
                <div class="right-part revealator-slideleft revealator-delay10">
                    <div class="right-part__header">
                        <h1 class="aboutted"><span>Ted</span> IS</h1>
                    </div>
                    <div class="background-ted"><img src="img/TED EBASOS.svg"></div>
                    <div class="right-part__icon-text">
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="img/icon1.svg"></div>
                            <div class="text-icon">
                                <p>External layer becomes multicolored by covering non-toxic and <span>anti-allergic paints</span></p>
                            </div>
                        </div>
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="img/icon2.svg"></div>
                            <div class="text-icon">
                                <p>Due to its specially adapted cellulose, which possesses a conserve function, the fragrance is equally <span>persistent during a month</span></p>
                            </div>
                        </div>
                        <div class="text-icon-column">
                            <div class="icon-item"><img src="img/icon3.svg"></div>
                            <div class="text-icon">
                                <p>
                                    We use eco friendly cardboard
                                    only. It is chemically free as
                                    well as safe for an environment.
                                    <span>It don't cause any irritations</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right-part__footer">
                        <h4>
                            Three internal layers are being |evenly penetrated with
                            perfume liquid by special machine. Each layer absorbs
                            an ideal amount of fragrance. Finally it brings you
                            luxury fragrance as well as saves your money
                        </h4>
                    </div><a class="right-part__next-btn" href="shop.html">
                        <p>NEXT <span class="triangle"></span></p></a>
                </div>
            </div>
        </div>
    </div>
    <?php echo CookieWidget::widget(['model' => null]); ?>
    <?php echo FooterWidget::widget(['model' => null]); ?>
</main>
