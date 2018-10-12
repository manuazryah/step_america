<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserBiographicalInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Biographical Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-biographical-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'first_name',
            'middle_name',
            'last_name',
            'other_name',
            'gender',
            'dob',
            'state_of_birth',
            'country_of_birth',
            'country_of_citizenship',
            'other_country_citizenship',
            'date_of_last_entry',
            'form_number',
            'social_security_number',
            'alien_reg_number',
            'immigration_status',
            'immigration_expiration_date',
            'passport_number',
            'issuance_country',
            'issuance_date',
            'expiration_date',
            'permanent_resident',
            'family_members',
            'expiration_on_form',
            'visa_number',
            'visa_issuance_date',
            'visa_issuance_country',
            'issued_any_visa',
            'explain_visa_details:ntext',
            'status',
            'CB',
            'UB',
            'DOC',
            'DOU',
        ],
    ]) ?>

</div>
