<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <?php foreach (Yii::$app->params['availableLocales'] as $locale => $localeTitle): ?>
            <li <?php if($locale == Yii::$app->language): ?>class="active"<?php endif;?>><a data-toggle="tab" href="#tab<?=$locale?>"><?=$localeTitle?></a></li>
        <?php endforeach; ?>
    </ul>

    <div class="tab-content">
        <br />
        <?php foreach (Yii::$app->params['availableLocales'] as $locale => $localeTitle): ?>
            <div id="tab<?=$locale?>" class="tab-pane fade <?php if($locale == Yii::$app->language): ?>in active<?php endif;?>">

                <?php echo $form->field($model, 'i18n[' . $locale .  '][title]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Название')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][description]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Короткое описание')) ?>

            </div>
        <?php endforeach; ?>
    </div>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'specail_price')->textInput() ?>

    <?= $form->field($model, 'sale')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?php echo $form->field($model, 'image')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/file-storage/upload'],
            'maxFileSize' => 5000000, // 5 MiB
        ])
        ->label($model->getAttributeLabel("image"));
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
