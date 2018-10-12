<?php foreach ($model as $message) {
        ?>
        <div class="direct-chat-msg <?= $message->message_status == 2 ? 'right' : '' ?>">
                <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image"><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                        <?= $message->message ?>
                </div>
                <!-- /.direct-chat-text -->
        </div>
<?php } ?>


