<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Step2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Step2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box table-responsive">
    <div class="step2-index">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body table-responsive">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
            <?=  Html::a('<span> Create Step2</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
                                        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                            'id',
            'page_title',
            'description:ntext',
            'status',
            'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',

                ['class' => 'yii\grid\ActionColumn'],
                ],
                ]); ?>
                                </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

