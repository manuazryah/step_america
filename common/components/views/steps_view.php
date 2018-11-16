<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<ul>
    <li class="<?= $step == 1 ? 'active' : '' ?>"><?= Html::a('1. ' . $step1, ['/dashboard/home']) ?>
        <?php if (isset($user_steps->step_1_completed) && $user_steps->step_1_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_1_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 2 ? 'active' : '' ?>"><?= Html::a('2. ' . $step2, ['/dashboard/step2']) ?>
        <?php if (isset($user_steps->step_2_completed) && $user_steps->step_2_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_2_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 3 ? 'active' : '' ?>"><?= Html::a('3. ' . $step3, ['/dashboard/step3']) ?>
        <?php if (isset($user_steps->step_3_completed) && $user_steps->step_3_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_3_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 4 ? 'active' : '' ?>"><?= Html::a('4. ' . $step4, ['/dashboard/step4']) ?>
        <?php if (isset($user_steps->step_4_completed) && $user_steps->step_4_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_4_complete_date)) ?></p><?php } ?></li>
    <li class="<?= $step == 5 ? 'active' : '' ?>"><?= Html::a('5. ' . $step5, ['/dashboard/step5']) ?>
        <?php if (isset($user_steps->step_5_completed) && $user_steps->step_5_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_5_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 6 ? 'active' : '' ?>"><?= Html::a('6. ' . $step6, ['/dashboard/step6']) ?>
        <?php if (isset($user_steps->step_6_completed) && $user_steps->step_6_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_6_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 7 ? 'active' : '' ?>"><?= Html::a('7. ' . $step7, ['/dashboard/step7']) ?>
        <?php if (isset($user_steps->step_7_completed) && $user_steps->step_7_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_7_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 8 ? 'active' : '' ?>"><?= Html::a('8. ' . $step8, ['/dashboard/step8']) ?>
        <?php if (isset($user_steps->step_8_completed) && $user_steps->step_8_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_8_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 9 ? 'active' : '' ?>"><?= Html::a('9. ' . $step9, ['/dashboard/step9']) ?>
        <?php if (isset($user_steps->step_9_completed) && $user_steps->step_9_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_9_complete_date)) ?></p><?php } ?>
    </li>
    <li class="<?= $step == 10 ? 'active' : '' ?>"><?= Html::a('10. ' . $step10, ['/dashboard/step10']) ?>
        <?php if (isset($user_steps->step_10_completed) && $user_steps->step_10_completed == 1) { ?><p class="sub-text">Status:<b><i class="fa fa-check"></i>Complete</b><span>|</span> Date: <?= date('M d, Y', strtotime($user_steps->step_10_complete_date)) ?></p><?php } ?>
    </li>
</ul>