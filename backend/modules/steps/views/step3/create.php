<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Step3 */

$this->title = 'Create Step3';
$this->params['breadcrumbs'][] = ['label' => 'Step3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step3</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step3-create">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

