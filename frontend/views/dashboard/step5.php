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
                    <h5 class="step-title">Step 5: <?= $step5->page_title ?></h5>
                    <ul>
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step5->description ?>
                </div>
            </div>
        </div>
    </div>
</div>
