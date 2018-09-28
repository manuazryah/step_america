<?php

namespace frontend\controllers;

use common\models\Step1;

class DashboardController extends \yii\web\Controller {

        public function actionIndex() {
                $step1 = Step1::findOne(1);
                return $this->render('index', ['step1' => $step1]);
        }

}
