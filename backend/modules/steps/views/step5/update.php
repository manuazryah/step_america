<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step5 */

$this->title = 'Step 5 Content';
$this->params['breadcrumbs'][] = ['label' => 'Step5s', 'url' => ['index']];
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
        <div class="step5-update">
            <?=
            $this->render('_form', [
                'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'model_form' => $model_form,
            ])
            ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->