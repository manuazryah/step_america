<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
//use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Biographical Details';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">
                <?= common\components\UserTabWidget::widget(['step' => 1]) ?>
                <?php $form = ActiveForm::begin(); ?>
                

                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'other_name')->textInput(['maxlength' => true]) ?>
               
                <?= $form->field($model, 'gender')->dropDownList(['1' => 'Male', '2' => 'Female']) ?>



                <?= $form->field($model, 'dob')->textInput() ?>

                <?= $form->field($model, 'state_of_birth')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'country_of_birth')->textInput() ?>

                <?= $form->field($model, 'country_of_citizenship')->textInput() ?>

                <?= $form->field($model, 'other_country_citizenship')->textInput() ?>

                <?= $form->field($model, 'date_of_last_entry')->textInput() ?>

                <?= $form->field($model, 'form_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'alien_reg_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'immigration_status')->textInput() ?>

                <?= $form->field($model, 'immigration_expiration_date')->textInput() ?>

                <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'issuance_country')->textInput() ?>

                <?= $form->field($model, 'issuance_date')->textInput() ?>

                <?= $form->field($model, 'expiration_date')->textInput() ?>

                <?= $form->field($model, 'permanent_resident')->textInput() ?>

                <?= $form->field($model, 'family_members')->textInput() ?>

                <?= $form->field($model, 'expiration_on_form')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'visa_number')->textInput() ?>

                <?= $form->field($model, 'visa_issuance_date')->textInput() ?>

                <?= $form->field($model, 'visa_issuance_country')->textInput() ?>

                <?= $form->field($model, 'issued_any_visa')->textInput() ?>

                <?= $form->field($model, 'explain_visa_details')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save as Draft', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

