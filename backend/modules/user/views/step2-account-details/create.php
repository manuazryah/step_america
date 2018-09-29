<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Step2AccountDetails */

$this->title = 'Create Step2 Account Details';
$this->params['breadcrumbs'][] = ['label' => 'Step2 Account Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step2 Account Details</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step2-account-details-create">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

