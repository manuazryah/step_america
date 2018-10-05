<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="col-md-12">
            <?php
            $fieldOptions2 = [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
            ];
            ?>
            <?= $form->field($model, 'user_name', $fieldOptions2)->label('Password')->textInput() ?>
            <?php // $form->field($model, 'user_name')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="col-md-12">
            <?php
            $fieldOptions3 = [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
            ];
            ?>
            <?= $form->field($model, 'password', $fieldOptions3)->label('Password')->passwordInput() ?>
            <?php // $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
