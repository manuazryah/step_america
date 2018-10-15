<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$controler = Yii::$app->controller->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>img/fav.png" type="image/x-icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= yii::$app->homeUrl; ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><img class="img-responsive" src="<?= yii::$app->homeUrl; ?>img/fav.png" alt="" style="width: 51px;margin: 2px auto;margin-left: 13px;"/></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img class="img-responsive" src="<?= yii::$app->homeUrl; ?>img/logo.png" alt="" /></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= Yii::$app->homeUrl; ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= Yii::$app->user->identity->user_name ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= Yii::$app->homeUrl; ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?= Yii::$app->user->identity->user_name ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?= Html::a('Profile', ['/admin/admin-users/update', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-default btn-flat']) ?>
                                        </div>
                                        <div class="pull-right">
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
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-comments"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu" data-widget="tree">
                        <?php
                        if (Yii::$app->user->identity->post_id == 1 || Yii::$app->session['post']['admin'] == 1) {
                            ?>
                            <li class="treeview <?= $controler == 'admin-posts' || $controler == 'admin-users' || $controler == 'site' ? 'active' : '' ?>">
                                <a href="">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Administration</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                    </li>

                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview <?= $controler == 'step1' || $controler == 'step2' || $controler == 'step3' || $controler == 'step4' || $controler == 'step5' || $controler == 'step6' || $controler == 'step7' || $controler == 'step8' || $controler == 'step9' || $controler == 'step10' ? 'active' : '' ?>">
                                <a href="">
                                    <i class="fa fa-bar-chart"></i>
                                    <span>Steps Content</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 1', ['/steps/step1/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 2', ['/steps/step2/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 3', ['/steps/step3/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 4', ['/steps/step4/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 5', ['/steps/step5/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 6', ['/steps/step6/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 7', ['/steps/step7/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 8', ['/steps/step8/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 9', ['/steps/step9/index'], ['class' => 'title']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Step 10', ['/steps/step10/index'], ['class' => 'title']) ?>
                                    </li>

                                </ul>
                            </li>
                            <li class="<?= $controler == 'users' ? 'active' : '' ?>">
                                <?= Html::a('<i class="fa fa-users"></i> <span>Users</span>', ['/user/users/index'], ['class' => '']) ?>
                            </li>
                            <li class="treeview <?= $controler == 'agents' || $controler == 'claimant-party' || $controler == 'location' || $controler == 'size' || $controler == 'mode' || $controler == 'term-type' || $controler == 'currency' || $controler == 'country' || $controler == 'item-master'|| $controler == 'hs-master'|| $controler == 'settings' ? 'active' : '' ?>">
                                <a href="">
                                    <i class="fa fa-database"></i>
                                    <span>Masters</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Country', ['/masters/country/index'], ['class' => 'title']) ?>
                                    </li>
                                    

                                </ul>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?= $content ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2018-2019 <a href="http://azryah.com/">epitome.ae</a>.</strong> All rights
                reserved.
            </footer>
            <div class="chat-popup" id="myForm">

            </div>
            <aside class="control-sidebar control-sidebar-dark">
                <?php
                $online_chats = common\models\Chat::find()->where(['status' => 1])->all();
                $chat_arr = [];
                if (!empty($online_chats)) {
                    foreach ($online_chats as $online_chat) {
                        if (!empty($online_chat)) {
                            $chat_arr[] = $online_chat->user_id;
                        }
                    }
                }
                $users = \common\models\Users::find()->where(['id' => $chat_arr])->all();
                ?>
                <ul class="control-sidebar-menu">
                    <?php
                    if (!empty($users)) {
                        foreach ($users as $user_val) {
                            if (!empty($user_val)) {
                                ?>
                                <li>
                                    <a>
                                        <i class="menu-icon fa fa-user bg-red"></i>

                                        <div class="menu-info">
                                            <h4 class="control-sidebar-subheading"><button class="open-button open-chat" data-val="<?= $user_val->id ?>"><?= $user_val->name ?></button> <i class="fa fa-circle text-success online-status"></i></h4>
                                        </div>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </aside>
            <!-- /.control-sidebar -->
            <div class="control-sidebar-bg"></div>
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
                $(document).on('click', '.open-chat', function (e) {
                    var user = $(this).attr('data-val');
                    $.ajax({
                        type: 'POST',
                        url: '<?= Yii::$app->homeUrl ?>site/list-messages',
                        data: {user_id: user},
                        success: function (data) {
                            document.getElementById("myForm").style.display = "block";
                            $("#myForm").html(data);
                        }
                    });
                });
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
                            var msg = '<div class="direct-chat-msg right">\n\
                                                                        <div class="direct-chat-info clearfix">\n\
                                                                              <span class="direct-chat-name pull-right">Alexander Pierce</span>\n\
                                                                              <span class="direct-chat-timestamp pull-left">23 Jan 2:00 pm</span>\n\
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
//                window.setInterval(function () {  /// call your function here
//                    Listchat();
//                }, 5000);


            });

        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

