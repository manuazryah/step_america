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
            <?= StepsWidget::widget(['step' => 4]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 4: <?= $step4->page_title ?></h5>
                    <ul>
                        <li><i class="fa fa-check"></i> Complete</li>
                        <li>Date: Feb 22, 2018</li>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step4->description ?>
                </div>
                <div class="step-projects">
                    <?php foreach ($projects as $value) { ?>
                        <h4 class="project-title"><?= $value->project_title ?></h4>
                        <img src="<?= Yii::$app->homeUrl ?>uploads/step4/<?= $value->id ?>.<?= $value->image ?>">
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
