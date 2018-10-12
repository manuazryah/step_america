<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Header */

$this->title = 'Header';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">

            <div class="panel-body">
                <?= common\components\UserTabWidget::widget(['step' => 4]) ?>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'street_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'appt_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'country')->textInput() ?>

                <?= $form->field($model, 'daytime_contact_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email_1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'foreign_address')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'foreign_address_native')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'deportation_proceedings')->textInput() ?>

                <?= $form->field($model, 'explain_details')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'worked_in_us')->textInput() ?>

                <?= $form->field($model, 'worked_explain_details')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save as Draft', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

