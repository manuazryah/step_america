<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = 'Create Users';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box">
    <div class="box-body">
        <?= Html::a('<span> Manage Users</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="users-create">
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<script>
    $(document).ready(function () {
        $('#users-user_name').change(function () {
            var username = $(this).val();
            $.ajax({
                type: 'POST',
                cache: false,
                data: {username: username, mode: 'create'},
                url: '<?= Yii::$app->homeUrl ?>user/users/check-username',
                success: function (data) {
                    if (data == 1) {
                        $(".field-users-user_name").append("<p class='username-error' style='color: #dd4b39;position: absolute;font-size: 12px;'>Username already exists, choose another one</p>");
                        $("#users-user_name").css({"border-color": "#dd4b39"});
                    } else {
                        $("#users-user_name").css({"border-color": "rgb(210, 214, 222)"});
                        $('.username-error').remove();
                    }
                }
            });
        });

        $(document).on('submit', '#create-user', function (e) {
            var username = $('#users-user_name').val();
            $.ajax({
                url: '<?= Yii::$app->homeUrl ?>user/users/check-username',
                'async': false,
                'type': "POST",
                'global': false,
                'dataType': 'html',
                data: {username: username, mode: 'create'},
                beforeSend: function () {
                }
            })
                    .done(function (data) {
                        if (data == 1) {
                            $('.username-error').remove();
                            $(".field-users-user_name").append("<p class='username-error' style='color: #dd4b39;position: absolute;font-size: 12px;'>Username already exists, choose another one</p>");
                            $("#users-user_name").css({"border-color": "#dd4b39"});
                             e.preventDefault();
                            return false;
                        } else {
                            $("#users-user_name").css({"border-color": "rgb(210, 214, 222)"});
                            $('.username-error').remove();
                            return true;
                        }

                    });
        });

    });
</script>

