<?php

namespace frontend\controllers;
use Yii;
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
use yii\web\UploadedFile;

class DashboardController extends \yii\web\Controller {
    
    
    public function beforeAction($action) {
                $this->enableCsrfValidation = false;
                return parent::beforeAction($action);
    }
    
    public function actionProfile() {
                $user_profile = \common\models\Users::findOne(\Yii::$app->user->identity->id);
                return $this->render('profile', ['user_profile' => $user_profile]);
    }

    public function actionIndex() {
        $step1 = Step1::findOne(1);
        return $this->render('index', ['step1' => $step1]);
    }

    public function actionHome() {
                $step1 = Step1::findOne(1);
                $user_step_details = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
                return $this->render('dashboard', ['step1' => $step1, 'user_step_details' => $user_step_details]);
        }

    public function actionStep2() {
        $step2 = Step2::findOne(1);
        return $this->render('step2', ['step2' => $step2]);
    }

      public function actionStep3($id = null) {
                $step3 = Step3::findOne(1);
                $user_step_details = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
                if (empty($id))
                        $model = new \common\models\Step3Uploads();
                else
                        $model = \common\models\Step3Uploads::findOne($id);

                $searchModel = new \common\models\Step3UploadsSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $dataProvider->query->andWhere(['user_id' => \Yii::$app->user->identity->id]);
                if ($model->load(\Yii::$app->request->post()) && \Yii::$app->SetValues->Attributes($model)) {
                        $model->user_id = \Yii::$app->user->identity->id;
                        $image = UploadedFile::getInstance($model, 'file');
                        $model->file_name = $image->name;
                        $this->SetExtension($model, $id);
                        if ($model->validate() && $model->save()) {
                                $this->Upload($model, $image);
                        }
                        return $this->redirect('step3');
                }
                return $this->render('step3', ['step3' => $step3, 'model' => $model, 'searchModel' => $searchModel, 'dataProvider' => $dataProvider,'user_step_details' => $user_step_details]);
        }
        
        
          /* This function is to set image extension */

        public function SetExtension($model, $id) {
                $image = UploadedFile::getInstance($model, 'file');
                if (!empty($id)) {
                        $update = \common\models\Step3Uploads::findOne($id);
                        if (!empty($image))
                                $model->file = $image->extension;
                        else
                                $model->file = $update->file;
                } else {
                        if (!empty($image))
                                $model->file = $image->extension;
                }

                return TRUE;
        }

        /* This function is to upload images */

        public function Upload($model, $image) {
                if (!empty($image)) {
                        $image->saveAs(\Yii::$app->basePath . '/../uploads/step3/' . $model->id . '.' . $model->file);
                }
                return TRUE;
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
    
  public function actionStepStatus() {
                $type = \Yii::$app->request->post('type');
                $model = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
                if (empty($model)) {
                        $model = new \common\models\UserSteps();
                }
                if ($type == 1) {
                        if ($model->retainer_contract_download == '')
                                $model->retainer_contract_download = date('Y-m-d');
                } else {
                        if ($model->dhp_download_date == '')
                                $model->dhp_download_date = date('Y-m-d');
                }
                $model->user_id = \Yii::$app->user->identity->id;
                $model->save();
        }
        
        
        public function actionStep3Subcategory() {
                $subcategory = \common\models\Step3Subcategory::find()->where(['category' => $_POST['category'], 'status' => 1])->all();
                $options = '<option value="">-Select -</option>';
                foreach ($subcategory as $sub) {
                        $options .= "<option value='" . $sub->id . "'>" . $sub->subcategory . "</option>";
                }
                echo $options;
        }

}
