<?php
    use app\widgets\HeaderWidget;
    use app\widgets\CookieWidget;
    /* @var $this yii\web\View */
?>

<main class="index-page">
    <?php echo HeaderWidget::widget(['model' => null]); ?>
    <div class="main-container">
        <div class="wrapper">
            <div class="main-container__inner">
                <div class="main-container__content">
                    <img class="main-page__logo revealator-slideup revealator-delay4" src="<?=Yii::getAlias("@web")?>/img/start1.svg">
                    <a class="start-button revealator-slideup revealator-delay7" href="<?=\yii\helpers\Url::to(['/shop'])?>"><?=Yii::t('frontend', 'Start')?></a>
                </div>
            </div>
        </div>
        <video id="video" loop preload="auto" autoplay poster="<?=Yii::getAlias("@web")?>/video/mob.gif">
            <!--playsinline controls="true"  muted-->
            <source src="<?=Yii::getAlias("@web")?>/video/555.mp4" type="video/mp4" codecs="avc1.42E01E, H.264">
            <source src="<?=Yii::getAlias("@web")?>/video/555.webm" type="video/webm">
        </video>
    </div>
    <?php echo CookieWidget::widget(['model' => null]); ?>
</main>