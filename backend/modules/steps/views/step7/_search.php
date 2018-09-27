<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step7Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step7-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'page_title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'escrow_agent') ?>

    <?= $form->field($model, 'llc') ?>

    <?php // echo $form->field($model, 'administrative_agent') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'bank_address') ?>

    <?php // echo $form->field($model, 'bank_institution') ?>

    <?php // echo $form->field($model, 'bank_branch') ?>

    <?php // echo $form->field($model, 'bank_account') ?>

    <?php // echo $form->field($model, 'swift_id') ?>

    <?php // echo $form->field($model, 'contact_name') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'ABA') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
