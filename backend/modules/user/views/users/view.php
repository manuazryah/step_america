<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Country;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = 'User Details';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box">
        <div class="users-view">
                <div class="box-body">
                        <?= Html::a('<span> Manage Users</span>', ['index'], ['class' => 'btn btn-warning mrg-bot-15']) ?>
                        <?= Html::a('Change Password', ['change-password', 'id' => Yii::$app->EncryptDecrypt->Encrypt('encrypt', $model->id)], ['class' => 'btn btn-danger mrg-bot-15']) ?>
                        <table class="table user-view-tbl">
                                <tr>
                                        <th>Name</th>
                                        <td>: <?= $model->name ?></td>
                                </tr>
                                <tr>
                                        <th>Email</th>
                                        <td>: <?= $model->email ?></td>
                                </tr>
                        </table>
                        <!-- /.box-body -->
                        <div class=" clearfix"></div>
                        <div class="tabs">
                                <div class="tab-button-outer">
                                        <ul id="tab-button">
                                                <li><a href="#tab01">Step 1</a></li>
                                                <li><a href="#tab02">Step 2</a></li>
                                                <li><a href="#tab03">Step 3</a></li>
                                                <li><a href="#tab04">Step 4</a></li>
                                                <li><a href="#tab05">Step 5</a></li>
                                                <li><a href="#tab06">Step 6</a></li>
                                                <li><a href="#tab07">Step 7</a></li>
                                                <li><a href="#tab08">Step 8</a></li>
                                                <li><a href="#tab09">Step 9</a></li>
                                                <li><a href="#tab10">Step 10</a></li>
                                                <li><a href="#tab11">Step 11</a></li>
                                        </ul>
                                </div>
                                <div class="tab-select-outer">
                                        <select id="tab-select">
                                                <option value="#tab01">Step 1</option>
                                                <option value="#tab02">Step 2</option>
                                                <option value="#tab03">Step 3</option>
                                                <option value="#tab04">Step 4</option>
                                                <option value="#tab05">Step 5</option>
                                                <option value="#tab06">Step 6</option>
                                                <option value="#tab07">Step 7</option>
                                                <option value="#tab08">Step 8</option>
                                                <option value="#tab09">Step 9</option>
                                                <option value="#tab10">Step 10</option>
                                                <option value="#tab11">Step 11</option>
                                        </select>
                                </div>


                                <div id="tab01" class="tab-contents">
                                        <?php $form = ActiveForm::begin(['id' => 'approve-step-1']); ?>
                                        <input type="hidden" name="user_id" id="user_id" value="<?= $id ?>"/>
                                        <div class="panel-group" id="accordion">

                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <input type="checkbox" name="approvestep1"  id="approve_step1_retainer" class="approve_step"  <?= isset($user_steps_status->retainer_contract_approve) && $user_steps_status->retainer_contract_approve == 1 ? 'checked' : '' ?>  <?=isset($user_steps_status->step_1_completed) &&  $user_steps_status->step_1_completed == 1 ? 'disabled' : '' ?>  >
                                                                <label>Approve this STEP America Retainer Contract Agreement</label>
                                                        </div>
                                                </div>

                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <input type="checkbox" name="approvestep1" id="approve_step1_dhp" class="approve_step" <?= isset($user_steps_status->dhp_approve) && $user_steps_status->dhp_approve == 1 ? 'checked' : '' ?>  <?= isset($user_steps_status->step_1_completed) && $user_steps_status->step_1_completed == 1 ? 'disabled' : '' ?>>
                                                                <label>Approve this DHP Retainer Contract Agreement</label>
                                                        </div>
                                                </div>

                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                                                                Form Data 1
                                                                        </a>
                                                                </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                        <table>
                                                                                <tbody>
                                                                                        <tr>
                                                                                                <th>First Name</th>
                                                                                                <td><?= isset($biography->first_name) ? $biography->first_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Last Name</th>
                                                                                                <td><?= isset($biography->last_name) ? $biography->last_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Middle Name</th>
                                                                                                <td><?= isset($biography->middle_name) ? $biography->middle_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Other Name</th>
                                                                                                <td><?= isset($biography->other_name) ? $biography->other_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Date of birth</th>
                                                                                                <td><?= isset($biography->dob) ? $biography->dob : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Country of birth</th>
                                                                                                <td><?= isset($biography->country_of_birth) ? Country::findOne($biography->country_of_birth)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Country of Citizenship</th>
                                                                                                <td><?= isset($biography->country_of_citizenship) ? Country::findOne($biography->country_of_citizenship)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Dual Citizenship</th>
                                                                                                <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>If in U.S. provide Date of Last Entry into U.S.</th>
                                                                                                <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>U.S. Social Security Number</th>
                                                                                                <td><?= isset($biography->social_security_number) ? $biography->social_security_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>U.S. Alien Registration Number (”A#”)</th>
                                                                                                <td><?= isset($biography->alien_reg_number) ? $biography->alien_reg_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Current Immigration Status</th>
                                                                                                <td><?= isset($biography->immigration_status) ? $biography->immigration_status : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Current Status Expiration Date</th>
                                                                                                <td><?= isset($biography->immigration_expiration_date) ? $biography->immigration_expiration_date : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Passport Number</th>
                                                                                                <td><?= isset($biography->passport_number) ? $biography->passport_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Passport Issuance Country</th>
                                                                                                <td><?= isset($biography->issuance_country) ? Country::findOne($biography->issuance_country)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Passport Issuance Date</th>
                                                                                                <td><?= isset($biography->issuance_date) ? $biography->issuance_date : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Passport Expiration Date</th>
                                                                                                <td><?= isset($biography->expiration_date) ? $biography->expiration_date : '' ?></td>
                                                                                        </tr>
                                                                                        <tr><th>Permanent Resident</th>
                                                                                                <td><?= isset($biography->permanent_resident) ? $biography->permanent_resident : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Green Card</th>
                                                                                                <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Expiration of Status as shown on Form I-94 or Form I-688</th>
                                                                                                <td><?= isset($biography->expiration_on_form) ? $biography->expiration_on_form : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>visa no</th>
                                                                                                <td><?= isset($biography->visa_number) ? $biography->visa_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Visa Issuance Date</th>
                                                                                                <td><?= isset($biography->visa_issuance_date) ? $biography->visa_issuance_date : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>visa_issurance_place</th>
                                                                                                <td><?= isset($biography->visa_issuance_country) ? Country::findOne($biography->visa_issuance_country)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Have you ever been in J-1 or J-2 Status or have been issued a J-1 or J-2 Visa?</th>
                                                                                                <td><?php
                                                                                                if(isset($biography->issued_any_visa)){
                                                                                                        if ($biography->issued_any_visa == 1) {
                                                                                                                echo 'Yes';
                                                                                                        } elseif ($biography->issued_any_visa == 2) {
                                                                                                                'No';
                                                                                                        }
                                                                                                }
                                                                                                        ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>If yes, please explain:</th>
                                                                                                <td><?php
                                                                                                 if(isset($biography->issued_any_visa)){
                                                                                                        if ($biography->issued_any_visa == 1) {
                                                                                                                echo $biography->explain_visa_details;
                                                                                                        }
                                                                                                 }
                                                                                                        ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>percentage</th>
                                                                                                <th></th>
                                                                                        </tr>
                                                                                </tbody></table>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                                                                Form Data 2</a>
                                                                </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                        <table>
                                                                                <tbody><tr>
                                                                                                <th>Marital Status</th>
                                                                                                <?php
                                                                                                $status = "";
                                                                                                if (isset($family->marital_status)) {
                                                                                                        if ($family->marital_status == 1) {
                                                                                                                $status = "Unmarried";
                                                                                                        }
                                                                                                        if ($family->marital_status == 2) {
                                                                                                                $status = "Married";
                                                                                                        }
                                                                                                        if ($family->marital_status == 3) {
                                                                                                                $status = "Widower";
                                                                                                        }
                                                                                                }
                                                                                                ?>
                                                                                                <td><?= $status ?></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                                <th>Number of marriages, including present marriage </th>
                                                                                                <td><?= isset($family->no_of_marriages) ? $family->no_of_marriages : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 last name </th>
                                                                                                <td><?= isset($family->spouse_1_last_name) ? $family->spouse_1_last_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 middle name </th>
                                                                                                <td><?= isset($family->spouse_1_middle_name) ? $family->spouse_1_middle_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 first name </th>
                                                                                                <td><?= isset($family->spouse_1_first_name) ? $family->spouse_1_first_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 dob </th>
                                                                                                <td><?= isset($family->spouse_1_dob) ? $family->spouse_1_dob : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 Country of Birth </th>
                                                                                                <td><?= isset($family->spouse_1_country) ? Country::findOne($family->spouse_1_country)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 1 State/ Province of Birth </th>
                                                                                                <td><?= isset($family->spouse_1_state) ? $family->spouse_1_state : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 2 last name </th>
                                                                                                <td><?= isset($family->spouse_2_first_name) ? $family->spouse_2_first_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 2 middle name </th>
                                                                                                <td><?= isset($family->spouse_2_middle_name) ? $family->spouse_2_middle_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 2 first name </th>
                                                                                                <td><?= isset($family->spouse_2_first_name) ? $family->spouse_2_first_name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr><th>Former Spouse 2 dob </th>
                                                                                                <td><?= isset($family->spouse_2_dob) ? $family->spouse_2_dob : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 2 Country of Birth </th>
                                                                                                <td><?= isset($family->spouse_2_country) ? Country::findOne($family->spouse_2_country)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Former Spouse 2 State/ Province of Birth </th>
                                                                                                <td><?= isset($family->spouse_2_state) ? $family->spouse_2_state : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Current Spouse's Information last name </th>
                                                                                                <td><?= isset($family->last_name) ? $family->last_name : '' ?></td>
                                                                                        </tr>


                                                                                        <tr>
                                                                                                <th>Current Spouse's Information Marriage Date </th>
                                                                                                <td><?= isset($family->marriage_date) ? $family->marriage_date : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th> State/Provision of Marriage </th>
                                                                                                <td><?= isset($family->state_of_marriage) ? $family->state_of_marriage : '' ?></td>
                                                                                        </tr>


                                                                                </tbody></table>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                                                                Form Data 3
                                                                        </a>
                                                                </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                        <table>
                                                                                <tbody>
                                                                                        <tr>
                                                                                                <th>Do you have any children</th>
                                                                                                <td><?= !empty($childrens) ? 'Yes' : 'No' ?></td>
                                                                                        </tr>
                                                                                        <?php if (!empty($childrens)) { ?>
                                                                                                <tr><th>If Yes, how many children? </th>
                                                                                                        <td><?= count($childrens); ?></td>
                                                                                                </tr>
                                                                                                <?php
                                                                                                for ($i = 0; $i < count($childrens); $i++) {
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> last name</th>
                                                                                                                <td><?= isset($childrens[$i]->last_name) ? $childrens[$i]->last_name : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> middle name</th>
                                                                                                                <td><?= isset($childrens[$i]->middle_name) ? $childrens[$i]->middle_name : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> first name</th>
                                                                                                                <td><?= isset($childrens[$i]->first_name) ? $childrens[$i]->first_name : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> dob</th>
                                                                                                                <td><?= isset($childrens[$i]->date_of_birth) ? $childrens[$i]->date_of_birth : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> country of birth</th>
                                                                                                                <td><?= isset($childrens[$i]->country_of_birth) ? Country::findOne($childrens[$i]->country_of_birth)->name : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?> State/ Province of Birth</th>
                                                                                                                <td>State/ Province of Birth</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?>  Passport Issuance Date</th>
                                                                                                                <td><?= isset($childrens[$i]->passport_issuance_date) ? $childrens[$i]->passport_issuance_date : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Child <?= $i + 1 ?>  is your Child 1 currently in the U.S.?</th>
                                                                                                                <?php
                                                                                                                $current_status = "";
                                                                                                                if (isset($childrens[$i]->currently_status)) {
                                                                                                                        if ($childrens[$i]->currently_status == 1) {
                                                                                                                                $current_status = 'Yes';
                                                                                                                        }
                                                                                                                        if ($childrens[$i]->currently_status == 2) {
                                                                                                                                $current_status = 'No';
                                                                                                                        }
                                                                                                                }
                                                                                                                ?>
                                                                                                                <td><?= $current_status ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th> Child <?= $i + 1 ?>  Country of Citizenship</th>
                                                                                                                <td><?= isset($childrens[$i]->country_of_citizenship) ? Country::findOne($childrens[$i]->country_of_citizenship)->name : '' ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>Was Child <?= $i + 1 ?> adopted?</th>
                                                                                                                <?php
                                                                                                                $adopted_status = "";
                                                                                                                if (isset($childrens[$i]->adopted_status)) {
                                                                                                                        if ($childrens[$i]->adopted_status == 1) {
                                                                                                                                $adopted_status = 'Yes';
                                                                                                                        }
                                                                                                                        if ($childrens[$i]->adopted_status == 2) {
                                                                                                                                $adopted_status = 'No';
                                                                                                                        }
                                                                                                                }
                                                                                                                ?>
                                                                                                                <td><?= $adopted_status ?></td>
                                                                                                        </tr>
                                                                                                <?php } ?>
                                                                                        <?php } ?>
                                                                                </tbody></table>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed" aria-expanded="false">
                                                                                Form Data 4
                                                                        </a>
                                                                </h4>
                                                        </div>
                                                        <div id="collapsefour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                        <table>
                                                                                <tbody>
                                                                                        <tr>
                                                                                                <th>Street Number and Namee</th>
                                                                                                <td><?= isset($contact->street_number) ? $contact->street_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>appt_no</th>
                                                                                                <td><?= isset($contact->appt_number) ? $contact->appt_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>City</th>
                                                                                                <td><?= isset($contact->city) ? $contact->city : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>State / Province</th>
                                                                                                <td><?= isset($contact->state) ? $contact->state : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Country</th>
                                                                                                <td><?= isset($contact->country) ? Country::findOne($contact->country)->name : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Zip Code</th>
                                                                                                <td></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                                <th>Daytime Contact Number</th>
                                                                                                <td><?= isset($contact->daytime_contact_no) ? $contact->daytime_contact_no : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Mobile Contact Number</th>
                                                                                                <td><?= isset($contact->mobile_number) ? $contact->mobile_number : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Email</th>
                                                                                                <td><?= isset($contact->email) ? $contact->email : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Email 2</th>
                                                                                                <td><?= isset($contact->email_1) ? $contact->email_1 : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Foreign address if you provided a U.S. address above</th>
                                                                                                <td><?= isset($contact->foreign_address) ? $contact->foreign_address : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Foreign address in your native alphabet</th>
                                                                                                <td><?= isset($contact->foreign_address_native) ? $contact->foreign_address_native : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Are you now or have you ever been in deportation proceedings in the United States or otherwise violated a U.S. Immigration Law?</th>
                                                                                                <?php
                                                                                                $deportation_status = "";
                                                                                                if (isset($contact->deportation_proceedings)) {
                                                                                                        if ($contact->deportation_proceedings == 1) {
                                                                                                                $deportation_status = 'Yes';
                                                                                                        }
                                                                                                        if ($contact->deportation_proceedings == 2) {
                                                                                                                $deportation_status = 'No';
                                                                                                        }
                                                                                                }
                                                                                                ?>
                                                                                                <td><?= $deportation_status ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>If yes, please explain:</th>
                                                                                                <td><?= isset($contact->deportation_proceedings) && $contact->deportation_proceedings == 1 && isset($contact->explain_details) ? $contact->explain_details : '' ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>Have you ever worked in the U.S. without permission?</th>
                                                                                                <?php
                                                                                                $worked_status = "";
                                                                                                if (isset($contact->worked_in_us)) {
                                                                                                        if ($contact->worked_in_us == 1) {
                                                                                                                $worked_status = 'Yes';
                                                                                                        }
                                                                                                        if ($contact->worked_in_us == 2) {
                                                                                                                $worked_status = 'No';
                                                                                                        }
                                                                                                }
                                                                                                ?>
                                                                                                <td><?= $worked_status ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>If yes, please explain
                                                                                                </th>
                                                                                                <td><?= isset($contact->worked_in_us) && $contact->worked_in_us == 1 && isset($contact->worked_explain_details) ? $contact->worked_explain_details : '' ?></td>
                                                                                        </tr>
                                                                                </tbody>
                                                                        </table>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php if (isset($user_steps_status->step_1_completed) && $user_steps_status->step_1_completed != 1) { ?> <input type="submit" class="btn btn-primary" value="Approve"><?php } ?>
                                        <?php ActiveForm::end(); ?>
                                </div>


                                <div id="tab02" class="tab-contents">
                                        <div class="tab-pane fade active in pad-25-0" id="step2">
                                                <?=
                                                $this->render('_form_step2', [
                                                    'model' => $model,
                                                    'step2_model' => $step2_model,
                                                ])
                                                ?>
                                        </div>
                                </div>
                                <div id="tab03" class="tab-contents">
                                        <div class="panel-group" id="accordion">

                                                <?php
                                                foreach ($uploads_category as $category) {
                                                        $step3uploads = common\models\Step3Uploads::find()->where(['category' => $category->id, 'user_id' => $id])->all();
                                                        ?>
                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $category->id ?>" aria-expanded="false" class="collapsed">
                                                                                        <?= $category->category ?></a>
                                                                        </h4>
                                                                </div>
                                                                <div id="collapse<?= $category->id ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                        <div class="panel-body">
                                                                                <table class="table">
                                                                                        <thead>
                                                                                                <tr class="name">
                                                                                                        <th>S.No.</th>
                                                                                                        <th>Doc Name</th>
                                                                                                        <th>Doc Path</th>
                                                                                                        <th>User Comment</th>
                                                                                                        <th>Alert</th>
                                                                                                        <th>Action</th>
                                                                                                </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                                <?php
                                                                                                if (count($step3uploads) > 0) {
                                                                                                        $u = 0;
                                                                                                        foreach ($step3uploads as $uploads) {
                                                                                                                $upload_subcategory = common\models\Step3Subcategory::findOne($uploads->subcategory);
                                                                                                                $u++;
                                                                                                                ?>
                                                                                                                <tr class="last-name">
                                                                                                                        <td><?= $u ?></td>
                                                                                                                        <td><?= $upload_subcategory->subcategory ?></td>
                                                                                                                        <td><a href="<?= Yii::$app->homeUrl ?>../uploads/step3/<?= $uploads->id ?>.<?= $uploads->file ?>" target="_blank"><?= $uploads->file_name ?></a></td>
                                                                                                                        <td><?= wordwrap($uploads->user_comment, 50, "\n") ?></td>
                                                                                                                        <td><textarea placeholder="Add Comment" name="docalert1" id="DocAlert1" onchange="autoSave('document1', 2, 'DocAlert1', 'portal3_step1')"><?= $uploads->admin_comment ?></textarea></td>
                                                                                                                        <td class="status_show_<?= $uploads->id ?>">
                                                                                                                                <?php if ($uploads->status != 2 && $uploads->status != 3) { ?>
                                                                                                                                        <a class="step3-upload-status step3-upload-status_<?= $uploads->id ?>" title="Click here to approve" id="<?= $uploads->id ?>" val="2"><i class="fa fa-check" aria-hidden="true" style="color:green"></i></a> |
                                                                                                                                        <a class="step3-upload-status step3-upload-status_<?= $uploads->id ?>" title="Click here to reject" id="<?= $uploads->id ?>" val="3"><i class="fa fa-ban" aria-hidden="true" ></i></a>
                                                                                                                                        <?php
                                                                                                                                } else {
                                                                                                                                        if ($uploads->status == 2) {
                                                                                                                                                echo '<span style="color:green">Approved</span>';
                                                                                                                                        } else if ($uploads->status == 3) {
                                                                                                                                                echo '<span style="color:red">Rejected</span>';
                                                                                                                                        }
                                                                                                                                        ?>
                                                                                                                                <?php } ?>
                                                                                                                        </td>
                                                                                                                </tr>
                                                                                                                <?php
                                                                                                        }
                                                                                                } else {
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                                <td>No documents !</td>
                                                                                                        </tr>
                                                                                                <?php } ?>
                                                                                        </tbody>
                                                                                </table>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                <?php } ?>

                                        </div>
                                        <?php if (isset($user_steps_status->step_3_completed) && $user_steps_status->step_3_completed != 1) { ?><input type="submit" class="btn btn-primary approve_step_3" value="Approve Step 3"><?php } ?>
                                </div>
                                <div id="tab04" class="tab-contents">
                                        <div class="tab-pane fade active in pad-25-0" id="step4">
                                                <div class="panel-body">


                                                        <table class="table">
                                                                <thead>
                                                                        <tr class="name">
                                                                                <th>S.No.</th>
                                                                                <th>Project Name</th>
                                                                                <!-- <th>Status</th>
                                                                                -->
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr class="last-name">
                                                                                <td>19</td>
                                                                                <td>Ritz Carlton</td>
                                                                        </tr>

                                                                        <tr class="last-name">
                                                                                <td>20</td>
                                                                                <td>Fresh Direct Phase II</td>
                                                                        </tr>

                                                                </tbody>
                                                        </table>

                                                        <input type="checkbox" name="approvestep1" value="step4" id="approve_step1">
                                                        <label>Approve this step</label>
                                                </div>
                                        </div>
                                </div>
                                <div id="tab05" class="tab-contents">
                                        <div class="tab-pane fade active in pad-25-0" id="step5">

                                                <table class="table">

                                                        <thead>
                                                                <tr>
                                                                        <th>Serial No</th>
                                                                        <th>Project Name</th>
                                                                        <th>Document</th>
                                                                        <th>Date</th>

                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                </table>
                                                <input type="checkbox" name="approvestep1" value="step_project" id="approve_step1">
                                                <label>Approve this step</label>
                                        </div>
                                </div>
                                <div id="tab06" class="tab-contents">
                                        <div class="tab-pane fade active in pad-25-0" id="step6">
                                                <div class="panel-body">
                                                        <table class="table">

                                                                <thead>
                                                                        <tr>
                                                                                <th>Serial No</th>
                                                                                <th>Project Name</th>
                                                                                <th>Document</th>
                                                                                <th>Date</th>
                                                                                <th>Action</th>

                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                        </table>

                                                        <table class="table">
                                                                <thead>
                                                                        <tr class="name">
                                                                                <th>User Name</th>
                                                                                <th>Acknowledgement Status</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td>Jhon</td>
                                                                                <td>Acknowledgement checked </td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                        <input type="checkbox" name="approvestep1" value="step5" id="approve_step1">
                                                        <label>Approve this step</label>
                                                </div>
                                        </div>
                                </div>
                                <div id="tab07" class="tab-contents">
                                        <div class="tab-pane fade active in pad-25-0" id="step7">
                                                <div class="panel-body">
                                                        <div class="panel panel-default">
                                                                <table class="step6_pannel">
                                                                        <tbody>

                                                                                <tr>
                                                                                        <th>Deposited on</th>
                                                                                        <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th>Deposited Amount</th>
                                                                                        <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th>Currency</th>
                                                                                        <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th>Confirmation Ref ID</th>
                                                                                        <td></td>
                                                                                </tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                        <input type="checkbox" name="approvestep1" value="step6" id="approve_step1">
                                                        <label>Approve this step</label>
                                                </div>
                                        </div>
                                </div>
                                <div id="tab08" class="tab-contents">
                                        <div class="tab-pane active in pad-25-0" id="step8">
                                                <div class="panel panel-default">
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">

                                                                <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOnea" aria-expanded="false" class="collapsed">
                                                                                                Upload By Admin For User</a>
                                                                                </h4>
                                                                        </div>
                                                                        <div id="collapseOnea" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                        <form id="step7sub_form" method="post" enctype="multipart/form-data" action="http://www.stepamerica.com/portal/index.php/admin/admin/upload_image_scan">

                                                                                                <input type="hidden" name="docname" value="bank wire confirmation">
                                                                                                <div class="form-group">
                                                                                                        <label>Please Select  File for Bank Wire Confirmation Scan</label>
                                                                                                        <a href="http://localhost/step/upload/59f95aa71fa7d-sample.pdf" target="_blank" class="links"> http://localhost/step/upload/59f95aa71fa7d-sample.pdf</a>
                                                                                                        <input type="file" name="doc[]" id="step7sub_file" required="required">
                                                                                                        <a href="http://localhost/step/upload/59f95aa721a79-sample.pdf" target="_blank" class="links"> http://localhost/step/upload/59f95aa721a79-sample.pdf</a>

                                                                                                        <label>Please Select  File Bank Statment Log</label>
                                                                                                        <input type="file" name="doc[]" id="step7sub_file" required="required">
                                                                                                        <div class="form-group">
                                                                                                                <br>
                                                                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                                                        </div>

                                                                                                </div></form>
                                                                                </div>
                                                                        </div><h4></h4>
                                                                        <div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                        <h4 class="panel-title">
                                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoa">
                                                                                                        Upload By User For Admin</a>
                                                                                        </h4>
                                                                                </div>
                                                                                <div id="collapseTwoa" class="panel-collapse collapse">
                                                                                        <div class="panel-body">
                                                                                                <table class="table">
                                                                                                        <thead>
                                                                                                                <tr class="name">
                                                                                                                        <th>S.No.</th>
                                                                                                                        <th>Doc Name</th>
                                                                                                                        <th>Uploaded File</th>

                                                                                                                </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                                <tr class="last-name">
                                                                                                                        <td>1</td>
                                                                                                                        <td>BANK WIRE CONFIRMATION SCAN</td>
                                                                                                                        <td><a href="xxxx" target="_blank">
                                                                                                                                                                                                        <!-- <img src="" style="max-width:220px;"> --></a></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                        <td>2</td>
                                                                                                                        <td>BANK STATEMENT LOG</td>
                                                                                                                        <td><a href="xxx" target="_blank">
                                                                                                                                                                                                        <!-- <img src="" style="max-width:220px;"> --></a></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                        <td><a class="approve_sub1" onclick="Step7Approve('2', 'portal_step7')">
                                                                                                                                        Approve</a> &nbsp;|&nbsp;<a onclick="Step7Delete('2', 'portal_step7')">Delete</a>
                                                                                                                        </td>

                                                                                                                </tr>
                                                                                                        </tbody>
                                                                                                </table>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                </div>

                                                                <input type="checkbox" name="approvestep1" value="step7" id="approve_step1">


                                                                <label>Approve this step</label>
                                                        </div>
                                                        <!-- .panel-body -->
                                                </div>
                                        </div>
                                </div>
                                <div id="tab09" class="tab-contents">
                                        <h2>Tab 9</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
                                </div>
                                <div id="tab10" class="tab-contents">
                                        <div class="tab-pane fade active in" id="step10">
                                                <div class="panel-body">
                                                        <table class="table">
                                                                <thead>
                                                                        <tr class="name">
                                                                                <th>User Name</th>
                                                                                <th>Acknowledgement Status</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td>Jhon</td>
                                                                                <td>Acknowledgement Approved</td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                        <input type="checkbox" name="approvestep1" value="step9" id="approve_step1">
                                                        <label>Approve this step</label>
                                                </div>
                                        </div>
                                </div>
                                <div id="tab11" class="tab-contents">
                                        <div class="tab-pane fade active in" id="step11">
                                                <h4></h4>
                                                <!--  <form action="" method="post"> -->
                                                <div class="form-group">
                                                        <label>Application Number</label>
                                                        <input class="form-control" id="AppNo" type="text" name="Apptn_No" placeholder="Enter Application Number" value="" required="required">
                                                </div>
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-primary" onclick="Step10Application('2')">Save</button>
                                                </div>
                                                <!--  </form> -->
                                                <input type="checkbox" name="approvestep1" value="step10" id="approve_step1">
                                                <label>Approve this step</label>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- /.box -->

                <script>
                        $(function () {
                                var $tabButtonItem = $('#tab-button li'),
                                        $tabSelect = $('#tab-select'),
                                        $tabContents = $('.tab-contents'),
                                        activeClass = 'is-active';

                                $tabButtonItem.first().addClass(activeClass);
                                $tabContents.not(':first').hide();

                                $tabButtonItem.find('a').on('click', function (e) {
                                        var target = $(this).attr('href');

                                        $tabButtonItem.removeClass(activeClass);
                                        $(this).parent().addClass(activeClass);
                                        $tabSelect.val(target);
                                        $tabContents.hide();
                                        $(target).show();
                                        e.preventDefault();
                                });

                                $tabSelect.on('change', function () {
                                        var target = $(this).val(),
                                                targetSelectNum = $(this).prop('selectedIndex');

                                        $tabButtonItem.removeClass(activeClass);
                                        $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                                        $tabContents.hide();
                                        $(target).show();
                                });
                        });


                        $(document).ready(function () {

                                $('.approve_step').change(function () {
                                        var user = $('#user_id').val();
                                        if ($("#approve_step1_retainer").prop('checked') == true) {
                                                var step1_retainer = 1;
                                        } else {
                                                var step1_retainer = 0;
                                        }

                                        if ($("#approve_step1_dhp").prop('checked') == true) {
                                                var step1_dhp = 1;
                                        } else {
                                                var step1_dhp = 0;
                                        }
                                        $.ajax({
                                                type: 'POST',
                                                cache: false,
                                                data: {step1_retainer: step1_retainer, step1_dhp: step1_dhp, user: user},
                                                url: '<?= Yii::$app->homeUrl ?>user/users/step1-status',
                                                success: function (data) {

                                                }
                                        });

                                });


                                $(document).on('submit', '#approve-step-1', function (e) {
                                        e.preventDefault();
                                        var user = $('#user_id').val();
                                        if ($("#approve_step1_retainer").prop('checked') == true) {
                                                var flag = 1;
                                        } else {
                                                var flag = 0;
                                        }

                                        if ($("#approve_step1_dhp").prop('checked') == true) {
                                                var flag1 = 1;
                                        } else {
                                                var flag1 = 0;
                                        }

                                        if (flag == 1 && flag1 == 1) {
                                                $.ajax({
                                                        type: 'POST',
                                                        cache: false,
                                                        data: {user: user},
                                                        url: '<?= Yii::$app->homeUrl ?>user/users/approve-status',
                                                        success: function (data) {
                                                                if (data == 1) {
                                                                        $('#approve_step1_retainer').attr('disabled', true);
                                                                        $('#approve_step1_dhp').attr('disabled', true);
                                                                        alert('Step 1 approved');
                                                                }
                                                        }
                                                });
                                        } else {
                                                if (flag == 0) {
                                                        alert('STEP America Retainer Contract Agreement is not approved')
                                                } else if (flag1 == 0) {
                                                        alert('DHP Retainer Contract Agreement is not approved')
                                                }

                                        }
                                });


                                $('.step3-upload-status').click(function () {
                                        var id = $(this).attr('id');
                                        var status = $(this).attr('val');
                                        $.ajax({
                                                type: 'POST',
                                                cache: false,
                                                data: {id: id, status: status},
                                                url: '<?= Yii::$app->homeUrl ?>user/users/step3-upload-status',
                                                success: function (data) {
                                                        $('.step3-upload-status_' + id).hide();
                                                        if (data == 2) {
                                                                $('.status_show_' + id).append('<span style="color:green">Approved</span>');
                                                        } else {
                                                                $('.status_show_' + id).append('<span style="color:red">Rejected</span>');
                                                        }
                                                }
                                        });

                                });

                                $('.approve_step_3').click(function () {
                                        var user = $('#user_id').val();
                                        $.ajax({
                                                type: 'POST',
                                                cache: false,
                                                data: {user: user},
                                                url: '<?= Yii::$app->homeUrl ?>user/users/step3-approve-status',
                                                success: function (data) {
                                                        if (data == 1) {
                                                                alert('Step 3 approved');
                                                        }
                                                }
                                        });
                                });
                        });
                </script>
