<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
?>
<!--<h1>/dashboard/index</h1>-->



<div class="page-header">
        <h3>Master Checklist</h3>
</div>
<div class="row">
        <div class="col-md-4 pad-right-0">
                <div class="check-list-box">
                        <?= StepsWidget::widget(['step' => 3]) ?>
                </div>
        </div>
        <div class="col-md-8 pad-left-0">
                <div class="step-content">
                        <div class="step-head">
                                <div class="step-heading">
                                        <h5 class="step-title">Step 3: <?= $step3->page_title ?></h5>
                                        <ul>
                                                <li><i class="fa fa-check"></i> Complete</li>
                                                <?php if (isset($user_step_details->step_3_complete_date) && $user_step_details->step_3_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_3_complete_date)) ?></li><?php } ?>
                                        </ul>
                                </div>
                        </div>
                        <div class="step-body">
                                <div class="step-description">
                                        <?= $step3->description ?>
                                </div>

                                <div class="step-projects">
                                        <?php $form = ActiveForm::begin(['id' => 'step3-form']); ?>
                                        <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                        <div class="sa-inp-gp">
                                                                <label style="visibility: hidden;display: block;">Employee</label>
                                                                <input type="radio" id="radio1" name="employee_type" value="3"/>
                                                                <label for="radio1">Salaried Employee</label>

                                                                <input type="radio" id="radio2" name="employee_type" value="4"/>
                                                                <label for="radio2">Self Employee</label>

                                                        </div>
                                                </div>

                                                <div class="col-sm-12 col-xs-12">
                                                        <input type="checkbox" name="loan" value="5"> Taking a secured loan
                                                </div>

                                                <div class="col-sm-12 col-xs-12">
                                                        <input type="checkbox" name="sale_of_property" value="6"> Sale of property
                                                </div>

                                                <div class="col-sm-12 col-xs-12">
                                                        <input type="checkbox" name="gufts" value="7"> Gifts
                                                </div>

                                                <div class="col-sm-12 col-xs-12">
                                                        <input type="submit" name="questionnaire_submit" class="btn btn-primary">
                                                </div>
                                        </div>
                                        <?php ActiveForm::end(); ?>

                                </div>


                        </div>
                </div>
        </div>
</div>

