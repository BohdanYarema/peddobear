<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\modules\models\I18nMessage */
/* @var $form yii\bootstrap\ActiveForm */


$data = \app\modules\models\I18nSourceMessage::find()->all();
?>

<div class="i18n-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        echo $form->field($model, 'id')->dropDownList(\yii\helpers\ArrayHelper::map($data, 'id', 'message'), ['disabled'=>!$model->isNewRecord]);
    ?>
    <?php if (!$model->isNewRecord): ?>
        <?php echo $form->field($model, 'category')->textInput(['disabled'=>true]) ?>
        <?php echo $form->field($model, 'sourceMessage')->textInput(['disabled'=>true]) ?>
    <?php endif; ?>

    <?php echo $form->field($model, 'language')->textInput(['maxlength' => 16, 'value' => 'pl']) ?>

    <?php echo $form->field($model, 'translation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
