<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?= $form->field($model, 'drafted_on')->textInput() ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?= $form->field($model, 'drafted_by')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?= $form->field($model, 'retainer_contract_agreement')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?= $form->field($model, 'contract_agreement_drafted_on')->textInput() ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'contract_agreement_drafted_by')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?= $form->field($model, 'contract_agreement_modified_on')->textInput() ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?= $form->field($model, 'contract_agreement_modified_by')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?= $form->field($model, 'dhp_agreement')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'questionaire_drafted_on')->textInput() ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'questionaire_drafted_by')->textInput(['maxlength' => true]) ?>

        </div>
    </div>


    <div class="form-group action-btn-right">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
