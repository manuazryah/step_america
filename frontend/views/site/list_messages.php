<?php foreach ($model as $message) {
    ?>
    <div class="direct-chat-msg <?= $message->message_status == 2 ? 'right' : '' ?>">
        <div class="direct-chat-info clearfix">
            <span class="direct-chat-name <?= $message->message_status == 2 ? 'pull-right' : 'pull-left' ?>"><?= $message->message_status == 2 ? 'Customer Support' : Yii::$app->user->identity->user_name ?></span>
            <span class="direct-chat-timestamp <?= $message->message_status == 2 ? 'pull-left' : 'pull-right' ?>"><?= date("d M h:m A", strtotime($message->date)); ?></span>
        </div>
        <!-- /.direct-chat-info -->
        <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image"><!-- /.direct-chat-img -->
        <div class="direct-chat-text">
            <?= $message->message ?>
        </div>
        <!-- /.direct-chat-text -->
    </div>
<?php } ?>


