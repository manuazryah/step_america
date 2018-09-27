<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Step6Form */

$this->title = 'Create Step6 Form';
$this->params['breadcrumbs'][] = ['label' => 'Step6 Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step6 Form</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step6-form-create">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

