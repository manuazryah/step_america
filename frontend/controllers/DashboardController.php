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
        $user_step_details = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        $notifications= \common\models\Notifications::find()->where(['user'=> Yii::$app->user->identity->id,'user_type' => 1])->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        return $this->render('index', ['step1' => $step1,'user_step_details' => $user_step_details,'notifications'=>$notifications]);
    }

    public function actionHome() {
        $step1 = Step1::findOne(1);
        $user_step_details = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        return $this->render('dashboard', ['step1' => $step1, 'user_step_details' => $user_step_details]);
    }

    public function actionStep2() {
        $step2_data = \common\models\Step2AccountDetails::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        $user_step_details = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        $step2 = Step2::findOne(1);
        return $this->render('step2', ['step2' => $step2, 'step2_data' => $step2_data, 'user_step_details' => $user_step_details]);
    }

    public function actionStep3($id = null) {
        $step3 = Step3::findOne(1);
        $step3_uploads_count = \common\models\Step3Uploads::find()->where(['user_id' => \Yii::$app->user->identity->id])->count();
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
            $model->status = 1;
            $this->SetExtension($model, $id);
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $image);
            }
            return $this->redirect('step3');
        }

        if (isset($_POST['questionnaire_submit'])) {
            $this->Step3Questionnaire($_POST);
            return $this->render('step3', ['step3' => $step3, 'model' => $model, 'searchModel' => $searchModel, 'dataProvider' => $dataProvider, 'user_step_details' => $user_step_details, 'id' => $id]);
        }
        
         if (isset($_POST['uploads_completed_user'])) {
            $user_uploads = \common\models\Step3Uploads::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['<>', 'status', 2])->andWhere(['<>', 'status', 3])->andWhere(['<>','status',0])->all();
            foreach ($user_uploads as $user_upload) {
                $user_upload->status = 4;
                $user_upload->save();
            }
            $user_step_details->step3_user_submit=1;
            $user_step_details->save();
            return $this->redirect('step4');
        }
        
        if ($step3_uploads_count > 0) {
            return $this->render('step3', ['step3' => $step3, 'model' => $model, 'searchModel' => $searchModel, 'dataProvider' => $dataProvider, 'user_step_details' => $user_step_details, 'id' => $id]);
        } else {
            return $this->render('step3_questionaire', ['step3' => $step3]);
        }
    }

    /*
     * Choose upload category steps and add an entry for each subcategory to step uploads table
     */

    public function Step3Questionnaire($POST) {

        $uploads = ['1', '2', '8'];
        if (isset($POST['employee_type']) && $POST['employee_type'] != '')
            array_push($uploads, $_POST['employee_type']);
        if (isset($POST['loan']) && $POST['loan'] != '')
            array_push($uploads, $POST['loan']);
        if (isset($POST['sale_of_property']) && $POST['sale_of_property'] != '')
            array_push($uploads, $POST['sale_of_property']);
        if (isset($POST['gifts']) && $POST['gifts'] != '')
            array_push($uploads, $POST['gifts']);

        foreach ($uploads as $upload) {

            $upload_subcategory = \common\models\Step3Subcategory::find()->where(['category' => $upload, 'status' => 1])->all();
            foreach ($upload_subcategory as $upload_sub_category) {
                $step3_uploads = new \common\models\Step3Uploads();
                $step3_uploads->user_id = \Yii::$app->user->identity->id;
                $step3_uploads->category = $upload;
                $step3_uploads->subcategory = $upload_sub_category->id;
                $step3_uploads->save();
            }
        }
        return TRUE;
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

    public function actionProject($id) {
        $model = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        if (empty($model)) {
            $model = new \common\models\UserSteps();
        }
        $model->selected_project = $id;
        $model->save();
        return $this->redirect(['step5', 'id' => $id]);
    }

    public function actionStep5($id = null) {
        if (!empty($id)) {
            $step5 = Step5::findOne(1);
            $project = Projects::find()->where(['id' => $id])->one();
            $project_documents = \common\models\Step5Form::find()->where(['project' => $id])->all();
            return $this->render('step5', ['step5' => $step5, 'project_documents' => $project_documents, 'project' => $project]);
        } else {
            return $this->redirect('step4');
        }
    }

    public function actionStep6() {
        $step6 = Step6::findOne(1);
        $project_signing = Step6Form::find()->where(['status' => 1])->all();
        return $this->render('step6', ['step6' => $step6, 'project_signing' => $project_signing]);
    }

    /*
     * Step 7
     */

    public function actionStep7() {
        $step7 = Step7::findOne(1);
        $user_steps = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        if (empty($user_steps)) {
            $user_steps = new \common\models\UserSteps();
        }
        if ($user_steps->load(\Yii::$app->request->post())) {
            $user_steps->deposited_on = date('Y-m-d', strtotime($user_steps->deposited_on));
            $user_steps->save();
            return $this->redirect('step8');
        }

        return $this->render('step7', ['step7' => $step7, 'user_steps' => $user_steps]);
    }

    /*
     * Step 8
     */

    public function actionStep8() {

        $step8 = Step8::findOne(1);
        $user_steps = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        $step8_data = \common\models\Step8Data::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        if (empty($step8_data)) {
            $step8_data = new \common\models\Step8Data();
        }
        if (isset($_POST['bank_wire_confirmation_scan'])) {
            $user_bank_wire_confirmation_scan = UploadedFile::getInstance($step8_data, 'user_bank_wire_confirmation_scan');
            $this->UploadStep8($step8_data, $user_bank_wire_confirmation_scan, 'user_bank_wire_confirmation_scan');
        }
        if (isset($_POST['user_bank_statment_log'])) {
            $user_bank_statment_log = UploadedFile::getInstance($step8_data, 'user_bank_statment_log');
            $this->UploadStep8($step8_data, $user_bank_statment_log, 'user_bank_statment_log');
        }
        return $this->render('step8', ['step8' => $step8, 'step8_data' => $step8_data, 'user_steps' => $user_steps]);
    }

    /*
     * Upload files to step 8
     */

    public function UploadStep8($step8_data, $uploaded_file, $field) {
        $path = Yii::$app->basePath . '/../uploads/step8/' . Yii::$app->user->identity->id . '/user/';
        if (!file_exists($path)) {
            \yii\helpers\FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
        }
        if (!empty($uploaded_file)) {
            $step8_data->$field = $uploaded_file->name;
            $file = $path . $step8_data->$field;
            if (file_exists($file)) {
                unlink($file);
            }
            $uploaded_file->saveAs($path . $step8_data->$field);
        }
        $step8_data->user_id= \Yii::$app->user->identity->id;
        $step8_data->save();
    }

    /*
     * Step 9
     */

    public function actionStep9() {
        $step9 = Step9::findOne(1);
        $step9_data = \common\models\Step9Data::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        return $this->render('step9', ['step9' => $step9, 'step9_data' => $step9_data]);
    }

    /*
     * Step 10
     */

    public function actionStep10() {
        $step10 = Step10::findOne(1);
        $user_steps = \common\models\UserSteps::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        return $this->render('step10', ['step10' => $step10, 'user_steps' => $user_steps]);
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
    
    public function actionStep5Documents() {
        $model = new \common\models\Step5UserProject();
        $model->user_id = Yii::$app->user->identity->id;
        $model->project = Yii::$app->request->post('step_document');
        $model->date = date('Y-m-d');
        $model->save();
    }
    
    public function actionStep10Acknowledgement() {
        $user_step_status = \common\models\UserSteps::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        $user_step_status->acknowledgement = 1;
        $user_step_status->save();
    }
    
    

}
