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
                        <h5 class="step-head">Step 6: <?= $step6->page_title ?></h5>
                        <p> <?= $step6->description ?></p>
                </div>

                <?php foreach ($project_signing as $project_sign) { ?>
                        <div style="border: 1px solid #eee;padding-left: 10px;">
                                <h5><strong><?= $project_sign->title ?></strong></h5>
                                <h5><?= $project_sign->author ?></h5>
                                <h5>Prepared On: <?= date('F d,Y', strtotime($project_sign->date)) ?></h5>
                                <?php if (isset($project_sign->upload_doc)) { ?>
                                        <a href="<?= Yii::$app->homeUrl ?>uploads/step6/<?= $project_sign->id ?>/<?= $project_sign->upload_doc ?>" target="_blank"><?= $project_sign->upload_doc ?></a>
                                <?php } ?>
                        </div>
                <?php } ?>


        </div>



</div>
