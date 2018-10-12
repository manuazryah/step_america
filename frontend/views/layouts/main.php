<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
                <meta charset="<?= Yii::$app->charset ?>">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>img/fav.png" type="image/x-icon">
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
                <?= Html::csrfMetaTags() ?>
                <title><?= Html::encode($this->title) ?></title>
                <?php $this->head() ?>

        </head>
        <body>
                <?php $this->beginBody() ?>

                <div class="wrap">
                        <?php
                        NavBar::begin([
                            'brandLabel' => 'Step America',
                            'brandUrl' => Yii::$app->homeUrl,
                            'options' => [
                                'class' => 'navbar-inverse navbar-fixed-top',
                            ],
                        ]);
                        if (Yii::$app->user->isGuest) {
                                $menuItems[] = '';
                        } else {
                                $menuItems[] = '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->user_name . ')', ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>';
                        }
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);
                        NavBar::end();
                        ?>

                        <div class="container">
                                <?= Alert::widget() ?>
                                <?= $content ?>
                        </div>
                </div>

                <footer class="footer">
                        <div class="container">
                                <p class="pull-left">&copy; Step America <?= date('Y') ?></p>

                                <p class="pull-right">Powered by epitome</p>
                        </div>
                </footer>
                <button class="open-button" onclick="openForm()"><img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>img/upbutton.jpg" alt="Chat Button"></button>

                <div class="chat-popup" id="myForm">
                        <form method="get" class="form-container" id="user-chat">
                                <div class="box-header with-border">
                                        <h3 class="box-title">Direct Chat</h3>

                                        <div class="box-tools pull-right">
                                                <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-times"></i></button>
                                        </div>
                                </div>
                                <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image"><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                        Is this template really for free? That's unbelievable!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image"><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                        You better believe it!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                </div>

                                <div class="box-footer">

                                        <div class="input-group">
                                                <input type="text" name="Chat[message]" placeholder="Type Message ..." class="form-control" id='chat-message'>
                                                <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary btn-flat">Send</button>
                                                </span>
                                        </div>

                                </div>
                        </form>
                </div>

                <script>
                        function openForm() {
                                document.getElementById("myForm").style.display = "block";
                        }

                        function closeForm() {
                                document.getElementById("myForm").style.display = "none";
                        }
                        function Listchat() {
                                $.ajax({
                                        type: 'POST',
                                        url: '<?= Yii::$app->homeUrl ?>site/list-messages',
                                        data: {},
                                        success: function (data) {
                                                $(".direct-chat-messages").html(data);
                                        }
                                });
                        }

                        $(document).ready(function () {
                                $(document).on('submit', '#user-chat', function (e) {

                                        e.preventDefault();
                                        var data = $(this).serialize();
                                        var msg_data = $('#chat-message').val();

                                        $.ajax({
                                                type: 'POST',
                                                url: '<?= Yii::$app->homeUrl ?>site/user-chat',
                                                data: data,
                                                success: function (data) {
                                                        $('#user-chat')[0].reset();
                                                        var msg = '<div class="direct-chat-msg">\n\
                                                                          <div class="direct-chat-info clearfix">\n\
                                                                                <span class="direct-chat-name pull-left">Alexander Pierce</span>\n\
                                                                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>\n\
                                                                          </div>\n\
                                                                          <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image">\n\
                                                                          <div class="direct-chat-text">\n\
                                                                            ' + msg_data + '\n\
                                                                        </div>\n\
                                                                  </div>';
                                                        $(".direct-chat-messages").append(msg);
                                                }
                                        });

                                });
                                window.setInterval(function () {  /// call your function here
                                        Listchat();
                                }, 5000);


                        });

                </script>
                <?php $this->endBody() ?>
        </body>
</html>
<?php $this->endPage() ?>
