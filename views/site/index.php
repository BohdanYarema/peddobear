<?php
    use app\widgets\HeaderWidget;

    /* @var $this yii\web\View */

    $this->title = 'TED a car';
?>

<main class="index-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container">
        <div class="wrapper">
            <div class="main-container__inner">
                <div class="main-container__content">
                    <img class="main-page__logo revealator-slideup revealator-delay4" src="<?=Yii::getAlias("@web")?>/img/start1.svg">
                    <a class="start-button revealator-slideup revealator-delay7" href="<?=\yii\helpers\Url::to(['/cart'])?>">Start</a>
                </div>
            </div>
        </div>
        <video id="video" loop preload="auto" autoplay poster="<?=Yii::getAlias("@web")?>/video/mob.gif">
            <!--playsinline controls="true"  muted-->
            <source src="<?=Yii::getAlias("@web")?>/video/555.mp4" type="video/mp4" codecs="avc1.42E01E, H.264">
            <source src="<?=Yii::getAlias("@web")?>/video/555.webm" type="video/webm">
        </video>
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
</main>