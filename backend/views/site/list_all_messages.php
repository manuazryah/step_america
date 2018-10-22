<?php

$msg = [];

if (!empty($chats)) {
        foreach ($chats as $chats_open) {
                $messages = common\models\Chat::find()->where(['user_id' => $chats_open])->all();
                $user_details = common\models\Users::findOne($chats_open);
                if (!empty($user_details)) {
                        $user_chat_message = '';
                        foreach ($messages as $message) {

                                if ($message->message_status == 1) {
                                        $message->status = 2; /* message marked as read */
                                        $message->save();
                                }
                                $div_class = '';
                                if ($message->message_status == 2) {
                                        $div_class = 'right';
                                        $chat_name = 'pull-right';
                                        $chat_time = 'pull-left';
                                        $name = 'Admin';
                                } else {
                                        $chat_name = 'pull-left';
                                        $chat_time = 'pull-right';
                                        $name = $user_details->name;
                                }
                                $user_chat_message .= '<div class="direct-chat-msg ' . $div_class . '">'
                                        . '<div class="direct-chat-info clearfix">'
                                        . '<span class="direct-chat-name ' . $chat_name . '">' . $name . '</span>'
                                        . '<span class="direct-chat-timestamp ' . $chat_time . '">' . date("d M h:m A", strtotime($message->date)) . '</span>'
                                        . ' </div>'
                                        . '<img class="direct-chat-img" src="' . Yii::$app->homeUrl . 'img/dummy-user.png" alt="Message User Image">'
                                        . '<div class="direct-chat-text">' . $message->message . ''
                                        . '</div>'
                                        . '</div>';
                        }



                        $msg[$chats_open] = $user_chat_message;
                }
        }
}

echo json_encode($msg);
?>


