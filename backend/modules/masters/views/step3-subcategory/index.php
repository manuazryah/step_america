<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Step3SubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Step3 Subcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box table-responsive">
        <div class="step3-subcategory-index">
                <div class="box-header with-border">
                        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="box-body table-responsive">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= Html::a('<span> Create Subcategory</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
                        <?= \common\widgets\Alert::widget() ?>
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
//                                'category',
                                [
                                    'attribute' => 'category',
                                    'value' => function($model) {
                                            if (isset($model->category)) {
                                                    $category = common\models\Step3Category::findOne($model->category);
                                                    return $category->category;
                                            }
                                    }
                                ],
                                'subcategory',
                                    ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{update}'],
                            ],
                        ]);
                        ?>
                </div>
        </div>
        <!-- /.box-body -->
</div>
<!-- /.box -->

