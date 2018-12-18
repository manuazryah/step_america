<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = 'Update Users: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box">
        <div class="box-body">
                <div class="row">
                        <div class="col-md-12">
                                <?= Html::a('<span> Manage Users</span>', ['index'], ['class' => 'btn btn-block manage-btn', 'style' => 'float:left;']) ?>
                                <?= Html::a('<span> Change Password</span>', ['change-password', 'id' => Yii::$app->EncryptDecrypt->Encrypt('encrypt', $model->id)], ['class' => 'btn btn-block btn-danger', 'style' => 'float:left;margin-left:10px;margin-top: 0px;']) ?>
                        </div>
                </div>
                <div class="users-update">
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>
                        <input type="hidden" id="user_mode" value="<?= $model->id ?>">
                </div>
        </div>
        <!-- /.box-body -->
</div>
<!-- /.box -->
<script>
        $(document).ready(function () {
                $('#users-user_name').change(function () {
                        var username = $(this).val();
                        var mode = $('#user_mode').val();
                        $.ajax({
                                type: 'POST',
                                cache: false,
                                data: {username: username, mode: mode},
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
                        e.preventDefault();
                        var username = $('#users-user_name').val();
                        var mode = $('#user_mode').val();
                        $.ajax({
                                type: 'POST',
                                cache: false,
                                data: {username: username, mode: mode},
                                url: '<?= Yii::$app->homeUrl ?>user/users/check-username',
                                success: function (data) {
                                        if (data == 1) {
                                                $(".field-users-user_name").append("<p class='username-error' style='color: #dd4b39;position: absolute;font-size: 12px;'>Username already exists, choose another one</p>");
                                                $("#users-user_name").css({"border-color": "#dd4b39"});
                                                return false;
                                        } else {
                                                $("#users-user_name").css({"border-color": "rgb(210, 214, 222)"});
                                                $('.username-error').remove();
                                                return true;
                                        }
                                }
                        });
                });

        });
</script>