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
            <?= StepsWidget::widget(['step' => 8]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 8: <?= $step8->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_8_completed) && $user_step_details->step_8_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                        <?php if (isset($user_step_details->step_8_complete_date) && $user_step_details->step_8_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_8_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step8->description ?>
                </div>

                <div class="step-info-box"> 
                    <div class="project-view">
                        <div class="investment2">
                            <h4>A: DEPOSIT BANK WIRE CONFIRMATION SCAN :</h4>
                            <p>Dores amcorper ultricies nisi. Nam egetm rhoncus, lorum so
                                Maecenas tempus, tellus eget condi urabitur ullamcorper
                                ultricies nisi lorum lipsum sores.</p>

                            <div class="proceedl">
                                <?php $form8 = ActiveForm::begin(); ?>
                                <?php if (isset($step8_data->user_bank_wire_confirmation_scan) && $step8_data->user_bank_wire_confirmation_scan != '') { ?>
                                    <a class="step-8-uploaded">  BANK WIRE CONFIRMATION SCAN : UPLOADED  </a>
                                    <div class="step-8-date">
                                        <span class="modified-date">on:    November 1, 2017 </span>
                                    </div>
                                    <a class="step-8-uploaded-download" href="<?= Yii::$app->homeUrl?>uploads/step8/<?= Yii::$app->user->identity->id?>/admin/<?=$step8_data->user_bank_wire_confirmation_scan?>" target="_blank">DOWANLOAD BANK WIRE CONFIRMATION SCAN</a>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $form8->field($step8_data, 'user_bank_wire_confirmation_scan')->fileInput() ?>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success" style="margin-top: 15px" name="bank_wire_confirmation_scan">Upload</button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="investment2">
                            <h4>B: BANK STATEMENT DEPOSIT LOG:</h4>
                            <p>Dores amcorper ultricies nisi. Nam egetm rhoncus, lorum so
                                Maecenas tempus, tellus eget condi urabitur ullamcorper
                                ultricies nisi lorum lipsum sores.</p>

                            <div class="proceedl">

                                <?php if (isset($step8_data->user_bank_statment_log) && $step8_data->user_bank_statment_log != '') { ?>
                                    <a class="step-8-uploaded"> BANK STATEMENT LOG : UPLOADED </a>
                                    <div class="step-8-date">
                                        <span class="modified-date">on:    November 1, 2017 </span>
                                    </div>
                                    <a class="step-8-uploaded-download" target="_blank" href="<?= Yii::$app->homeUrl?>uploads/step8/<?= Yii::$app->user->identity->id?>/admin/<?=$step8_data->user_bank_statment_log?>">DOWANLOAD BANK STATEMENT LOG</a>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $form8->field($step8_data, 'user_bank_statment_log')->fileInput() ?>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-success" style="margin-top: 15px" name="user_bank_statment_log">Upload</button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
