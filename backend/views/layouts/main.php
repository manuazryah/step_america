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
                                                                    
                                                                    <?php
                                                                        $step1 = \common\models\Step1::findOne(1)->page_title;
                                                                        $step2 = \common\models\Step2::findOne(1)->page_title;
                                                                        $step3 = \common\models\Step3::findOne(1)->page_title;
                                                                        $step4 = \common\models\Step4::findOne(1)->page_title;
                                                                        $step5 = \common\models\Step5::findOne(1)->page_title;
                                                                        $step6 = \common\models\Step6::findOne(1)->page_title;
                                                                        $step7 = \common\models\Step7::findOne(1)->page_title;
                                                                        $step8 = \common\models\Step8::findOne(1)->page_title;
                                                                        $step9 = \common\models\Step9::findOne(1)->page_title;
                                                                        $step10 = \common\models\Step10::findOne(1)->page_title;
                                                                        if (!isset($step1))
                                                                                $step1 = 'Step 1';
                                                                        if (!isset($step2))
                                                                                $step2 = 'Step 2';
                                                                        if (!isset($step3))
                                                                                $step3 = 'Step 3';
                                                                        if (!isset($step4))
                                                                                $step4 = 'Step 4';
                                                                        if (!isset($step5))
                                                                                $step5 = 'Step 5';
                                                                        if (!isset($step6))
                                                                                $step6 = 'Step 6';
                                                                        if (!isset($step7))
                                                                                $step7 = 'Step 7';
                                                                        if (!isset($step8))
                                                                                $step8 = 'Step 8';
                                                                        if (!isset($step9))
                                                                                $step9 = 'Step 9';
                                                                        if (!isset($step10))
                                                                                $step10 = 'Step 10';
                                                                        ?>
                                                                    
                                                                    
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step1, 30, "<br />\n"), ['/steps/step1/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step2, 30, "<br />\n"), ['/steps/step2/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step3, 30, "<br />\n"), ['/steps/step3/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step4, 30, "<br />\n"), ['/steps/step4/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step5, 30, "<br />\n"), ['/steps/step5/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step6, 30, "<br />\n"), ['/steps/step6/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step7, 30, "<br />\n"), ['/steps/step7/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step8, 30, "<br />\n"), ['/steps/step8/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step9, 30, "<br />\n"), ['/steps/step9/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> ' . wordwrap($step10, 30, "<br />\n"), ['/steps/step10/index'], ['class' => 'title']) ?>
                                                                        </li>

                                                                </ul>
                                                        </li>
                                                        <li class="<?= $controler == 'users' ? 'active' : '' ?>">
                                                                <?= Html::a('<i class="fa fa-users"></i> <span>Users</span>', ['/user/users/index'], ['class' => '']) ?>
                                                        </li>
                                                        <li class="treeview <?= $controler == 'agents' || $controler == 'claimant-party' || $controler == 'location' || $controler == 'size' || $controler == 'mode' || $controler == 'term-type' || $controler == 'currency' || $controler == 'country' || $controler == 'item-master' || $controler == 'hs-master' || $controler == 'settings' ? 'active' : '' ?>">
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
                                                                        
                                                                         <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Upload Category', ['/masters/step3-category/index'], ['class' => 'title']) ?>
                                                                        </li>
                                                                        
                                                                         <li>
                                                                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Upload Subcategory', ['/masters/step3-subcategory/index'], ['class' => 'title']) ?>
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
                                                                $message_count = common\models\Chat::find()->where(['status' => 1, 'user_id' => $user_val->id, 'message_status' => 1])->count();
                                                                ?>
                                                                <li>
                                                                        <a>
                                                                                <i class="menu-icon fa fa-user bg-red"></i>
                                                                                <div class="menu-info">
                                                                                        <h4 class="control-sidebar-subheading"><button class="open-button" onclick="register_popup('<?= $user_val->id ?>', '<?= $user_val->name ?>', '<?= $user_val->id ?>')"><?= $user_val->name ?>
                                                                                                        <?php if ($message_count > 0) { ?><span class="msg-count" id="msg-count-<?= $user_val->id ?>"><?= $message_count ?></span><?php } ?>
                                                                                                        <i class="fa fa-circle text-success online-status"></i>
                                                                                        </h4>
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

                                                        var chat_res = $.parseJSON(data);
                                                        var msg = '<div class="direct-chat-msg right">\n\
                                                                                <div class="direct-chat-info clearfix">\n\
                                                                                      <span class="direct-chat-name pull-right">Admin</span>\n\
                                                                                      <span class="direct-chat-timestamp pull-left">23 Jan 2:00 pm</span>\n\
                                                                                </div>\n\
                                                                                <img class="direct-chat-img" src="<?= Yii::$app->homeUrl; ?>img/dummy-user.png" alt="Message User Image">\n\
                                                                                <div class="direct-chat-text">\n\
                                                                                  ' + chat_res.result['chat_msg'] + '\n\
                                                                              </div>\n\
                                                                        </div>';
                                                        $('.chat_message_' + chat_res.result['chat_user_id']).val('');
                                                        $("#direct-chat-messages-" + chat_res.result['chat_user_id']).append(msg);
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






<script>
        //this function can remove a array element.
        Array.remove = function (array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
        };

        //this variable represents the total number of popups can be displayed according to the viewport width
        var total_popups = 0;
        var user_chats = [];

        //arrays of popups ids
        var popups = [];

        //this is used to close a popup
        function close_popup(id)
        {

                for (var i = 0; i < user_chats.length; i++)
                        if (user_chats[i] === id) {
                                user_chats.splice(i, 1);
                                break;
                        }
                for (var iii = 0; iii < popups.length; iii++)
                {
                        if (id == popups[iii])
                        {
                                Array.remove(popups, iii);

                                document.getElementById(id).style.display = "none";

                                calculate_popups();

                                return;
                        }
                }

        }

        //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
        function display_popups()
        {
                var right = 220;

                var iii = 0;
                for (iii; iii < total_popups; iii++)
                {
                        if (popups[iii] != undefined)
                        {
                                var element = document.getElementById(popups[iii]);
                                element.style.right = right + "px";
                                right = right + 320;
                                element.style.display = "block";
                        }
                }

                for (var jjj = iii; jjj < popups.length; jjj++)
                {
                        var element = document.getElementById(popups[jjj]);
                        element.style.display = "none";
                }
        }

        //creates markup for a new popup. Adds the id to popups array.
        function register_popup(id, name)
        {
                for (var iii = 0; iii < popups.length; iii++)
                {
                        //already registered. Bring it to front.
                        if (id == popups[iii])
                        {
                                Array.remove(popups, iii);

                                popups.unshift(id);

                                calculate_popups();


                                return;
                        }
                }
                $.ajax({
                        type: 'POST',
                        url: '<?= Yii::$app->homeUrl ?>site/list-messages',
                        data: {user_id: id},
                        success: function (data) {
                                var element = '<div class="popup-box chat-popup chat-popup" id="' + id + '">' + data + '\n\
                                                   </div>\n\
                                              </div>';
                                $('#msg-count-' + id).remove();
                                user_chats.push(id);
                                document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;
                                popups.unshift(id);
                                calculate_popups();

                        }


                });

        }

        //calculate the total number of popups suitable and then populate the toatal_popups variable.
        function calculate_popups()
        {
                var width = window.innerWidth;
                if (width < 540)
                {
                        total_popups = 0;
                } else
                {
                        width = width - 200;
                        //320 is width of a single popup box
                        total_popups = parseInt(width / 320);
                }

                display_popups();

        }

        //recalculate when window is loaded and also when window is resized.
        window.addEventListener("resize", calculate_popups);
        window.addEventListener("load", calculate_popups);


        function Listchat() {
                $.ajax({
                        type: 'POST',
                        url: '<?= Yii::$app->homeUrl ?>site/list-all-messages',
                        data: {user_chats: user_chats},
                        success: function (data) {
                                var chat_res = $.parseJSON(data);

                                $.each(chat_res, function (index, value) {
//                                        alert(index + ": " + value);
                                        $("#direct-chat-messages-" + index).html(value);
                                });
                        }
                });
        }

        $(document).ready(function () {
                window.setInterval(function () {  /// call your function here
                        Listchat();
                }, 5000);
        });

</script>

