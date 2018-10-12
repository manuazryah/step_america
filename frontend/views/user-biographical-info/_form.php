<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserBiographicalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-biographical-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'state_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_of_birth')->textInput() ?>

    <?= $form->field($model, 'country_of_citizenship')->textInput() ?>

    <?= $form->field($model, 'other_country_citizenship')->textInput() ?>

    <?= $form->field($model, 'date_of_last_entry')->textInput() ?>

    <?= $form->field($model, 'form_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alien_reg_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'immigration_status')->textInput() ?>

    <?= $form->field($model, 'immigration_expiration_date')->textInput() ?>

    <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issuance_country')->textInput() ?>

    <?= $form->field($model, 'issuance_date')->textInput() ?>

    <?= $form->field($model, 'expiration_date')->textInput() ?>

    <?= $form->field($model, 'permanent_resident')->textInput() ?>

    <?= $form->field($model, 'family_members')->textInput() ?>

    <?= $form->field($model, 'expiration_on_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visa_number')->textInput() ?>

    <?= $form->field($model, 'visa_issuance_date')->textInput() ?>

    <?= $form->field($model, 'visa_issuance_country')->textInput() ?>

    <?= $form->field($model, 'issued_any_visa')->textInput() ?>

    <?= $form->field($model, 'explain_visa_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'CB')->textInput() ?>

    <?= $form->field($model, 'UB')->textInput() ?>

    <?= $form->field($model, 'DOC')->textInput() ?>

    <?= $form->field($model, 'DOU')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
