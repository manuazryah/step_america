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
                        <h5 class="step-head">Step 1: <?= $step1->page_title ?>               </h5>
                        <p> Kindly fill download the Agreement contracts for Step America and DHP, sign and upload back to us.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </p>
                </div>

                <div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5>STEP America Retainer Contract Agreement</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted on:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= date('F d,Y', strtotime($step1->drafted_on)) ?> </b></h5>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted by:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= $step1->contract_agreement_drafted_by ?> </b></h5>
                        </div>

                        <div class="download">
                                <a href="<?= Yii::$app->homeUrl ?>uploads/step1/<?= $step1->retainer_contract_agreement ?>" target="_blank"><strong>DOWNLOADED SIGNED</strong></a>
                        </div>

                </div>

                <div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5>DHP Retainer Contract Agreement</h5>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted on:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= date('F d,Y', strtotime($step1->contract_agreement_drafted_on)) ?> </b></h5>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted by:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= $step1->contract_agreement_drafted_by ?> </b></h5>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Modified on:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= date('F d,Y', strtotime($step1->contract_agreement_modified_on)) ?> </b></h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Modified by:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= $step1->contract_agreement_modified_by ?> </b></h5>
                        </div>

                        <div class="download">
                                <a href="<?= Yii::$app->homeUrl ?>uploads/step1/<?= $step1->dhp_agreement ?>" target="_blank"><strong>DOWNLOADED SIGNED</strong></a>
                        </div>

                </div>


                <div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5>STEP America Questionaire Form</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted on:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= date('F d,Y', strtotime($step1->questionaire_drafted_on)) ?> </b></h5>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5>Drafted by:</h5>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <h5><b><?= $step1->questionaire_drafted_by ?> </b></h5>
                        </div>
                </div>


        </div>



</div>
