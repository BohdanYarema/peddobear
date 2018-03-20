<?php
use app\widgets\HeaderWidget;

/* @var $this yii\web\View */


$this->title = 'My Yii Application';
?>
<main class="index-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
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
