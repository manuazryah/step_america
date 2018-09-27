<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Step7 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Step7s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="step7-view">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?= Html::a('<span> Manage Step7</span>', ['index'], ['class' => 'btn btn-warning mrg-bot-15']) ?>
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
            'escrow_agent',
            'llc',
            'administrative_agent',
            'bank_name',
            'bank_address',
            'bank_institution',
            'bank_branch',
            'bank_account',
            'swift_id',
            'contact_name',
            'contact',
            'ABA',
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


