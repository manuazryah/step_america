<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Step3CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box table-responsive">
        <div class="step3-category-index">
                <div class="box-header with-border">
                        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="box-body table-responsive">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= Html::a('<span> Create  Category</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
                        <button class="btn btn-white" id="search-option" style="float: right;background: #7fb335;color: #fff;">
                         <i class="linecons-search"></i>
                         <span>Search</span>
                        </button>
                        
                        <?= \common\widgets\Alert::widget() ?>
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                'category',
                                    ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{update}'],
                            ],
                        ]);
                        ?>
                </div>
        </div>
</div>


<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

