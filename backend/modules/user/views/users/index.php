<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box table-responsive">
    <div class="users-index">
        <div class="box-body table-responsive">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= Html::a('<span> Create Users</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
            <?= common\widgets\Alert::widget() ?>
            <button class="btn btn-white" id="search-option" style="float: right;background: #7fb335;color: #fff;">
                <i class="linecons-search"></i>
                <span>Search</span>
            </button>
            <?php
            $gridColumns = [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'user_name',
                'email:email',
                 'phone',
                'current_step',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action',
                    'template' => '{update}',
                ],
            ];

            $exportColumns = [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'user_name',
                'email:email',
                'phone',
                'address',
            ];

            echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $exportColumns
            ]);

            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => $gridColumns
            ]);
            ?>


        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

