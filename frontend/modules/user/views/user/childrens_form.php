<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\helpers\ArrayHelper;
use common\models\Country;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Childrens details';
//$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$countries = Country::find()->where(['status' => 1])->all();
?>
<div class="page-header">
    <h3>Step 1: DHP Retainer and Questionaire</h3>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">
                <div class="card card-white">
                    <?= common\components\UserTabWidget::widget(['step' => 3]) ?>

                    <div class="card-header bg-blue">
                        <h3>Children infomation</h3>
                    </div>
                    <div class="card-body">
                        <?php if (empty($children_model)) { ?>
                            <?php $form = ActiveForm::begin(); ?>
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                ?>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label style="font-weight: bold;font-size: 14px;">Child <?= $i ?> Information:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Last Name</label>
                                            <input type="text" id="userchildrensinfo-last_name" class="form-control" name="UserChildrensInfo[last_name][<?= $i ?>]" maxlength="200">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Middle Name</label>
                                            <input type="text" id="userchildrensinfo-middle_name" class="form-control" name="UserChildrensInfo[middle_name][<?= $i ?>]" maxlength="200">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">First Name</label>
                                            <input type="text" id="userchildrensinfo-first_name" class="form-control" name="UserChildrensInfo[first_name][<?= $i ?>]" maxlength="200">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label  for="userchildrensinfo-date_of_birth">Date Of Birth</label>
                                            <input type="text" id="userchildrensinfo-date_of_birth" class="form-control" name="UserChildrensInfo[date_of_birth][<?= $i ?>]">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label  for="userchildrensinfo-country_of_birth">Country Of Birth</label>
                                            <select id="userchildrensinfo-country_of_birth" class="form-control" name="UserChildrensInfo[country_of_birth][<?= $i ?>]" >
                                                <option value="">Select</option>
                                                <?php
                                                if ($countries) {
                                                    foreach ($countries as $country) {
                                                        ?>
                                                        <option value="<?= $country->id ?>"><?= $country->name ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Passport Number</label>
                                            <input type="text" id="userchildrensinfo-passport_number" class="form-control" name="UserChildrensInfo[passport_number][<?= $i ?>]" maxlength="200">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_company">Passport Issuance Company</label>
                                            <input type="text" id="userchildrensinfo-passport_issuance_company" class="form-control" name="UserChildrensInfo[passport_issuance_company][<?= $i ?>]">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_date">Passport Issuance Date</label>
                                            <input type="text" id="userchildrensinfo-passport_issuance_date" class="form-control" name="UserChildrensInfo[passport_issuance_date][<?= $i ?>]">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_expiration_date">Passport Expiration Date</label>
                                            <input type="text" id="userchildrensinfo-passport_expiration_date" class="form-control" name="UserChildrensInfo[passport_expiration_date][<?= $i ?>]">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-country_of_citizenship">Country Of Citizenship</label>
                                            <select id="userchildrensinfo-country_of_citizenship" class="form-control" name="UserChildrensInfo[country_of_citizenship][<?= $i ?>]" >
                                                <option value="">Select</option>
                                                <?php
                                                if ($countries) {
                                                    foreach ($countries as $country) {
                                                        ?>
                                                        <option value="<?= $country->id ?>"><?= $country->name ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_date">Is your Child <?= $i ?> currently in the U.S.?</label>
                                            <select id="userchildrensinfo-currently_status" class="form-control" name="UserChildrensInfo[currently_status][<?= $i ?>]" >
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" >Is your Child <?= $i ?> applying with you?</label>
                                            <select id="userchildrensinfo-applying_status" class="form-control" name="UserChildrensInfo[applying_status][<?= $i ?>]">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_company">Was Child <?= $i ?> adopted?</label>
                                            <select id="userchildrensinfo-adopted_status" class="form-control" name="UserChildrensInfo[adopted_status][<?= $i ?>]">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-adopted_date">If yes when was adoption finalised</label>
                                            <input type="text" id="userchildrensinfo-adopted_date" class="form-control" name="UserChildrensInfo[adopted_date][<?= $i ?>]">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>



                                </div>


                            <?php } ?>

                            <div class="form-group sa-action">
                                <?= Html::submitButton('Save as Draft', ['class' => 'btn btn-success']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        <?php } else { ?>
                            <?php $form = ActiveForm::begin(['action' => '/step_america/user/user/childrens-update']); ?>
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                ?>


                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label style="font-weight: bold;font-size: 14px;">Child <?= $i ?> Information:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Last Name</label>
                                            <input type="text" id="userchildrensinfo-last_name" class="form-control" name="UserChildrensInfo[last_name][<?= $i ?>]" maxlength="200" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->last_name : '' ?>">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Middle Name</label>
                                            <input type="text" id="userchildrensinfo-middle_name" class="form-control" name="UserChildrensInfo[middle_name][<?= $i ?>]" maxlength="200" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->middle_name : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">First Name</label>
                                            <input type="text" id="userchildrensinfo-first_name" class="form-control" name="UserChildrensInfo[first_name][<?= $i ?>]" maxlength="200" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->first_name : '' ?>">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label  for="userchildrensinfo-date_of_birth">Date Of Birth</label>
                                            <input type="text" id="userchildrensinfo-date_of_birth" class="form-control" name="UserChildrensInfo[date_of_birth][<?= $i ?>]" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->date_of_birth : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label  for="userchildrensinfo-country_of_birth">Country Of Birth</label>
                                            <select id="userchildrensinfo-country_of_birth" class="form-control" name="UserChildrensInfo[country_of_birth][<?= $i ?>]" >
                                                <option value="">Select</option>
                                                <?php
                                                if ($countries) {
                                                    foreach ($countries as $country) {
                                                        $selected = (isset($children_model[$i - 1]->country_of_birth) && $country->id == $children_model[$i - 1]->country_of_birth) ? 'selected="selected"' : '';
                                                        ?>
                                                        <option <?= $selected ?> value="<?= $country->id ?>"><?= $country->name ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label for="userchildrensinfo-last_name">Passport Number</label>
                                            <input type="text" id="userchildrensinfo-passport_number" class="form-control" name="UserChildrensInfo[passport_number][<?= $i ?>]" maxlength="200" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->passport_number : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_company">Passport Issuance Company</label>
                                            <input type="text" id="userchildrensinfo-passport_issuance_company" class="form-control" name="UserChildrensInfo[passport_issuance_company][<?= $i ?>]" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->passport_issuance_company : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_date">Passport Issuance Date</label>
                                            <input type="text" id="userchildrensinfo-passport_issuance_date" class="form-control" name="UserChildrensInfo[passport_issuance_date][<?= $i ?>]" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->passport_issuance_date : '' ?>">


                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_expiration_date">Passport Expiration Date</label>
                                            <input type="text" id="userchildrensinfo-passport_expiration_date" class="form-control" name="UserChildrensInfo[passport_expiration_date][<?= $i ?>]" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->passport_expiration_date : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-country_of_citizenship">Country Of Citizenship</label>
                                            <select id="userchildrensinfo-country_of_citizenship" class="form-control" name="UserChildrensInfo[country_of_citizenship][<?= $i ?>]" >
                                                <option value="">Select</option>
                                                <?php
                                                if ($countries) {
                                                    foreach ($countries as $country) {
                                                        $selected = (isset($children_model[$i - 1]->country_of_citizenship) && $country->id == $children_model[$i - 1]->country_of_citizenship) ? 'selected="selected"' : '';
                                                        ?>
                                                        <option <?= $selected ?> value="<?= $country->id ?>"><?= $country->name ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_date">Is your Child <?= $i ?> currently in the U.S.?</label>
                                            <select id="userchildrensinfo-currently_status" class="form-control" name="UserChildrensInfo[currently_status][<?= $i ?>]" >
                                                <?php
                                                $selected = 'selected="selected"';
                                                ?>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->currently_status == '1') ? $selected : '' ?> value="1">Yes</option>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->currently_status == '2') ? $selected : '' ?> value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" >Is your Child <?= $i ?> applying with you?</label>
                                            <select id="userchildrensinfo-applying_status" class="form-control" name="UserChildrensInfo[applying_status][<?= $i ?>]">
                                                <?php
                                                $selected = 'selected="selected"';
                                                ?>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->applying_status == '1') ? $selected : '' ?> value="1">Yes</option>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->applying_status == '2') ? $selected : '' ?> value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-passport_issuance_company">Was Child <?= $i ?> adopted?</label>
                                            <select id="userchildrensinfo-adopted_status" class="form-control" name="UserChildrensInfo[adopted_status][<?= $i ?>]">
                                                <?php
                                                $selected = 'selected="selected"';
                                                ?>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->adopted_status == '1') ? $selected : '' ?> value="1">Yes</option>
                                                <option <?= (!empty($children_model[$i - 1]) && $children_model[$i - 1]->adopted_status == '1') ? $selected : '' ?> value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="sa-inp-gp">
                                            <label class="control-label" for="userchildrensinfo-adopted_date">If yes when was adoption finalised</label>
                                            <input type="text" id="userchildrensinfo-adopted_date" class="form-control" name="UserChildrensInfo[adopted_date][<?= $i ?>]" value="<?= !empty($children_model[$i - 1]) ? $children_model[$i - 1]->adopted_date : '' ?>">

                                        </div>
                                        <div class="help-block"></div>
                                    </div>



                                </div>


                            <?php } ?>

                            <div class="form-group sa-action">
                                <?= Html::submitButton('Save as Draft', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





