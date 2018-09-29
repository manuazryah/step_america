<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step2AccountDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step2-account-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'debit_acc_bank_name') ?>

    <?= $form->field($model, 'debit_acc_bank_institution_no') ?>

    <?= $form->field($model, 'debit_acc_transit_no') ?>

    <?php // echo $form->field($model, 'debit_acc_swift_code') ?>

    <?php // echo $form->field($model, 'debit_acc_no') ?>

    <?php // echo $form->field($model, 'debit_acc_address') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'benefi_acc_bank_name') ?>

    <?php // echo $form->field($model, 'benefi_acc_bank_institution_no') ?>

    <?php // echo $form->field($model, 'benefi_acc_transit_no') ?>

    <?php // echo $form->field($model, 'benefi_acc_swift_code') ?>

    <?php // echo $form->field($model, 'benefi_acc_no') ?>

    <?php // echo $form->field($model, 'benefi_acc_address') ?>

    <?php // echo $form->field($model, 'invoice') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'exchange_rate') ?>

    <?php // echo $form->field($model, 'transfer_amount') ?>

    <?php // echo $form->field($model, 'reference_no') ?>

    <?php // echo $form->field($model, 'invoice_file') ?>

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
