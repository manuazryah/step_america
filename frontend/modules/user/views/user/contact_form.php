<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Country;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Header';
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
                    <?= common\components\UserTabWidget::widget(['step' => 4]) ?>
                    <?php $form = ActiveForm::begin(); ?>

                    <div class="card-header bg-blue">
                        <h3>CONTACT INFORMATION</h3>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Home Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'street_number')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'appt_number')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'country')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'zip_code')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'daytime_contact_no')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'email_1')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Foreign Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'foreign_address')->textarea(['rows' => 6]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'foreign_address_native')->textarea(['rows' => 6]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="sa-inp-gp">
                                    <label style="font-weight: bold;font-size: 14px;">Processing Information</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'deportation_proceedings')->dropDownList(['1' => 'Yes', '2' => 'No'])->label('Are you now or have you ever been in deportation proceedings in the U.S or otherwise violated a U.S. Immigration Law?') ?>

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'explain_details')->textarea(['rows' => 6]) ?>

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'worked_in_us')->dropDownList(['1' => 'Yes', '2' => 'No'])->label('Have you ever worked in the U.S. without permission?') ?>

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="sa-inp-gp">
                                    <?= $form->field($model, 'worked_explain_details')->textarea(['rows' => 6]) ?>

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
</div>
</div>
</div>

