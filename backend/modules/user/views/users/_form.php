<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

        </div>
        <?php if ($model->isNewRecord) { ?>
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                <a onclick="show()" class="show-pass"><img src="<?= yii::$app->homeUrl; ?>img/Oyk1g.png" id="EYE"></a>

            </div>
        <?php }
        ?>
    </div>


    <div class="form-group action-btn-right">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
<script>
    function show() {
        var a = document.getElementById("users-password");
        var b = document.getElementById("EYE");
        if (a.type == "password") {
            a.type = "text";
            b.src = "<?= Yii::$app->homeUrl; ?>img/waw4z.png";
        } else {
            a.type = "password";
            b.src = "<?= Yii::$app->homeUrl; ?>img/Oyk1g.png";
        }
    }
</script>
