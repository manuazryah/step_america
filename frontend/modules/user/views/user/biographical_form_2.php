<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Country;

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
                                <div class="card card-white">
                                        <?= common\components\UserTabWidget::widget(['step' => 1]) ?>
                                        <?php $form = ActiveForm::begin(); ?>

                                        <div class="card-header bg-blue">
                                                <h3>Biographical infomation</h3>
                                        </div>
                                        <div class="card-body">
                                                <div class="row">
                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-8 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'other_name')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <!--                                                <div class="sa-inp-gp">
                                                                                                                        <label style="visibility: hidden;display: block;">Gender</label>
                                                                                                                        <input type="radio" id="radio1" name="radio-category" checked/>
                                                                                                                        <label for="radio1">Male</label>

                                                                                                                        <input type="radio" id="radio2" name="radio-category" />
                                                                                                                        <label for="radio2">Female</label>

                                                                                                                </div>-->

                                                                <div class="sa-inp-gp">
                                                                        <label style="visibility: hidden;display: block;">Gender</label>
                                                                        <?=
                                                                        $form->field($model, 'gender')->radioList([1 => 'Male', 2 => 'Female'], ['item' => function($index, $label, $name, $checked, $value) {
                                                                                    $return = '<input  type="radio" name="' . $name . '" value="' . $value . '" tabindex="3">';
                                                                                    $return .= '<label for="radio1">' . ucwords($label) . '</label>';
                                                                                    return $return;
                                                                            }])->label(false);
                                                                        ?>
                                                                </div>
                                                        </div>

                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'dob')->textInput() ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'state_of_birth')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'country_of_birth')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                                                </div>
                                                        </div>
                                                </div>



                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'country_of_citizenship')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>

                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'other_country_citizenship')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'date_of_last_entry')->textInput() ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'form_number')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'alien_reg_number')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'immigration_status')->textInput() ?>

                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'immigration_expiration_date')->textInput() ?>
                                                                </div>
                                                        </div>
                                                </div>



                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'issuance_country')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                                                </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'issuance_date')->textInput() ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'expiration_date')->textInput() ?>
                                                                </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'permanent_resident')->textInput() ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'family_members')->textInput() ?>
                                                                </div>
                                                        </div>
                                                </div>





                                                <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'expiration_on_form')->textInput(['maxlength' => true]) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-6 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'visa_number')->textInput() ?>
                                                                </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'visa_issuance_date')->textInput() ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'visa_issuance_country')->dropDownList(ArrayHelper::map(Country::find()->where(['status' => '1'])->all(), 'id', 'name'), ['prompt' => 'select']) ?>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-4 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'issued_any_visa')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                                                </div>
                                                        </div>
                                                </div>




                                                <div class="row">


                                                        <div class="col-sm-12 col-xs-12">
                                                                <div class="sa-inp-gp">
                                                                        <?= $form->field($model, 'explain_visa_details')->textarea(['rows' => 6]) ?>
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


