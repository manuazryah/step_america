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
            <?= StepsWidget::widget() ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 7: <?= $step7->page_title ?></h5>
                    <ul>
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step7->description ?>
                </div>
                <div class="six-portal no-pad-btm">
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
                <div class="six-portal no-pad-btm">
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
                <div class="six-portal">
                    <h5>C. WIRING DEPOSIT DETAILS:</h5>
                    <div class="form-group portal-form">

                        <label class="portal-text">Deposited on:</label><br>
                        <input type="text" name="deposited_on" class="form-control" id="deposited_on" value="">
                        <br>


                    </div>
                    <div class="form-group portal-form">

                        <label class="portal-text">Deposited Amount:</label><br>
                        <input type="text" name="deposited_amount" class="form-control" id="deposited_amount" value="">
                        <br>

                    </div>


                    <div class="form-group portal-form">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding-left">
                            <label class="portal-text">Currency:</label><br>
                            <input type="text" name="currency" class="form-control" id="currency" value="">
                            <br>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding-right">

                            <label for="inputPassword" class="portal-text">Confirmation Ref ID</label><br>
                            <input type="text" name="confirmation_ref" class="form-control" id="confirmation_ref" value="">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
