<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

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

                <?php echo $form->field($model, 'i18n[' . $locale .  '][meta_keywords]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Ключевые слова')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][meta_title]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Название')) ?>

                <?php echo $form->field($model, 'i18n[' . $locale .  '][meta_description]')->textInput(['maxlength' => true])->label(Yii::t('backend', 'Короткое описание')) ?>
            </div>
        <?php endforeach; ?>
    </div>

    <?php echo $form->field($model, 'meta_image')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/file-storage/upload'],
            'maxFileSize' => 5000000, // 5 MiB
        ])
        ->label($model->getAttributeLabel("meta_image"));
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
