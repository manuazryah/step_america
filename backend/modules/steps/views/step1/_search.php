<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'page_title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'drafted_on') ?>

    <?= $form->field($model, 'drafted_by') ?>

    <?php // echo $form->field($model, 'retainer_contract_agreement') ?>

    <?php // echo $form->field($model, 'contract_agreement_drafted_on') ?>

    <?php // echo $form->field($model, 'contract_agreement_drafted_by') ?>

    <?php // echo $form->field($model, 'contract_agreement_modified_on') ?>

    <?php // echo $form->field($model, 'contract_agreement_modified_by') ?>

    <?php // echo $form->field($model, 'dhp_agreement') ?>

    <?php // echo $form->field($model, 'questionaire_drafted_on') ?>

    <?php // echo $form->field($model, 'questionaire_drafted_by') ?>

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
