<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Step7 */

$this->title = 'Create Step7';
$this->params['breadcrumbs'][] = ['label' => 'Step7s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=  Html::a('<span> Manage Step7</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
        <div class="step7-create">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

