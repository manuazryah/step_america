<form method="get" class="form-container" id="user-chat">
        <input type="hidden" name="Chat[user_id]" id='chat_user_id' value="<?= $user->id ?>" />
        <div class="box-header with-border">
                <h3 class="box-title"><?= $user->name ?></h3>

                <div class="box-tools pull-right">
                        <button type="button" class="btn cancel" onclick="close_popup('<?= $user->id ?>');"><i class="fa fa-times"></i></button>
                </div>
        </div>
        <div class="direct-chat-messages" id="direct-chat-messages-<?= $user->id ?>">
                <?php foreach ($model as $message) {
                        ?>
                        <div class="direct-chat-msg <?= $message->message_status == 2 ? 'right' : '' ?>">
                                <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name <?= $message->message_status == 2 ? 'pull-right' : 'pull-left' ?>"><?= $message->message_status == 2 ? 'Admin' : Yii::$app->user->identity->name ?></span>
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
        </div>

        <div class="box-footer">

                <div class="input-group">
                        <input type="text" name="Chat[message]" placeholder="Type Message ..." class="form-control chat_message_<?= $user->id ?>" id='chat-message' required>
                        <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-flat">Send</button>
                        </span>
                </div>

        </div>
</form>


