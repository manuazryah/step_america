<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Header';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">
                <?= common\components\UserTabWidget::widget(['step' => 2]) ?>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'marital_status')->dropDownList(['1' => 'Unmarried', '2' => 'Married', '3' => 'Widower']) ?>

                <?= $form->field($model, 'currently')->dropDownList(['1' => 'Unmarried', '2' => 'Married', '3' => 'Widower']) ?>

                <?= $form->field($model, 'no_of_marriages')->textInput() ?>

                <?= $form->field($model, 'spouse_1_first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_1_middle_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_1_last_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_1_dob')->textInput() ?>

                <?= $form->field($model, 'spouse_1_state')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_1_country')->textInput() ?>

                <?= $form->field($model, 'spouse_2_first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_2_middle_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_2_last_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_2_dob')->textInput() ?>

                <?= $form->field($model, 'spouse_2_state')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'spouse_2_country')->textInput() ?>

                <?= $form->field($model, 'marriage_date')->textInput() ?>

                <?= $form->field($model, 'state_of_marriage')->textInput() ?>

                <?= $form->field($model, 'country_of_marriage')->textInput() ?>

                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'maiden_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'dob')->textInput() ?>

                <?= $form->field($model, 'state_of_birth')->textInput() ?>

                <?= $form->field($model, 'country_of_birth')->textInput() ?>

                <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'passport_issuance_company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'passport_issuance_date')->textInput() ?>

                <?= $form->field($model, 'passport_expiration_date')->textInput() ?>

                <?= $form->field($model, 'spouse_accompany')->textInput() ?>

                <?= $form->field($model, 'country_of_citizenship')->textInput(['maxlength' => true]) ?>

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

