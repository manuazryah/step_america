<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Step2AccountDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Step2 Account Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box table-responsive">
    <div class="step2-account-details-index">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body table-responsive">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= Html::a('<span> Create Step2 Account Details</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'user_id',
                    'debit_acc_bank_name',
                    'debit_acc_bank_institution_no',
                    'debit_acc_transit_no',
                    // 'debit_acc_swift_code',
                    // 'debit_acc_no',
                    // 'debit_acc_address:ntext',
                    // 'company_name',
                    // 'benefi_acc_bank_name',
                    // 'benefi_acc_bank_institution_no',
                    // 'benefi_acc_transit_no',
                    // 'benefi_acc_swift_code',
                    // 'benefi_acc_no',
                    // 'benefi_acc_address:ntext',
                    // 'invoice',
                    // 'currency',
                    // 'exchange_rate',
                    // 'transfer_amount',
                    // 'reference_no',
                    // 'invoice_file',
                    // 'status',
                    // 'CB',
                    // 'UB',
                    // 'DOC',
                    // 'DOU',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

