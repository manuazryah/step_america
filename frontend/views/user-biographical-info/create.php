<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserBiographicalInfo */

$this->title = 'Create User Biographical Info';
$this->params['breadcrumbs'][] = ['label' => 'User Biographical Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-biographical-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
