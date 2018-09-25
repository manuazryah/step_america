<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdminUsers */

$this->title = 'Update Admin Users: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Admin Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?= Html::a('<span> Manage Admin Users</span>', ['index'], ['class' => 'btn btn-block manage-btn', 'style' => 'float:left;']) ?>
                <?= Html::a('<span> Change Password</span>', ['change-password'], ['class' => 'btn btn-block btn-warning', 'style' => 'float:left;margin-left:10px;margin-top: 0px;']) ?>
            </div>
        </div>
        <div class="admin-users-update">
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