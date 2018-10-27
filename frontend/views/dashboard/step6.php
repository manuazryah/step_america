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
            <?= StepsWidget::widget(['step' => 6]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 6: <?= $step6->page_title ?></h5>
                    <ul>
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step6->description ?>
                </div>
                <div class="project-signin">
                    <?php foreach ($project_signing as $project_sign) { ?>
                        <div class="project-doc">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="skyrise">
                                    <h5><strong><?= $project_sign->title ?></strong></h5>
                                    <p><?= $project_sign->author ?><br>
                                        Prepared on: <?= date('F d,Y', strtotime($project_sign->date)) ?></p>
                                    <?php // if (isset($project_sign->upload_doc)) { ?>
                                        <!--<a href="<?= Yii::$app->homeUrl ?>uploads/step6/<?= $project_sign->id ?>/<?= $project_sign->upload_doc ?>" target="_blank"><?= $project_sign->upload_doc ?></a>-->
                                    <?php // } ?>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="view-my viewedoviewedo">
                                    <a target="_blank" href="<?= Yii::$app->homeUrl ?>uploads/step6/<?= $project_sign->id ?>/<?= $project_sign->upload_doc ?>" class="btn viewed">Viewed</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
