<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Step1 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Step1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="step1-view">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?= Html::a('<span> Manage Step1</span>', ['index'], ['class' => 'btn btn-warning mrg-bot-15']) ?>
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
            'page_title',
            'description:ntext',
            'drafted_on',
            'drafted_by',
            'retainer_contract_agreement',
            'contract_agreement_drafted_on',
            'contract_agreement_drafted_by',
            'contract_agreement_modified_on',
            'contract_agreement_modified_by',
            'dhp_agreement',
            'questionaire_drafted_on',
            'questionaire_drafted_by',
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


