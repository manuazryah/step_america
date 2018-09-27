<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Step1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Step1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box table-responsive">
    <div class="step1-index">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body table-responsive">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
            <?=  Html::a('<span> Create Step1</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
                                        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                            'id',
            'page_title',
            'description:ntext',
            'drafted_on',
            'drafted_by',
            // 'retainer_contract_agreement',
            // 'contract_agreement_drafted_on',
            // 'contract_agreement_drafted_by',
            // 'contract_agreement_modified_on',
            // 'contract_agreement_modified_by',
            // 'dhp_agreement',
            // 'questionaire_drafted_on',
            // 'questionaire_drafted_by',
            // 'status',
            // 'CB',
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

