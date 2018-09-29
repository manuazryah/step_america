<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
?>
<!--<h1>/dashboard/index</h1>-->



<div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 no-padding left-content">
                <?= StepsWidget::widget() ?>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div>
                        <h5 class="step-head">Step 7: <?= $step7->page_title ?></h5>
                        <p> <?= $step7->description ?></p>
                </div>

                <div>
                        <h5>A. IN-BOUND DEPOSIT WIRING INFORMATION:</h5>

                        <h6>Escrow Agent:</h6>
                        <h6><strong><?= $step7->escrow_agent ?></strong></h6>

                        <h6>LLC:</h6>
                        <h6><strong><?= $step7->llc ?></strong></h6>

                        <h6>Administrative Agent:</h6>
                        <h6><strong><?= $step7->administrative_agent ?></strong></h6>
                </div>

                <div>
                        <h5>B. BENEFICARY BANK ACCOUNT INFORMATION:</h5>

                        <h6>Bank Name:</h6>
                        <h6><strong><?= $step7->bank_name ?></strong></h6>

                        <h6>Bank Address:</h6>
                        <h6><strong><?= $step7->bank_address ?></strong></h6>

                        <h6>Bank Institution:</h6>
                        <h6><strong><?= $step7->bank_institution ?></strong></h6>

                        <h6>Bank Branch:</h6>
                        <h6><strong><?= $step7->bank_branch ?></strong></h6>

                        <h6>Bank Account:</h6>
                        <h6><strong><?= $step7->bank_account ?></strong></h6>

                        <h6>Swift ID:</h6>
                        <h6><strong><?= $step7->swift_id ?></strong></h6>

                        <h6>Contact Name:</h6>
                        <h6><strong><?= $step7->contact_name ?></strong></h6>

                        <h6>Contact:</h6>
                        <h6><strong><?= $step7->contact ?></strong></h6>

                        <h6>ABA:</h6>
                        <h6><strong><?= $step7->ABA ?></strong></h6>
                </div>

        </div>



</div>
