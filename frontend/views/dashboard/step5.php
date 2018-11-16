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
            <?= StepsWidget::widget(['step' => 5]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 5: <?= $step5->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_5_completed) && $user_step_details->step_5_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                        <?php if (isset($user_step_details->step_5_complete_date) && $user_step_details->step_5_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_5_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step5->description ?>
                </div>

                <div class="step-projects">

                    <h4 class="project-title">About <?= $project->project_title ?> Development Project</h4>
                    <img src="<?= Yii::$app->homeUrl ?>uploads/step4/<?= $project->id ?>.<?= $project->image ?>">
                    <a class="btn btn-primary select-project" href="<?= $project->microsite_page ?>" target="_blank">MICROSITE</a>
                </div>

                <div class="project-signin">
                    <?php foreach ($project_documents as $documents) { ?>
                        <div class="project-doc">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="skyrise">
                                    <h5><strong><?= $documents->title ?></strong></h5>
                                    <p><?= $documents->author ?><br>
                                        Prepared on: <?= date('F d,Y', strtotime($documents->date)) ?></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                <div class="view-my viewedoviewedo">
                                    <a class="btn viewed viewed-project" id="<?= $documents->id ?>" target="_blank" href="<?= Yii::$app->homeUrl ?>uploads/step5/<?= $documents->id ?>/<?= $documents->doc ?>">View</a>
                                </div>
                            </div>

                            <div id="demo_<?= $documents->id ?>" class="test"  style="display:none">
                                <i class="fa fa-check" aria-hidden="true"></i> 
                                <label><input type="checkbox" class="step5-project-acknowledgement" value="<?= $documents->id ?>"></label> <div class="dec-text">Yes. I,  have read ALL pages of the above document to the fullest extent of my understanding of explanations and detailing of my project investment I, <?= Yii::$app->user->identity->name ?> will hold the liability of misinterpretations pertaining to the document above upon proceeding to the next step of <strong>'5. Project Documents Review '.</strong> </div>
                            </div>

                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .test {
        padding: 24px 10px 12px 12px;
        text-align: left;
        font-size: 14px;
        float: left;
        width: 100%;
        height: auto !important;
        background-color: #EBEFEF !important;
        margin-bottom: 5px;
        border-left: 4px solid #2c6278;
        position: relative;
        top: -9px;
        left: -4px;
        line-height: 25px;
    }
    .fa.fa-check {
        background-color: #26afb3;
        border-radius: 22px;
        padding: 4px 4px;
        color: #ffffff;
        display: none;
    }
    .dec-text {
        width: 95%;
        float: right;
    }
</style>


<script>
    $(document).ready(function () {
        $('.viewed-project').click(function () {
            var id = $(this).attr('id');
            $("#demo_" + id).css({"display": "block"});
        });

        $('.step5-project-acknowledgement').click(function () {
            var step_document = $(this).val();
            $.ajax({
                                type: 'POST',
                                cache: false,
                                data: {step_document: step_document},
                                url: '<?= Yii::$app->homeUrl ?>dashboard/step5-documents',
                                success: function (data) {

                                }
                        });
        });
    });
</script>
