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
                    <h5 class="step-title">Step 1: <?= $step1->page_title ?></h5>
                    <ul>
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="title">
                    Kindly fill download the Agreement contracts for Step America and DHP, sign and upload back to us.
                </div>
                <div class="step-info">
                    <div class="step-info-box">
                        <h5 class="title">STEP America Retainer Contract Agreement</h5>
                        <p class="info">Drafted on: <?= date('F d,Y', strtotime($step1->drafted_on)) ?></p>
                        <p class="info">Drafted by: <?= $step1->contract_agreement_drafted_by ?></p>
                        <div class="download">
                            <a class="download-link" href="<?= Yii::$app->homeUrl ?>uploads/step1/<?= $step1->retainer_contract_agreement ?>" target="_blank">DOWNLOADED SIGNED</a>
                            <a class="date-link">On: Feb 27 , 2017</a>
                        </div>

                    </div>
                    <div class="step-info-box">
                        <h5 class="title">DHP Retainer Contract Agreement</h5>
                        <p class="info">Drafted on: <?= date('F d,Y', strtotime($step1->contract_agreement_drafted_on)) ?></p>
                        <p class="info">Drafted by: <?= $step1->contract_agreement_drafted_by ?></p>
                        <p class="info">Modified on: <?= date('F d,Y', strtotime($step1->contract_agreement_modified_on)) ?></p>
                        <p class="info">Modified by: <?= $step1->contract_agreement_modified_by ?></p>
                        <div class="download">
                            <a class="download-link" href="<?= Yii::$app->homeUrl ?>uploads/step1/<?= $step1->dhp_agreement ?>" target="_blank">DOWNLOADED SIGNED</a>
                            <a class="date-link">On: Feb 27 , 2017</a>
                        </div>

                    </div>
                    <div class="step-info-box">
                        <h5 class="title">STEP America Questionaire Form</h5>
                        <p class="info">Drafted on: <?= date('F d,Y', strtotime($step1->questionaire_drafted_on)) ?></p>
                        <p class="info">Drafted by: <?= $step1->questionaire_drafted_by ?></p>
                    </div>
                    <div class="step-info-box">
                        <div class="proceed-links">
                            <?= Html::a('Proceed to form', ['/user/user/biographical'], ['class' => 'proceedform-link']) ?>
                            <a class="complete-percentage">67% Completed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
