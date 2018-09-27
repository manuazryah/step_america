<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step8 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step8-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'page_title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

        </div>
    </div>

    <div class="form-group action-btn-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
