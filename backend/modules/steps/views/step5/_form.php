<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Step5 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step5-form form-inline">
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
                                <?php $projects = ArrayHelper::map(common\models\Projects::findAll(['status' => 1]), 'id', 'project_title'); ?>
                                <?= $form1->field($model_form, 'project')->dropDownList($projects, ['prompt' => '-Choose a Project-']) ?>

                        </div>
                        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                                <?= $form1->field($model_form, 'doc')->fileInput()->label('Upload Doc') ?>

                        </div>
                </div>

                <div class="form-group action-btn-right">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>


                <?php ActiveForm::end(); ?>
        </div>
        <div>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
                    'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
//                            'id',
                        'title',
                        'author',
                        'date',
                            [
                            'attribute' => 'project',
                            'value' => function($data) {
                                    return common\models\Projects::findOne($data->project)->project_title;
                            },
                            'filter' => ArrayHelper::map(common\models\Projects::find()->asArray()->all(), 'id', 'project_title'),
                        ],
                            [
                            'attribute' => 'doc',
                            'format' => 'raw',
                            'value' => function ($data) {
                                    if (isset($data->doc)) {
                                            $img = '<a target="_blank" href="' . Yii::$app->homeUrl . '../uploads/step5/' . $data->id . '/' . $data->doc . '"/>' . $data->doc . '</a>';
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