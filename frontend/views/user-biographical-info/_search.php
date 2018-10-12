<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserBiographicalInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-biographical-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'other_name') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'state_of_birth') ?>

    <?php // echo $form->field($model, 'country_of_birth') ?>

    <?php // echo $form->field($model, 'country_of_citizenship') ?>

    <?php // echo $form->field($model, 'other_country_citizenship') ?>

    <?php // echo $form->field($model, 'date_of_last_entry') ?>

    <?php // echo $form->field($model, 'form_number') ?>

    <?php // echo $form->field($model, 'social_security_number') ?>

    <?php // echo $form->field($model, 'alien_reg_number') ?>

    <?php // echo $form->field($model, 'immigration_status') ?>

    <?php // echo $form->field($model, 'immigration_expiration_date') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'issuance_country') ?>

    <?php // echo $form->field($model, 'issuance_date') ?>

    <?php // echo $form->field($model, 'expiration_date') ?>

    <?php // echo $form->field($model, 'permanent_resident') ?>

    <?php // echo $form->field($model, 'family_members') ?>

    <?php // echo $form->field($model, 'expiration_on_form') ?>

    <?php // echo $form->field($model, 'visa_number') ?>

    <?php // echo $form->field($model, 'visa_issuance_date') ?>

    <?php // echo $form->field($model, 'visa_issuance_country') ?>

    <?php // echo $form->field($model, 'issued_any_visa') ?>

    <?php // echo $form->field($model, 'explain_visa_details') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
