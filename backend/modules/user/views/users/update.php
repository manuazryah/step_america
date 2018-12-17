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
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->