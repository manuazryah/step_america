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
        <div id="wrapper">
            <header>
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                    <div class="nav-box">
                        <div class="nav-left">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <?= Html::a('<i class="fa fa-home"></i>', ['/dashboard/index'], ['class' => 'btn btn-home']) ?>
                                </li>
                                <li class="nav-item">
                                    <?= Html::a('Master Checklist', ['/dashboard/home'], ['class' => 'btn btn-checklist']) ?>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-middle">
                            <a class="navbar-brand" href="#">
                                <img src="<?= yii::$app->homeUrl; ?>img/logo.png" alt="Logo" style="">
                            </a>
                        </div>
                        <div class="nav-right">
                            <ul class="navbar-nav">
                                <li class="dropdown notifications-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="label label-warning">10</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have 10 notifications</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-footer"><a href="#">View all</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown notifications-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="label label-success">10</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have 10 Messages</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-footer"><a href="#">View all</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= yii::$app->homeUrl; ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                                        <span class="hidden-xs user-title">testing</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img src="<?= yii::$app->homeUrl; ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            <p>
                                                testing                                                                                </p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                                                <?php
                                                echo ''
                                                . Html::beginForm(['/site/logout'], 'post', ['style' => 'margin-bottom: 0px;']) . '<a class="btn btn-default btn-flat">'
                                                . Html::submitButton(
                                                        'Sign out', ['class' => 'sign-out-btn']
                                                ) . '</a>'
                                                . Html::endForm()
                                                . '';
                                                ?>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="content-box">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>

            <footer class="footer">
                <div class="container">
                    <p class="pull-center">Copyright @ 2018-2019 STEP AMERICA. All rights reserved</p>
                </div>
            </footer>
            <button class="open-button" onclick="openForm()"><img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>img/upbutton.jpg" alt="Chat Button"></button>

            <div class="chat-popup" id="myForm">
                <form method="get" class="form-container" id="user-chat">
                    <div class="box-header with-border">
                        <h3 class="box-title">We are live</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="direct-chat-messages">
                    </div>

                    <div class="box-footer">

                        <div class="input-group">
                            <input type="text" name="Chat[message]" placeholder="Type Message ..." class="form-control" id='chat-message' required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-flat">Send</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
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
                                                                        <span class="direct-chat-name pull-left"><?= Yii::$app->user->identity->name ?></span>\n\
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
