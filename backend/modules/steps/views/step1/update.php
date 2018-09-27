<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step1 */

$this->title = 'Step 1 Content';
$this->params['breadcrumbs'][] = ['label' => 'Step1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <div class="panel-heading">
            Edit Page Content
        </div>
        <div class="step1-update">
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->