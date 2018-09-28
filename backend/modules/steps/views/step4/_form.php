<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Step4 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="step4-form form-inline">
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
        <br>

        <?php $form1 = ActiveForm::begin(); ?>
        <div class="panel-heading marg10">
                Add Projects
        </div>

        <div class="row">
                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form1->field($projects, 'project_title')->textInput(['maxlength' => true]) ?>

                </div>
                <?php if (isset($projects->image)) { ?>
                        <img src="<?= Yii::$app->homeUrl ?>../uploads/step4/<?= $projects->id ?>.<?= $projects->image; ?>?<?= rand() ?>" width="300" style="margin-left:15px"/>

                        <?php
                } elseif (!empty($model->img)) {
                        echo "";
                }
                ?>


                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form1->field($projects, 'image')->fileInput() ?>

                </div>

                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>     <?=
                        $form1->field($projects, 'microsite_page', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div>

                <div class="form-group action-btn-right">
                        <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
                </div>
        </div>


        <?php ActiveForm::end(); ?>
        <div class="row marg10">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                            'attribute' => 'image',
                            'format' => 'raw',
                            'value' => function ($data) {
                                    if (isset($data->image)) {
                                            $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/step4/' . $data->id . '.' . $data->image . '?' . rand() . '"/>';
                                    } else {
                                            $img = '';
                                    }
                                    return $img;
                            },
                        ],
                        'project_title',
//                        'microsite_page:ntext',
//                        'status',
                        // 'CB',
                        // 'UB',
                        // 'DOC',
                        // 'DOU',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{update}{delete}',
                            'buttons' => [
                                'update' => function ($url, $model) {
                                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                                    'title' => Yii::t('app', 'update'),
                                                    'class' => '',
                                        ]);
                                },
                                'delete' => function ($url, $model) {
                                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                                    'title' => Yii::t('app', 'Delete'),
                                                    'class' => '',
                                                    'data-confirm' => 'Are you sure you want to delete this item?',
                                        ]);
                                },
                            ],
                            'urlCreator' => function ($action, $model) {
                                    if ($action === 'update') {
                                            $url = Url::to(['index', 'id' => $model->id]);
                                            return $url;
                                    }
                                    if ($action === 'delete') {
                                            $url = Url::to(['del', 'id' => $model->id]);
                                            return $url;
                                    }
                            }
                        ],
                    ],
                ]);
                ?>
        </div>

</div>
