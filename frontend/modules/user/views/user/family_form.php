<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Country;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Step America';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
    <h3>Step 1: DHP Retainer and Questionaire</h3>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">

                <div class="card card-white">
                    <?= common\components\UserTabWidget::widget(['step' => 2]) ?>
                    <?php $form = ActiveForm::begin(); ?>

                    <div class="card-header bg-blue">
                        <h3>Family infomation</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'marital_status')->dropDownList(['1' => 'Unmarried', '2' => 'Married', '3' => 'Widower']) ?>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'no_of_marriages')->textInput() ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Former Spouse 1 Information</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_1_last_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_1_middle_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_1_first_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?php
                                    if (!$model->isNewRecord) {
                                        $model->spouse_1_dob = date('d-m-Y', strtotime($model->spouse_1_dob));
                                    } else {
                                        $model->spouse_1_dob = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'spouse_1_dob',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_1_state')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_1_country')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Former Spouse 2 Information</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_2_last_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_2_middle_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_2_first_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    
                                    <?php
                                    if (!$model->isNewRecord) {
                                        $model->spouse_2_dob = date('d-m-Y', strtotime($model->spouse_2_dob));
                                    } else {
                                        $model->spouse_2_dob = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'spouse_2_dob',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_2_state')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_2_country')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>

                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Current Spouse's Information</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                     <?php
                                    if (!$model->isNewRecord) {
                                        $model->marriage_date = date('d-m-Y', strtotime($model->marriage_date));
                                    } else {
                                        $model->marriage_date = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'marriage_date',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'state_of_marriage')->textInput() ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'country_of_marriage')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'maiden_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                     <?php
                                    if (!$model->isNewRecord) {
                                        $model->dob = date('d-m-Y', strtotime($model->dob));
                                    } else {
                                        $model->dob = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'dob',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'state_of_birth')->textInput() ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'country_of_birth')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'passport_issuance_company')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?php
                                    if (!$model->isNewRecord) {
                                        $model->passport_issuance_date = date('d-m-Y', strtotime($model->passport_issuance_date));
                                    } else {
                                        $model->passport_issuance_date = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'passport_issuance_date',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?php
                                    if (!$model->isNewRecord) {
                                        $model->passport_expiration_date = date('d-m-Y', strtotime($model->passport_expiration_date));
                                    } else {
                                        $model->passport_expiration_date = date('d-m-Y');
                                    }
                                    echo DatePicker::widget([
                                        'model' => $model,
                                        'form' => $form,
                                        'type' => DatePicker::TYPE_INPUT,
                                        'attribute' => 'passport_expiration_date',
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'dd-mm-yyyy',
                                        ]
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'spouse_accompany')->textInput() ?>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'country_of_citizenship')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>

                                </div>
                            </div>
                        </div>




                        <div class="form-group sa-action">
                            <?= Html::submitButton('Save as Draft', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


