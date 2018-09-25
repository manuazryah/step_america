<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = 'Change Password';
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?= Html::a('<span> Manage Admin Users</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
            </div>
        </div>
        <div class="admin-users-change-password">
            <div class="change-password-form form-inline">
                <?= \common\components\AlertMessageWidget::widget() ?>
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class='col-md-4 col-sm-6 col-xs-12'>
                        <?= $form->field($model, 'password')->passwordInput()->label('Old Password *') ?>

                    </div>
                    <div class='col-md-4 col-sm-6 col-xs-12'>
                        <?= $form->field($model, 'new_password')->passwordInput()->label('New Password *') ?>

                    </div>
                    <div class='col-md-4 col-sm-6 col-xs-12'>
                        <?= $form->field($model, 'confirm_password')->passwordInput()->label('Confirm Password *') ?>

                    </div>

                </div>
                <div class="form-group action-btn-right">
                    <?= Html::a('<span> Cancel</span>', ['index'], ['class' => 'btn btn-block cancel-btn']) ?>
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success create-btn']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>

        </div>
    </div>
    <!-- /.box-body -->
</div>