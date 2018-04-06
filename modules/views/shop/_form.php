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
            <li <?php if($locale == 'pl'): ?>class="active"<?php endif;?>><a data-toggle="tab" href="#tab<?=$locale?>"><?=$localeTitle?></a></li>
        <?php endforeach; ?>
    </ul>

    <div class="tab-content">
        <br />
        <?php foreach (Yii::$app->params['availableLocales'] as $locale => $localeTitle): ?>
            <div id="tab<?=$locale?>" class="tab-pane fade <?php if($locale == Yii::$app->language): ?>in active<?php endif;?>">

                <?php echo $form->field($model, 'i18n[' . $locale .  '][title]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Название')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][description]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Короткое описание')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][meta_title]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Название')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][meta_description]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Короткое описание')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][price]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Price')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][special_price]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Special price')) ?>

            </div>
        <?php endforeach; ?>
    </div>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Отключен',
        '1' => 'Активный',
        '2' => 'Спец предложение'
    ]); ?>

    <?php echo $form->field($model, 'image')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/file-storage/upload'],
            'maxFileSize' => 5000000, // 5 MiB
        ])
        ->label($model->getAttributeLabel("image"));
    ?>

    <?php echo $form->field($model, 'slide')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/file-storage/upload'],
            'maxFileSize' => 5000000, // 5 MiB
        ])
        ->label($model->getAttributeLabel("slide"));
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
