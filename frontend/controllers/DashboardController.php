<?php

namespace frontend\controllers;

use common\models\Step1;
use common\models\Step2;
use common\models\Step3;
use common\models\Step4;
use common\models\Step5;
use common\models\Step6;
use common\models\Step7;
use common\models\Step8;
use common\models\Step9;
use common\models\Step10;
use common\models\Step6Form;
use common\models\Projects;

class DashboardController extends \yii\web\Controller {

        public function actionIndex() {
                $step1 = Step1::findOne(1);
                return $this->render('index', ['step1' => $step1]);
        }

        public function actionStep2() {
                $step2 = Step2::findOne(1);
                return $this->render('step2', ['step2' => $step2]);
        }

        public function actionStep3() {
                $step3 = Step3::findOne(1);
                return $this->render('step3', ['step3' => $step3]);
        }

        public function actionStep4() {
                $step4 = Step4::findOne(1);
                $projects = Projects::find()->all();
                return $this->render('step4', ['step4' => $step4, 'projects' => $projects]);
        }

        public function actionStep5() {
                $step5 = Step5::findOne(1);
                return $this->render('step5', ['step5' => $step5]);
        }

        public function actionStep6() {
                $step6 = Step6::findOne(1);
                $project_signing = Step6Form::find()->where(['status' => 1])->all();
                return $this->render('step6', ['step6' => $step6, 'project_signing' => $project_signing]);
        }

        public function actionStep7() {
                $step7 = Step7::findOne(1);
                return $this->render('step7', ['step7' => $step7]);
        }

        public function actionStep8() {
                $step8 = Step8::findOne(1);
                return $this->render('step8', ['step8' => $step8]);
        }

        public function actionStep9() {
                $step9 = Step9::findOne(1);
                return $this->render('step9', ['step9' => $step9]);
        }

        public function actionStep10() {
                $step10 = Step10::findOne(1);
                return $this->render('step10', ['step10' => $step10]);
        }

}
