<?php
/* @var $this yii\web\View */

use common\components\StepsWidget;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>


<div class="row">
    <div class="col-md-12 pad-left-0">
        <div class="step-content">
            <div class="step-head">
                <div class="step-heading">
                    <h5 class="step-title">Notifications</h5>
                </div>
            </div>
            <div class="step-body">
                <div class="step-info notification-table table-responsive ">
                    <?php Pjax::begin(['id'=>'notification-list']); ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'rowOptions' => function($model) {
                            return ['class' => 'tr_'.$model->id];
                        },
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'message',
                                'header' => 'Notification',
                            ],
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{approve}',
                                'buttons' => [
                                    'approve' => function ($url, $model) {
                                        if ($model->status == 0) {
                                            return '<input type="checkbox" id="' . $model->id . '"  class="iswitch iswitch-secondary notification-closed" title="Mrak it as read" style="float:right;">';
                                        }
                                    },
                                ],
                                'urlCreator' => function ($action, $model) {
                                    if ($action === 'approve') {
                                        $url = Url::to(['approve', 'id' => $model->id]);
                                        return $url;
                                    }
                                }
                            ],
                        ],
                    ]);
                    ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .summary{
        display: none;
    }
</style>

<script>
    $(document).ready(function () {
        $('.notification-closed').click(function () {
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: '<?= Yii::$app->homeUrl ?>site/notification-status',
                data: {id: id},
                success: function (data) {
//                    $(".tr_"+id).hide();
                    	$.pjax.reload({container: '#notification-list', timeout: false});
                }
            });
        });
    });
</script>