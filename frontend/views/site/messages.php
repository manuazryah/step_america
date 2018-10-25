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
                                        <h5 class="step-title">Messages</h5>
                                </div>
                        </div>
                        <div class="step-body small-display-view">
                                <label style="font-weight: bold;font-size: 14px;text-decoration: underline">Messages:</label>
                                <div class="direct-chat-messages1">
                                        <?php foreach ($messages as $message) {
                                                ?>
                                                <div class="direct-chat-msg <?= $message->message_status == 2 ? 'right' : '' ?>">
                                                        <div class="direct-chat-info clearfix">
                                                                <span class="direct-chat-name <?= $message->message_status == 2 ? 'pull-right' : 'pull-left' ?>"><?= $message->message_status == 2 ? 'Customer Support' : Yii::$app->user->identity->user_name ?></span>
                                                                <span class="direct-chat-timestamp <?= $message->message_status == 2 ? 'pull-left' : 'pull-right' ?>"><?= date("d M h:m A", strtotime($message->date)); ?></span>
                                                        </div>
                                                        <img class="direct-chat-img" src="<?= yii::$app->homeUrl; ?>img/dummy-user.png" alt="message user image">
                                                        <div class="direct-chat-text">
                                                                <?= $message->message ?>
                                                        </div>
                                                </div>
                                        <?php } ?>

                                </div>
                        </div>
                </div>
        </div>
</div>
</div>



