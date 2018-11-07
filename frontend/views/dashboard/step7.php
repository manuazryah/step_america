<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!--<h1>/dashboard/index</h1>-->


<div class="page-header">
    <h3>Master Checklist</h3>
</div>
<div class="row">
    <div class="col-md-4 pad-right-0">
        <div class="check-list-box">
            <?= StepsWidget::widget(['step' => 7]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 7: <?= $step7->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_7_completed) && $user_step_details->step_7_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                       <?php if (isset($user_step_details->step_7_complete_date) && $user_step_details->step_7_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_7_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step7->description ?>
                </div>
                <div class="step-info-box">
                    <h5>A. IN-BOUND DEPOSIT WIRING INFORMATION:</h5>
                    <form name="transfer_of_capital" id="transfer_of_capital">
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group portal-form">

                            <label for="inputEmail" class="portal-text">Escrow Agent:</label>
                            <br>
                            <?= $step7->escrow_agent ?>
                        </div>
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">LLC:</label>
                            <br>
                            <?= $step7->llc ?>
                        </div>
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Administrative Agent:</label>
                            <br>
                            <?= $step7->administrative_agent ?>
                        </div>
                    </form>
                </div>
                
                <div class="step-info-box">
                    <h5>B. BENEFICARY BANK ACCOUNT INFORMATION:</h5>
                    <div class="form-group portal-form">

                        <label for="inputPassword" class="portal-text">Bank Name</label>
                        <br>
                        <?= $step7->bank_name ?>

                    </div>
                    <div class="form-group portal-form">

                        <label for="inputPassword" class="portal-text">Bank Address</label>
                        <br>
                        <?= $step7->bank_address ?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Bank Institution #</label>
                            <br>
                            <?= $step7->bank_institution ?>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Bank Branch #</label>
                            <br>
                            <?= $step7->bank_branch ?>

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Bank Account #</label>
                            <br>
                            <?= $step7->bank_account ?>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Swift ID #</label>
                            <br>
                            <?= $step7->swift_id ?>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Contact Name</label>
                            <br>
                            <?= $step7->contact_name ?>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                        <div class="form-group portal-form">

                            <label for="inputPassword" class="portal-text">Contact #</label>
                            <br>
                            <?= $step7->contact ?>
                        </div>

                    </div>
                    <div class="form-group portal-form">

                        <label for="inputPassword" class="portal-text">ABA #</label>
                        <br>
                        <?= $step7->ABA ?>
                    </div>
                </div>
                
                <div class="step-info-box">
                    <h5>C. WIRING DEPOSIT DETAILS:</h5>
                    <?php $form = ActiveForm::begin(); ?>

                    <div class="form-group portal-form">
                        <?=
                        $form->field($user_steps, 'deposited_on', [
                            'template' => "{label}\n{input}\n{hint}\n{error}",
                            'labelOptions' => ['class' => 'portal-text']
                        ])->textInput(['maxlength' => true])
                        ?>

                    </div>
                    <div class="form-group portal-form">
                        <?=
                        $form->field($user_steps, 'deposited_amount', [
                            'template' => "{label}\n{input}\n{hint}\n{error}",
                            'labelOptions' => ['class' => 'portal-text']
                        ])->textInput(['maxlength' => true])
                        ?>

                    </div>
                    <div class="form-group portal-form">

                        <?=
                        $form->field($user_steps, 'currency', [
                            'template' => "<div class='col-md-6 col-sm-6 col-xs-12 no-padding-left'>{label}\n{input}</div>\n{hint}\n{error}",
                            'labelOptions' => ['class' => 'portal-text']
                        ])->textInput(['maxlength' => true])
                        ?>

                        <?=
                        $form->field($user_steps, 'confirmation_ref_id', [
                            'template' => "<div class='col-md-6 col-sm-6 col-xs-12 no-padding-left'>{label}\n{input}</div>\n{hint}\n{error}",
                            'labelOptions' => ['class' => 'portal-text']
                        ])->textInput(['maxlength' => true])
                        ?>
                        <br>
                           <input type="submit" name="questionnaire_submit" class="btn btn-primary" style="margin-top: 10px">
                    </div>
                    
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
