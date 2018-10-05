<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step4 */

$this->title = 'Step 4 Content';
$this->params['breadcrumbs'][] = ['label' => 'Step4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit Page Content</h3>
    </div>
    <div class="box-body">
        <div class="step4-update">
            <?=
            $this->render('_form', [
                'model' => $model,
                'projects' => $projects,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ])
            ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->