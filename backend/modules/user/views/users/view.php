<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Country;

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
                    <div class="panel-group" id="accordion">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <input type="checkbox" name="approvestep1" value="step1a" id="approve_step1"> 
                                <label>Approve this STEP America Retainer Contract Agreement</label>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <input type="checkbox" name="approvestep1" value="step1b" id="approve_step1" checked=""> 
                                <label>Approve this DHP Retainer Contract Agreement</label>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                        Form Data 1</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table>
                                        <tbody><tr>
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
                                                    if ($biography->issued_any_visa == 1) {
                                                        echo 'Yes';
                                                    } elseif ($biography->issued_any_visa == 2) {
                                                        'No';
                                                    }
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <th>If yes, please explain:</th>
                                                <td><?php
                                                    if ($biography->issued_any_visa == 1) {
                                                        echo $biography->explain_visa_details;
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
                                                <td><?= isset($contact->worked_in_us) && $contact->worked_in_us == 1 && isset($contact->worked_explain_details)? $contact->worked_explain_details : '' ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form1]" id="approve_step3_docs" value="Initiation Documents">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed">
                                        Initiation Documents</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>

                                                <td>document1</td><td>														<a href="http://www.stepamerica.com/portal/public/frontend/documents/5993eaa68e9a5-dummy_doc.docx" target="_blank">5993eaa68e9a5-dummy_doc.docx														</a></td>
                                                <!-- <td>1</td> -->
                                                <td><textarea name="docalert1" id="DocAlert1" onchange="autoSave('document1', 2, 'DocAlert1', 'portal3_step1')">testing</textarea></td>
                                                <td><span>Approved</span> &nbsp;|&nbsp;<a onclick="Delfunction('document1', '2', 'portal3_step1')">Delete</a> </td>
                                                <!-- <a href="">Delete</a> -->
                                            </tr>
                                            <tr class="last-name">
                                                <td>2</td>

                                                <td>document2</td><td>														<a href="http://localhost/step/public/frontend/documents/5993ead6010be-randomtext_lorem_p.txt" target="_blank">e-randomtext_lorem_p.txt														</a></td>
                                                <!-- <td>0</td> -->
                                                <td><textarea name="docalert1" id="DocAlert2" onchange="autoSave('document2', 2, 'DocAlert2', 'portal3_step1')">xxxxxxx</textarea></td>
                                                <td><a class="approve_sub1" onclick="myfunction('document2', 2, 'portal3_step1')"><input type="hidden" name="docname1" id="doc-name1" value="document2"><input type="hidden" name="approvesub1" id="appr_sub1" value="1">Approve</a> &nbsp;|&nbsp;<a onclick="Delfunction('document2', '2', 'portal3_step1')">Delete</a> </td>
                                                <!-- <a href="">Delete</a> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form2]" id="approve_step3_docs" value="Personal Documents Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">
                                        Personal Documents Completed</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>
                                                <td>document3</td><td>														<a href="http://localhost/step/public/frontend/documents/5993eb1141349-dummy_doc.pdf" target="_blank">9-dummy_doc.pdf														</a></td>
                                                <!-- <td>1</td> -->
                                                <td><textarea name="docalert2" id="DocAlertT1" onchange="autoSave('document3', 2, 'DocAlertT1', 'portal3_step2')">zzxzx</textarea></td>
                                                <td><span>Approved</span> &nbsp;|&nbsp;<a onclick="Delfunction('document3', '2', 'portal3_step2')">Delete</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form3]" id="approve_step3_docs" value="Salary Savings from an Employer Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">
                                        Salary Savings from an Employer Completed
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form4]" id="approve_step3_docs" value="Enterpreneurs Business Income Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" class="collapsed">
                                        Enterpreneur`s Business Income Completed</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>
                                                <td>document2</td><td>														<a href="http://localhost/step/public/frontend/documents/5993eb76cbc08-3DGreenNatureWallpaper.jpg" target="_blank">8-3DGreenNatureWallpaper.jpg														</a></td>
                                        <!-- <td>0</td> -->
                                                <td><textarea name="docalert4" id="DocAlertF1" onchange="autoSave('document2', 2, 'DocAlertF1', 'portal3_step4')">zxzxzx</textarea></td>
                                                <td><a class="approve_sub4" onclick="myfunction('document2', 2, 'portal3_step4')"><input type="hidden" name="docname4" id="doc-name4" value="document2"><input type="hidden" name="approvesub4" id="appr_sub4" value="1">Approve</a> &nbsp;|&nbsp;<a onclick="Delfunction('document2', '2', 'portal3_step4')">Delete</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form5]" id="approve_step3_docs" value="Taking a Secured Loan Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" class="collapsed">
                                        Taking a Secured Loan Completed</a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>
                                                <td>document2</td><td>														<a href="http://localhost/step/public/frontend/documents/598ae09792ade-dummy_doc.docx" target="_blank">e-dummy_doc.docx														</a></td>
                                        <!-- <td>1</td> -->
                                                <td><textarea name="docalert5" id="DocAlertFi1" onchange="autoSave('document2', 2, 'DocAlertFi1', 'portal3_step5')">Test alert.!!!</textarea></td>
                                                <td><span>Approved</span> &nbsp;|&nbsp;<a onclick="Delfunction('document2', '2', 'portal3_step5')">Delete</a> </td>
                                            </tr>
                                            <tr class="last-name">
                                                <td>2</td>
                                                <td>document6</td><td>														<a href="http://localhost/step/public/frontend/documents/5993eb988c819-imagsses.jpg" target="_blank">9-imagsses.jpg														</a></td>
                                        <!-- <td>0</td> -->
                                                <td><textarea name="docalert5" id="DocAlertFi2" onchange="autoSave('document6', 2, 'DocAlertFi2', 'portal3_step5')"></textarea></td>
                                                <td><a class="approve_sub5" onclick="myfunction('document6', 2, 'portal3_step5')"><input type="hidden" name="docname5" id="doc-name5" value="document6"><input type="hidden" name="approvesub5" id="appr_sub5" value="1">Approve</a> &nbsp;|&nbsp;<a onclick="Delfunction('document6', '2', 'portal3_step5')">Delete</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form6]" id="approve_step3_docs" value="Sale of Property Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" class="collapsed">
                                        Sale of Property Completed</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>
                                                <td>document5</td><td>														<a href="http://localhost/step/public/frontend/documents/5993ebf256e6a-imagses.jpg" target="_blank">a-imagses.jpg														</a></td>
                                                <!-- <td>1</td> -->
                                                <td><textarea name="docalert6" id="DocAlertSi1" onchange="autoSave('document5', 2, 'DocAlertSi1', 'portal3_step6')">asdcfvbn</textarea></td>
                                                <td><span>Approved</span> &nbsp;|&nbsp;<a onclick="Delfunction('document5', '2', 'portal3_step6')">Delete</a> </td>
                                            </tr>
                                            <tr class="last-name">
                                                <td>2</td>
                                                <td>document9</td><td>														<a href="http://localhost/step/public/frontend/documents/5993ec1251da7-dummy_doc.pdf" target="_blank">7-dummy_doc.pdf														</a></td>
                                                <!-- <td>0</td> -->
                                                <td><textarea name="docalert6" id="DocAlertSi2" onchange="autoSave('document9', 2, 'DocAlertSi2', 'portal3_step6')">test alert!!!</textarea></td>
                                                <td><a class="approve_sub6" onclick="myfunction('document9', 2, 'portal3_step6')"><input type="hidden" name="docname6" id="doc-name6" value="document9"><input type="hidden" name="approvesub6" id="appr_sub6" value="1">Approve</a> &nbsp;|&nbsp;<a onclick="Delfunction('document9', '2', 'portal3_step6')">Delete</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form7]" id="approve_step3_docs" value="Gifts Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" class="collapsed">
                                        Gifts Completed</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><input type="checkbox" name="step3[form8]" id="approve_step3_docs" value="Tracing of funds Documentation Completed">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" class="collapsed">
                                        Tracing of funds Documentation Completed</a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="name">
                                                <th>S.No.</th>
                                                <th>Doc Name</th>
                                                <th>Doc Path</th>
                                                <!-- <th>Status</th> -->
                                                <th>Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="last-name">
                                                <td>1</td>
                                                <td>document2</td><td>														<a href="http://localhost/step/public/frontend/documents/5993ed27d7e6e-sdimages.jpg" target="_blank">e-sdimages.jpg														</a></td>
                                                <!-- <td>0</td> -->
                                                <td><textarea name="docalert8" id="DocAlertE1" onchange="autoSave('document2', 2, 'DocAlertE1', 'portal3_step8')">testttt</textarea></td>
                                                <td><a class="approve_sub8" onclick="myfunction('document2', 2, 'portal3_step8')"><input type="hidden" name="docname8" id="doc-name8" value="document2"><input type="hidden" name="approvesub8" id="appr_sub8" value="1">Approve</a> &nbsp;|&nbsp;<a onclick="Delfunction('document2', '2', 'portal3_step8')">Delete</a> </td>
                                            </tr>
                                            <tr class="last-name">
                                                <td>2</td>
                                                <td>document4</td><td>														<a href="http://localhost/step/public/frontend/documents/5993ed30a59a5-imagwsxes.jpg" target="_blank">5-imagwsxes.jpg														</a></td>
                                                <!-- <td>1</td> -->
                                                <td><textarea name="docalert8" id="DocAlertE2" onchange="autoSave('document4', 2, 'DocAlertE2', 'portal3_step8')"></textarea></td>
                                                <td><span>Approved</span> &nbsp;|&nbsp;<a onclick="Delfunction('document4', '2', 'portal3_step8')">Delete</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <input type="hidden" name="user_id" value="2">
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
        </script>
