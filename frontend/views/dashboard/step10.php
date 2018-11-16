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
            <?= StepsWidget::widget(['step' => 10]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 10: <?= $step10->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_10_completed) && $user_step_details->step_10_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                        <?php if (isset($user_step_details->step_10_complete_date) && $user_step_details->step_10_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_10_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step10->description ?>
                </div>
                <div>
                    <a class="step-8-uploaded-download" href="<?= Yii::$app->homeUrl ?>user/user/biographical">VIEW APPLICATION DRAFT</a>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                <br>
                <?php if ($user_steps->acknowledgement != 1) { ?>
                    <div class="step-10-ack-section">
                        <label><input type="checkbox" class="step10-acknowledgement" id="step10-acknowledgement"></label> 
                        <div class="dec-text">Yes. I, <?= Yii::$app->user->identity->name ?> have read final draft of the application to the fullest extent of my understanding of explanations and detailing of my project investments. I, James Smith will hold liability of any misinterpretations pertaining to the result of this filing. </div>
                        <a class="step-10-ack-btn">I ACKNOWLEDGE</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $('.step-10-ack-btn').click(function (e) {
            e.preventDefault();
            if ($("#step10-acknowledgement").prop('checked') == true) {
                var flag = 1;
            } else {
                var flag = 0;
            }
            if (flag == 1) {
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '<?= Yii::$app->homeUrl ?>dashboard/step10-acknowledgement',
                    success: function (data) {
                        alert('Acknowledgement submitted successfully');
                        location.reload();
                    }
                });
            } else {
                alert('Please accept the acknowledgement');
            }
        });
    });
</script>