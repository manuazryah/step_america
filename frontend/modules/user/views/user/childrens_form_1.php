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
                <?php if (empty($children_model)) { ?>
                    <?php $form = ActiveForm::begin(); ?>
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
                <?php } else { ?>
                    <?php $form = ActiveForm::begin(); ?>
                    <?php foreach ($children_model as $children) { ?>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="header-create">
                                    <div class="header-form form-inline">
                                        <div class="row row-padng-top">
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-last_name">
                                                    <label class="control-label" for="userchildrensinfo-last_name">Last Name</label>
                                                    <input type="text" id="userchildrensinfo-last_name" class="form-control" name="UserChildrensInfo[last_name][<?= $children->id?>]" maxlength="200">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-middle_name">
                                                    <label class="control-label" for="userchildrensinfo-middle_name">Middle Name</label>
                                                    <input type="text" id="userchildrensinfo-middle_name" class="form-control" name="UserChildrensInfo[middle_name][<?= $children->id?>]" maxlength="200">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-first_name">
                                                    <label class="control-label" for="userchildrensinfo-first_name">First Name</label>
                                                    <input type="text" id="userchildrensinfo-first_name" class="form-control" name="UserChildrensInfo[first_name][<?= $children->id?>]" maxlength="200">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-date_of_birth">
                                                    <label class="control-label" for="userchildrensinfo-date_of_birth">Date Of Birth</label>
                                                    <input type="text" id="userchildrensinfo-date_of_birth" class="form-control" name="UserChildrensInfo[date_of_birth][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-country_of_birth">
                                                    <label class="control-label" for="userchildrensinfo-country_of_birth">Country Of Birth</label>
                                                    <input type="text" id="userchildrensinfo-country_of_birth" class="form-control" name="UserChildrensInfo[country_of_birth][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-passport_number">
                                                    <label class="control-label" for="userchildrensinfo-passport_number">Passport Number</label>
                                                    <input type="text" id="userchildrensinfo-passport_number" class="form-control" name="UserChildrensInfo[passport_number][<?= $children->id?>]" maxlength="200">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-passport_issuance_company">
                                                    <label class="control-label" for="userchildrensinfo-passport_issuance_company">Passport Issuance Company</label>
                                                    <input type="text" id="userchildrensinfo-passport_issuance_company" class="form-control" name="UserChildrensInfo[passport_issuance_company][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-passport_issuance_date">
                                                    <label class="control-label" for="userchildrensinfo-passport_issuance_date">Passport Issuance Date</label>
                                                    <input type="text" id="userchildrensinfo-passport_issuance_date" class="form-control" name="UserChildrensInfo[passport_issuance_date][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-passport_expiration_date">
                                                    <label class="control-label" for="userchildrensinfo-passport_expiration_date">Passport Expiration Date</label>
                                                    <input type="text" id="userchildrensinfo-passport_expiration_date" class="form-control" name="UserChildrensInfo[passport_expiration_date][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-country_of_citizenship">
                                                    <label class="control-label" for="userchildrensinfo-country_of_citizenship">Country Of Citizenship</label>
                                                    <input type="text" id="userchildrensinfo-country_of_citizenship" class="form-control" name="UserChildrensInfo[country_of_citizenship][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-currently_status">
                                                    <label class="control-label" for="userchildrensinfo-currently_status">Currently Status</label>
                                                    <select id="userchildrensinfo-currently_status" class="form-control" name="UserChildrensInfo[currently_status][<?= $children->id?>]">
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-applying_status">
                                                    <label class="control-label" for="userchildrensinfo-applying_status">Applying Status</label>
                                                    <select id="userchildrensinfo-applying_status" class="form-control" name="UserChildrensInfo[applying_status][<?= $children->id?>]">
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>                                        </div>

                                        </div>
                                        <div class="row ">

                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-adopted_status">
                                                    <label class="control-label" for="userchildrensinfo-adopted_status">Adopted Status</label>
                                                    <select id="userchildrensinfo-adopted_status" class="form-control" name="UserChildrensInfo[adopted_status][<?= $children->id?>]">
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>                                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 left_padd">
                                                <div class="form-group field-userchildrensinfo-adopted_date">
                                                    <label class="control-label" for="userchildrensinfo-adopted_date">If yes when was adoption finalised</label>
                                                    <input type="text" id="userchildrensinfo-adopted_date" class="form-control" name="UserChildrensInfo[adopted_date][<?= $children->id?>]">

                                                    <div class="help-block"></div>
                                                </div>                                        </div>


                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php }?>
                        <div class='col-md-4 col-sm-6 col-xs-12'>
                            <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save Declaration', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; ']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">

    </div>
</div>





