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
                                        <h5 class="step-title">Notifications</h5>
                                </div>
                        </div>
                        <div class="step-body">
                                <div class="step-info notification-table table-responsive small-display-view">
                                        <?php if (count($all_notifications) > 0) { ?>
                                                <table class="table mail-table">
                                                        <tbody>
                                                                <?php foreach ($all_notifications as $notifications) { ?>
                                                                        <tr class="unread">


                                                                                <td class="col-subject ">
                                                                                        <?= $notifications->message ?>
                                                                                </td>

                                                                                <td class="col-time">
                                                                                        <?php
                                                                                        if ($notifications->date == date('Y-m-d')) {
                                                                                                echo "Today";
                                                                                        } else {
                                                                                                echo date("d", strtotime($notifications->date)) . ', ' . date("F", strtotime($notifications->date)) . ' ' . date("Y", strtotime($notifications->date));
                                                                                        }
                                                                                        ?>
                                                                                </td>
                                                                        </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                </table>
                                        <?php } else { ?>
                                                <p>No results found!</p>
                                        <?php } ?>

                                </div>
                        </div>
                </div>
        </div>
</div>



