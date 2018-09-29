<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Step2AccountDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Step2 Account Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="step2-account-details-view">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?= Html::a('<span> Manage Step2 Account Details</span>', ['index'], ['class' => 'btn btn-warning mrg-bot-15']) ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary mrg-bot-15']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger mrg-bot-15',
            'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
            ],
            ]) ?>

            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                        'id',
            'user_id',
            'debit_acc_bank_name',
            'debit_acc_bank_institution_no',
            'debit_acc_transit_no',
            'debit_acc_swift_code',
            'debit_acc_no',
            'debit_acc_address:ntext',
            'company_name',
            'benefi_acc_bank_name',
            'benefi_acc_bank_institution_no',
            'benefi_acc_transit_no',
            'benefi_acc_swift_code',
            'benefi_acc_no',
            'benefi_acc_address:ntext',
            'invoice',
            'currency',
            'exchange_rate',
            'transfer_amount',
            'reference_no',
            'invoice_file',
            'status',
            'CB',
            'UB',
            'DOC',
            'DOU',
            ],
            ]) ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->


