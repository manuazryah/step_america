<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
?>
<!--<h1>/dashboard/index</h1>-->




<div class="row">

        <div class="col-md-12 pad-left-0">
                <div class="step-content">
                        <div class="step-head">
                                <div class="step-heading">
                                        <h5 class="step-title">Profile</h5>

                                </div>
                        </div>
                        <div class="step-body small-profile-display-view">

                                <div class="step-info">
                                        <div class="step-info-box profile_info">
                                                <table class="table table-responsive">
                                                        <tr>
                                                                <th colspan="3" style="text-decoration: underline;font-size: 14px;">My Profile</th>
                                                        </tr>
                                                        <tr>
                                                                <td>Name </td>
                                                                <td>:</td>
                                                                <td><?= $user_profile->name ?></td>
                                                        </tr>

                                                        <tr>
                                                                <td>Email </td>
                                                                <td>:</td>
                                                                <td><?= $user_profile->email ?></td>
                                                        </tr>

                                                        <tr>
                                                                <td>Phone </td>
                                                                <td>:</td>
                                                                <td><?= $user_profile->phone ?></td>
                                                        </tr>

                                                        <tr>
                                                                <td>Address </td>
                                                                <td>:</td>
                                                                <td><?= $user_profile->address ?></td>
                                                        </tr>

                                                        <tr>
                                                                <td>Username </td>
                                                                <td>:</td>
                                                                <td><?= $user_profile->user_name ?></td>
                                                        </tr>
                                                </table>

                                        </div>

                                </div>
                        </div>
                </div>
        </div>
</div>



<script>
        $(document).ready(function () {
                $(document).on('click', '.download-link', function (e) {
                        e.preventDefault();
                        var type = $(this).attr('id');
                        $.ajax({
                                type: 'POST',
                                cache: false,
                                data: {type: type},
                                url: '<?= Yii::$app->homeUrl ?>dashboard/step-status',
                                success: function (data) {

                                }
                        });
                });
        });
</script>