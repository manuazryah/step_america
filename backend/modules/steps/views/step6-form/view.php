<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Step6Form */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Step6 Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="step6-form-view">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?= Html::a('<span> Manage Step6 Form</span>', ['index'], ['class' => 'btn btn-warning mrg-bot-15']) ?>
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
            'title',
            'author',
            'date',
            'upload_doc',
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


