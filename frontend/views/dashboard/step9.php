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
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step9->description ?>
                </div>

                <div class="six-portal no-pad-btm">
                    <h5>Initial Legal Wire Payment Instuctions</h5>
                    <h5>A: Debit Account Holder:</h5>
                    <p>Provide the following from your financial institution</p>
                    <form name="transfer_of_capital" id="transfer_of_capital">
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group portal-form">
                            <label for="inputEmail" class="portal-text">Full Name:</label>
                            fdfd
                        </div>
                        <div class="form-group portal-form">
                            <label for="inputPassword" class="portal-text">Bank Name:</label>
                            Bank Name
                        </div>
                        <div class="form-group portal-form">
                            <label for="inputPassword" class="portal-text">Bank Institution#:</label>
                            251
                        </div>
                        <div class="form-group portal-form">
                            <label for="inputPassword" class="portal-text">Transit#:</label>
                            012
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
