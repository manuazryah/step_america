<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step5Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step5-form-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'date')->textInput() ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'project')->textInput() ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'doc')->textInput(['maxlength' => true]) ?>

</div>    </div>


    <div class="form-group action-btn-right">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
