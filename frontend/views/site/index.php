<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Step America';
?>
<div class="site-index">

    <div class="site-login">
        <img class="img-responsive" src="<?= yii::$app->homeUrl; ?>img/logo.png" alt="" />
        <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="col-md-12">
                <?= $form->field($model, 'user_name')->textInput(['autofocus' => true]) ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
