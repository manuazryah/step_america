<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $step2_model common\models\Step2AccountDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step2-account-details-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <h4 class="form-sub-head">A: Debit Account Holder</h4>
    <div class="row">

        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'debit_acc_bank_name')->textInput(['maxlength' => true])->label('Bank Name') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'debit_acc_bank_institution_no')->textInput(['maxlength' => true])->label('Bank Institution Number') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'debit_acc_transit_no')->textInput(['maxlength' => true])->label('Transit Number') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'debit_acc_swift_code')->textInput(['maxlength' => true])->label('I-BAN / Swift Code') ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'debit_acc_no')->textInput(['maxlength' => true])->label('Bank Account Number') ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'debit_acc_address')->textInput()->label('Bank Address') ?>

        </div>
    </div>
    <h4 class="form-sub-head">B: Beneficiary Account Holder</h4>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'company_name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'benefi_acc_bank_name')->textInput(['maxlength' => true])->label('Bank Name') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'benefi_acc_bank_institution_no')->textInput(['maxlength' => true])->label('Bank Institution Number') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'benefi_acc_transit_no')->textInput(['maxlength' => true])->label('Transit Number') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'benefi_acc_swift_code')->textInput(['maxlength' => true])->label('I-BAN / Swift Code') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'benefi_acc_no')->textInput(['maxlength' => true])->label('Bank Account Number') ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'benefi_acc_address')->textarea(['rows' => 6])->label('Bank Address') ?>

        </div>
    </div>
    <h4 class="form-sub-head">C: Wire Transfer Amount</h4>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'invoice')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'currency')->textInput() ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'exchange_rate')->textInput() ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($step2_model, 'transfer_amount')->textInput() ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($step2_model, 'reference_no')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($step2_model, 'invoice_file')->fileInput() ?>
            <?php
            if (!empty($step2_model->invoice_file)) {
                ?>
                <a target="_blank" href="<?= Yii::$app->homeUrl ?>../uploads/step2/invoice/<?= $model->id ?>/<?= $step2_model->invoice_file; ?>"><?= $step2_model->invoice_file ?></a>
                <?php
            }
            ?>
        </div>  
    </div>
    <?php
    $step2_model->user_id = $model->id;
    ?>
    <?= $form->field($step2_model, 'user_id')->hiddenInput()->label(FALSE) ?>

    <div class="form-group action-btn-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>
    <input type="checkbox" name="approvestep1" value="step2" id="approve_step1" checked="">
    <label>Approve this step</label>
</div>
