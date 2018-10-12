<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserBiographicalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Biographical Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-biographical-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Biographical Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'first_name',
            'middle_name',
            'last_name',
            //'other_name',
            //'gender',
            //'dob',
            //'state_of_birth',
            //'country_of_birth',
            //'country_of_citizenship',
            //'other_country_citizenship',
            //'date_of_last_entry',
            //'form_number',
            //'social_security_number',
            //'alien_reg_number',
            //'immigration_status',
            //'immigration_expiration_date',
            //'passport_number',
            //'issuance_country',
            //'issuance_date',
            //'expiration_date',
            //'permanent_resident',
            //'family_members',
            //'expiration_on_form',
            //'visa_number',
            //'visa_issuance_date',
            //'visa_issuance_country',
            //'issued_any_visa',
            //'explain_visa_details:ntext',
            //'status',
            //'CB',
            //'UB',
            //'DOC',
            //'DOU',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
