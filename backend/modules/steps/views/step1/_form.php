<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Step1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step1-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'page_title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?php
            if ($model->drafted_on == '') {
                $model->drafted_on = date('Y-m-d');
            }
            ?>
            <?=
            $form->field($model, 'drafted_on')->widget(DatePicker::classname(), [
                'type' => DatePicker::TYPE_INPUT,
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]);
            ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'drafted_by')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd form-sub_head-div'> 
            <span class="form-sub_head">STEP America Retainer Contract Agreement</span><a href="" class="file-link"></a>
        </div>
    </div>
    <div class="row">

        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?= $form->field($model, 'retainer_contract_agreement')->fileInput()->label(FALSE) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?php
            if ($model->contract_agreement_drafted_on == '') {
                $model->contract_agreement_drafted_on = date('Y-m-d');
            }
            ?>
            <?=
            $form->field($model, 'contract_agreement_drafted_on')->widget(DatePicker::classname(), [
                'type' => DatePicker::TYPE_INPUT,
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ])->label('Drafted On');
            ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'contract_agreement_drafted_by')->textInput(['maxlength' => true])->label('Drafted By') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'contract_agreement_modified_on')->textInput()->label('Modified On') ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'contract_agreement_modified_by')->textInput(['maxlength' => true])->label('Modified By') ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd form-sub_head-div'> 
            <span class="form-sub_head">DHP Retainer Contract Agreement</span><a href="" class="file-link"></a>
        </div>
    </div>
    <div class="row">

        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?= $form->field($model, 'dhp_agreement')->fileInput()->label(FALSE) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd form-sub_head-div'> 
            <span class="form-sub_head">STEP America Questionaire Form</span>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?php
            if ($model->questionaire_drafted_on == '') {
                $model->questionaire_drafted_on = date('Y-m-d');
            }
            ?>
            <?=
            $form->field($model, 'questionaire_drafted_on')->widget(DatePicker::classname(), [
                'type' => DatePicker::TYPE_INPUT,
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ])->label('Drafted On');
            ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'questionaire_drafted_by')->textInput(['maxlength' => true])->label('Drafted By') ?>

        </div>
    </div>


    <div class="form-group action-btn-right">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
