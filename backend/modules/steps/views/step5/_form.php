<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step5 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step5-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'page_title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

        </div>
    </div>

    <div class="form-group action-btn-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>
    <div>
        <button type="button" id='hideshow' class="btn btn-block btn-warning">Add New Form</button>
    </div>
    <div id='content' style="display: none">
        <?php $form1 = ActiveForm::begin(); ?>
        <div class="row">
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form1->field($model_form, 'title')->textInput(['maxlength' => true]) ?>

            </div>
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form1->field($model_form, 'author')->textInput(['maxlength' => true]) ?>

            </div>
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form1->field($model_form, 'date')->textInput() ?>

            </div>
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form1->field($model_form, 'project')->textInput() ?>

            </div>
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form1->field($model_form, 'doc')->textInput(['maxlength' => true]) ?>

            </div>    </div>

        <div class="form-group action-btn-right">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>


        <?php ActiveForm::end(); ?>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('#hideshow').on('click', function (event) {
            jQuery('#content').toggle('show');
        });
    });
</script>