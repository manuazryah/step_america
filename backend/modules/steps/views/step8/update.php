<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step8 */

$this->title = 'Update Step8: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Step8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step8</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step8-update">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->