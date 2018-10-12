<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Childrens details';
//$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">
                <?= common\components\UserTabWidget::widget(['step' => 3]) ?>
                <?php $form = ActiveForm::begin(['action'=>'aasdsad']); ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="header-create">
                            <div class="header-form form-inline">
                                <div class="row row-padng-top">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'last_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'middle_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'first_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'date_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_number[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_company[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_date[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_expiration_date[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_citizenship[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'currently_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'applying_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_date[]')->textInput()->label('If yes when was adoption finalised') ?>
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="header-create">
                            <div class="header-form form-inline">
                                <div class="row row-padng-top">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'last_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'middle_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'first_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'date_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_number[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_company[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_date[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_expiration_date[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_citizenship[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'currently_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'applying_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_date[]')->textInput()->label('If yes when was adoption finalised') ?>
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="header-create">
                            <div class="header-form form-inline">
                                <div class="row row-padng-top">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'last_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'middle_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'first_name[]')->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'date_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_birth[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_number[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_company[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_issuance_date[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'passport_expiration_date[]')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'country_of_citizenship[]')->textInput() ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'currently_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'applying_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_status[]')->dropDownList(['1' => 'Yes', '2' => 'No']) ?>
                                    </div>
                                    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <?= $form->field($model, 'adopted_date[]')->textInput()->label('If yes when was adoption finalised') ?>
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <div class='col-md-4 col-sm-6 col-xs-12'>
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save Declaration', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; ']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <div class="col-md-12">

    </div>
</div>





