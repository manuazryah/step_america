<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Step6 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step6-form form-inline">
        <?= \common\components\AlertMessageWidget::widget() ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'page_title')->textInput(['maxlength' => true]) ?>

                </div>
                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

                </div>

                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'project_title')->textInput(['maxlength' => true]) ?>

                </div>
        </div>

        <div class="form-group action-btn-right">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>


        <?php ActiveForm::end(); ?>

        <div>
                <button type="button" id='hideshow' class="btn btn-block btn-warning">Add New Form</button>
        </div>

        <div id='content' style="display: none">
                <?php $form1 = ActiveForm::begin(); ?>
                <div class="row">
                        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                <?= $form1->field($model_form, 'title')->textInput(['maxlength' => true]) ?>

                        </div>
                        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                <?= $form1->field($model_form, 'author')->textInput(['maxlength' => true]) ?>

                        </div>
                        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                <?php
                                if ($model_form->date == '') {
                                        $model_form->date = date('Y-m-d');
                                }
                                ?>
                                <?=
                                $form1->field($model_form, 'date')->widget(DatePicker::classname(), [
                                    'type' => DatePicker::TYPE_INPUT,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd',
                                    ]
                                ]);
                                ?>

                        </div>

                        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                <?= $form1->field($model_form, 'upload_doc')->fileInput() ?>

                        </div>
                </div>

                <div class="form-group action-btn-right">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>


                <?php ActiveForm::end(); ?>
        </div>


        <div class="row marg10">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                        'title',
                        'author',
                        'date',
                            [
                            'attribute' => 'upload_doc',
                            'format' => 'raw',
                            'value' => function ($data) {
                                    if (isset($data->upload_doc)) {
                                            $img = '<a target="_blank" href="' . Yii::$app->homeUrl . '../uploads/step6/' . $data->id . '/' . $data->upload_doc . '"/>' . $data->upload_doc . '</a>';
                                            return $img;
                                    } else {
                                            return '';
                                    }
                            },
                        ],
                            ['class' => 'yii\grid\ActionColumn',
                            'template' => '{delete}',
                        ],
                    ],
                ]);
                ?>
        </div>

</div>


<script>
        jQuery(document).ready(function () {
                jQuery('#hideshow').on('click', function (event) {
                        jQuery('#content').toggle('show');
                });
        });
</script>