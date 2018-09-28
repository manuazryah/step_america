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
            <h5 class="step-head">Step 9: <?= $step9->page_title ?></h5>
            <p> <?= $step9->description ?></p>
        </div>

    </div>



</div>
