<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Step3Subcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step3-subcategory-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'category')->dropDownList(\yii\helpers\ArrayHelper::map(common\models\Step3Category::find()->where(['status' => 1])->all(), 'id', 'category'), ['prompt' => '--Select--']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'subcategory')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>

                </div>
        </div>


        <div class="form-group action-btn-right">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
        </div>


        <?php ActiveForm::end(); ?>

</div>
