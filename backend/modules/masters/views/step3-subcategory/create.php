<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Step3Subcategory */

$this->title = 'Create Subcategory';
$this->params['breadcrumbs'][] = ['label' => 'Step3 Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
        <div class="box-header with-border">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
                <?= Html::a('<span> Manage Subcategory</span>', ['index'], ['class' => 'btn btn-block manage-btn']) ?>
                <div class="step3-subcategory-create">
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

