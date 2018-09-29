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
                        <h5 class="step-head">Step 4: <?= $step4->page_title ?></h5>
                        <p> <?= $step4->description ?></p>
                </div>


                <div>
                        <?php foreach ($projects as $value) { ?>
                                <h4><?= $value->project_title ?></h4>
                                <img src="<?= Yii::$app->homeUrl ?>uploads/step4/<?= $value->id ?>.<?= $value->image ?>">
                        <?php }
                        ?>
                </div>

        </div>



</div>
