<?php

use yii\helpers\Html;
use yii\helpers\Url;

$action = Yii::$app->controller->action->id;
//exit;
?>

<ul>
    <li class="<?= $action == 'home' ? 'active' : '' ?>"><?= Html::a('1. ' . $step1, ['/dashboard/home']) ?></li>
    <li class="<?= $action == 'step2' ? 'active' : '' ?>"><?= Html::a('2. ' . $step2, ['/dashboard/step2']) ?></li>
    <li class="<?= $action == 'step3' ? 'active' : '' ?>"><?= Html::a('3. ' . $step3, ['/dashboard/step3']) ?></li>
    <li class="<?= $action == 'step4' ? 'active' : '' ?>"><?= Html::a('4. ' . $step4, ['/dashboard/step4']) ?></li>
    <li class="<?= $action == 'step5' ? 'active' : '' ?>"><?= Html::a('5. ' . $step5, ['/dashboard/step5']) ?></li>
    <li class="<?= $action == 'step6' ? 'active' : '' ?>"><?= Html::a('6. ' . $step6, ['/dashboard/step6']) ?></li>
    <li class="<?= $action == 'step7' ? 'active' : '' ?>"><?= Html::a('7. ' . $step7, ['/dashboard/step7']) ?></li>
    <li class="<?= $action == 'step8' ? 'active' : '' ?>"><?= Html::a('8. ' . $step8, ['/dashboard/step8']) ?></li>
    <li class="<?= $action == 'step9' ? 'active' : '' ?>"><?= Html::a('9. ' . $step9, ['/dashboard/step9']) ?></li>
    <li class="<?= $action == 'step10' ? 'active' : '' ?>"><?= Html::a('10. ' . $step10, ['/dashboard/step10']) ?></li>
</ul>