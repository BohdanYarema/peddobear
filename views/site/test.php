<?php
/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 22.03.2018
 * Time: 10:31
 */
?>

<a class="add" data-id="2"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="7"  data-count="2" href="javascript:void(0);">Add</a>
<br>
<a class="add" data-id="2"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="7"  data-count="4" href="javascript:void(0);">Add</a>
<br>
<a class="delete" data-id="2"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="7"  data-count="2" href="javascript:void(0);">delete</a>
<br>
<a class="delete" data-id="2"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="7"  data-count="4" href="javascript:void(0);">delete</a>
<br>




<p class="price">

</p>


<?php echo HeaderWidget::widget(['model' => null]); ?>
<main class="index-page">

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


