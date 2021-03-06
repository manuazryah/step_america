<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\AdminPosts;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdminUsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
<div class="box table-responsive">
    <div class="admin-users-index">
        <div class="box-body">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= Html::a('<span> Create Admin Users</span>', ['create'], ['class' => 'btn btn-block manage-btn']) ?>
            <button class="btn btn-white" id="search-option" style="float: right;background: #7fb335;color: #fff;">
                <i class="linecons-search"></i>
                <span>Search</span>
            </button>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
//                            'id',
                    [
                        'attribute' => 'post_id',
                        'label' => 'Post Name',
                        'value' => 'post.post_name',
                        'filter' => ArrayHelper::map(AdminPosts::find()->asArray()->all(), 'id', 'post_name'),
                    ],
                    'name',
                    'email:email',
                    'phone_number',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => 'Action',
                        'template' => '{view}{update}{delete}',
                    ],
                ],
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

