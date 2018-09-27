<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Step5Form */

$this->title = 'Create Step5 Form';
$this->params['breadcrumbs'][] = ['label' => 'Step5 Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step5 Form</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step5-form-create">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

