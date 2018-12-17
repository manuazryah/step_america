<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
?>
<!--<h1>/dashboard/index</h1>-->



<div class="page-header">
    <h3>Master Checklist</h3>
</div>
<div class="row">
    <div class="col-md-4 pad-right-0">
        <div class="check-list-box">
            <?= StepsWidget::widget(['step' => 3]) ?>
        </div>
    </div>
    <div class="col-md-8 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Step 3: <?= $step3->page_title ?></h5>
                    <ul>
                        <?php if (isset($user_step_details->step_3_completed) && $user_step_details->step_3_completed == 1) { ?><li><i class="fa fa-check"></i> Complete</li><?php } ?>
                        <?php if (isset($user_step_details->step_3_complete_date) && $user_step_details->step_3_complete_date != '') { ?><li>Date: <?= date('M d , Y', strtotime($user_step_details->step_3_complete_date)) ?></li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="step-body">
                <div class="step-description">
                    <?= $step3->description ?>
                </div>

                <div class="step-projects">
                    <?php if (isset($id) && $id != '') { ?>
                        <?php $form = ActiveForm::begin(['id' => 'step3-form']); ?>
                        <div class="row">
                            <div class='col-md-4 col-sm-6 col-xs-12'>    <?= $form->field($model, 'file')->fileInput() ?>
                                <?php if (isset($model->file)) { ?>
                                    <img src="<?= Yii::$app->homeUrl ?>uploads/step3/<?= $model->id ?>.<?= $model->file; ?>?<?= rand() ?>" width="100" height="100" style="margin-left:15px"/>

                                    <?php
                                } elseif (!empty($model->file)) {
                                    echo "";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-md-12 col-sm-12 col-xs-12'>    <?= $form->field($model, 'user_comment')->textarea()->label('Comment') ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class='col-md-4 col-sm-6 col-xs-12'>
                                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    <?php } ?>
                    <div class="row step3-uploaded-label">
                        <div class="col-sm-12 col-xs-12">
                            <div class="sa-inp-gp">
                                <label>Documents Uploaded</label>
                            </div>
                        </div>
                    </div>
                    <?php $form1 = ActiveForm::begin(['id' => 'step3-uploads-list']); ?>
                    <div class="row table-responsive step3-uploads-view">
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <?=
                            GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    [
                                        'attribute' => 'category',
                                        'value' => function($model) {
                                            if (isset($model->category)) {
                                                $category = common\models\Step3Category::findOne($model->category);
                                                return $category->category;
                                            }
                                        }
                                    ],
                                    [
                                        'attribute' => 'subcategory',
                                        'value' => function($model) {
                                            if (isset($model->subcategory)) {
                                                $subcategory = common\models\Step3Subcategory::findOne($model->subcategory);
                                                return $subcategory->subcategory;
                                            }
                                        }
                                    ],
                                    [
                                        'attribute' => 'file',
                                        'format' => 'raw',
                                        'header' => 'Uploaded file',
                                        'value' => function($model) {
                                            if (isset($model->file) && $model->file != ''){
                                                $img = '<a target="_blank" title="Click here to view" href="' . Yii::$app->homeUrl . '/uploads/step3/' . $model->id . '.' . $model->file . '"/>' . $model->file_name . '';
                                            return $img;
                                            }
                                        }
                                    ],
                                    [
                                        'attribute' => 'user_comment',
                                        'value' => function($model) {
                                            if (isset($model->user_comment) && $model->user_comment != '')
                                                return wordwrap($model->user_comment, 50, "\n");
                                            else
                                                return '';
                                        }
                                    ],
                                    [
                                        'attribute' => 'admin_comment',
                                        'value' => function($model) {
                                            if (isset($model->admin_comment) && $model->admin_comment != '')
                                                return wordwrap($model->admin_comment, 50, "\n");
                                            else
                                                return '';
                                        }
                                    ],
                                    [
                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'value' => function($model) {
                                            if (isset($model->status)) {
                                                if ($model->status == 0) {
                                                    return '<span id="status_1">Not Uploaded</span>';
                                                } else if ($model->status == 1) {
                                                    return '<span id="status_0">Uploaded</span>';
                                                } else if ($model->status == 2) {
                                                    return '<span id="status_2">Approved</span>';
                                                } else if ($model->status == 3) {
                                                    return '<span id="status_3">Rejected</span>';
                                                } else if ($model->status == 4) {
                                                    return '<span id="status_0">Uploaded</span>';
                                                }
                                            } else {
                                                return '';
                                            }
                                        }
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{download} ',
                                        'visibleButtons' => [
                                            'download' => function ($model, $key, $index) {
                                                return ($model->status == '2') || ($model->status == '1') || ($model->status == '4') ? false : true;
                                            }
                                        ],
                                        'buttons' => [
                                            'download' => function ($url, $model) {
                                                return Html::a('<span class="fa fa-upload"></span>', ['step3', 'id' => $model->id], ['title' => 'Upload','data-pjax' => '0',
                                                                ]
                                                );
                                            },
                                        ],
                                    ],
                                ],
                            ]);
                            ?>
                          <?php if($user_step_details->step3_user_submit!=1){ ?>  <input type="submit" name="uploads_completed_user" class="btn btn-primary"><?php } ?>
                        </div>
                    </div>

                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.category-change').change(function () {
            $.ajax({
                type: 'POST',
                cache: false,
                data: {category: $(this).val()},
                url: '<?= Yii::$app->homeUrl ?>dashboard/step3-subcategory',
                success: function (data) {
                    $('#step3uploads-subcategory').html(data);
                }
            });
        });
    });

</script>
