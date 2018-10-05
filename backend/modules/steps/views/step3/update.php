<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step3 */

$this->title = 'Step 3 Content';
$this->params['breadcrumbs'][] = ['label' => 'Step3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit Page Content</h3>
    </div>
    <div class="box-body">
        <div class="step3-update">
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