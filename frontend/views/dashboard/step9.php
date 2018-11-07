<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
?>
<!--<h1>/dashboard/index</h1>-->



<div class="page-header">
    <h3>Master Checklist</h3>
</div>
<div class="row">
    <div class="col-md-4 pad-right-0">
        <div class="check-list-box">
            <?= StepsWidget::widget(['step' => 9]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 9: <?= $step9->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_9_completed) && $user_step_details->step_9_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                        <?php if (isset($user_step_details->step_9_complete_date) && $user_step_details->step_9_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_9_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step9->description ?>
                </div>

                <div class="step-info-box">
                    <h5>Initial Legal Wire Payment Instuctions</h5>
                    <div class="agre1">
                        <div class="america">
                            <div class="on-myA"><p><strong>A: Debit Account Holder:</strong></p></div>
                            <div class="on-myA1"><p>Provide the following from your financial institution</p></div>
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <div class="on-my"><p>Full Name: </p></div>
                                <div class="on-my"><p>Bank Name:  </p></div>
                                <div class="on-my"><p>Bank Institution#:  </p></div>
                                <div class="on-my"><p>Transit#: </p></div>
                                <div class="on-my"><p>I-BAN / Swift Code:  </p></div>
                                <div class="on-my"><p>Bank Account#:  </p></div>
                                <div class="on-my"><p>Bank Address:  </p></div>


                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="off-my"><p><?= Yii::$app->user->identity->name?></p></div>
                                <div class="off-my"><p><?=$step9_data->bank_name?></p></div>
                                <div class="off-my"><p><?=$step9_data->bank_institution?> </p></div>
                                <div class="off-my"><p><?=$step9_data->transit?> </p></div>
                                <div class="off-my"><p><?=$step9_data->swift_code?></p></div>
                                <div class="off-my"><p><?=$step9_data->bank_account?></p></div>
                                <div class="off-my"><p><?=$step9_data->bank_address?></p></div>
                            </div>

                            <div class="on-myA"><p><strong>B: Beneficiary Account Holder:</strong></p></div>
                            <div class="on-myA1"><p>Insert the following financial credentials for the wire transfer</p></div>
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <div class="on-my"><p>Company Name: </p></div>
                                <div class="on-my"><p>Bank Name:  </p></div>
                                <div class="on-my"><p>Bank Institution#:  </p></div>
                                <div class="on-my"><p>Transit#: </p></div>
                                <div class="on-my"><p>I-BAN / Swift Code:  </p></div>
                                <div class="on-my"><p>Bank Account#:  </p></div>
                                <div class="on-my"><p>Bank Address:  </p></div>


                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="off-my"><p><?=$step9_data->company_name?></p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_bank_name?></p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_bank_institution?> </p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_transit?> </p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_swift_code?></p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_bank_account?></p></div>
                                <div class="off-my"><p><?=$step9_data->beneficiary_bank_address?></p></div>
                            </div>

                            <div class="on-myA"><p><strong>C: Wire Transfer Amount:</strong></p></div>
                            <div class="on-myA1"><p>Insert the following financial credentials for the wire transfer</p></div>
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <div class="on-my"><p>Invoice#: </p></div>
                                <div class="on-my"><p>Invoice Date:  </p></div>
                                <div class="on-my"><p>Currency:  </p></div>
                                <div class="on-my"><p>Exchange Rate: </p></div>
                                <div class="on-my"><p>Transfer Amount:  </p></div>


                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="off-my"><p><?=$step9_data->invoice?></p></div>
                                <div class="off-my"><p><?=$step9_data->currency?></p></div>
                                <div class="off-my"><p><?=$step9_data->exchange_rate?> </p></div>
                                <div class="off-my"><p><?=$step9_data->transfer_amount?> </p></div>
                                <div class="off-my"><p><?=$step9_data->reference_number?></p></div>
                            </div>

                            <div class="date-download">
                                <a class="download-link" href="<?= Yii::$app->homeUrl?>uploads/step9/<?= Yii::$app->user->identity->id?>/<?=$step9_data->id?>.<?=$step9_data->invoice_file?>" target="_blank">DOWNLOAD INVOICE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
