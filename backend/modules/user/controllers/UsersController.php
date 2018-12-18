<?php

namespace backend\modules\user\controllers;

use Yii;
use common\models\Users;
use common\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\UserBiographicalInfo;
use common\models\UserFamilyInfo;
use common\models\UserChildrensInfo;
use common\models\UserConatctInfo;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller {

        public function beforeAction($action) {
                if (!parent::beforeAction($action)) {
                        return false;
                }
                if (Yii::$app->user->isGuest) {
                        $this->redirect(['/site/index']);
                        return false;
                }
                return true;
        }

        /**
         * @inheritdoc
         *
         */
        public function behaviors() {
                return [
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];
        }

        /**
         * Lists all Users models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new UsersSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single Users model.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $step2_model = \common\models\Step2AccountDetails::find()->where(['user_id' => $id])->one();
                $biography = UserBiographicalInfo::find()->where(['user_id' => $id])->one();
                $family = UserFamilyInfo::find()->where(['user_id' => $id])->one();
                $childrens = UserChildrensInfo::find()->where(['user_id' => $id])->all();
                $contact = UserConatctInfo::find()->where(['user_id' => $id])->one();
                $user_steps_status = \common\models\UserSteps::find()->where(['user_id' => $id])->one();
                $uploads_category = \common\models\Step3Category::find()->where(['status' => 1])->all();
                $project = \common\models\Projects::findOne($user_steps_status->selected_project);
                $step9_data = \common\models\Step9Data::find()->where(['user_id' => $id])->one();
                $step8_data = \common\models\Step8Data::find()->where(['user_id' => $id])->one();
                $sep5_user_projects = \common\models\Step5UserProject::find()->where(['user_id' => $id])->all();
                if (empty($step9_data)) {
                        $step9_data = new \common\models\Step9Data();
                        $step9invoice_file_ = '';
                } else {
                        $step9invoice_file_ = $step9_data->invoice_file;
                }
                if (empty($step8_data)) {
                        $step8_data = new \common\models\Step8Data();
                        $step8_bank_wire_confirmation_scan_ = '';
                        $bank_statment_log_ = '';
                } else {
                        $step8_bank_wire_confirmation_scan_ = $step8_data->bank_wire_confirmation_scan;
                        $bank_statment_log_ = $step8_data->bank_statment_log;
                }
                if (empty($step2_model)) {
                        $step2_model = new \common\models\Step2AccountDetails();
                } else {
                        $invoice_file_ = $step2_model->invoice_file;
                }
                if ($step2_model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($step2_model)) {
                        $invoice_file = UploadedFile::getInstance($step2_model, 'invoice_file');
                        if (!empty($invoice_file)) {
                                $step2_model->invoice_file = $invoice_file->name;
                        } else {
                                $step2_model->invoice_file = $invoice_file_;
                        }
                        if ($step2_model->validate() && $step2_model->save()) {
                                $this->Upload($step2_model, $invoice_file);
                        }
                        Yii::$app->session->setFlash('success', "Account Details Save Successfully");
                }
                if ($step9_data->load(Yii::$app->request->post())) {
                        $this->Step9Data(Yii::$app->request->post(), $step9_data, $step9invoice_file_);
                }
                if ($step8_data->load(Yii::$app->request->post())) {
                        $this->Step8Data(Yii::$app->request->post(), $step8_data, $step8_bank_wire_confirmation_scan_, $bank_statment_log_);
                }
                if ($user_steps_status->load(Yii::$app->request->post())) {
                        $user_steps_status->save();
                }

                return $this->render('view', [
                            'model' => $this->findModel($id),
                            'step2_model' => $step2_model,
                            'biography' => $biography,
                            'family' => $family,
                            'childrens' => $childrens,
                            'contact' => $contact,
                            'user_steps_status' => $user_steps_status,
                            'id' => $id,
                            'uploads_category' => $uploads_category,
                            'project' => $project,
                            'step9_data' => $step9_data,
                            'step8_data' => $step8_data,
                            'sep5_user_projects' => $sep5_user_projects,
                ]);
        }

        /*
         * Upload Documents
         */

        public function Upload($model, $invoice_file) {
                $dir = Yii::$app->basePath . '/../uploads/step2/invoice/' . $model->id;
                if (!is_dir($dir)) {
                        mkdir($dir);
                }
                $path = $dir . '/';
                if (!empty($invoice_file)) {
                        $file = $path . $model->invoice_file;
                        if (file_exists($file)) {
                                unlink($file);
                        }
                        $invoice_file->saveAs($path . $model->invoice_file);
                }
                return TRUE;
        }

        public function Step9Data($data, $step9_data, $step9invoice_file_) {
                $step9_invoice_file = UploadedFile::getInstance($step9_data, 'invoice_file');
                if (!empty($step9_invoice_file)) {
                        $step9_data->invoice_file = $step9_invoice_file->extension;
                        $path = Yii::$app->basePath . '/../uploads/step9/' . $step9_data->user_id . '/';
                        $size = [];
                        Yii::$app->UploadFile->UploadFile($step9_data, $step9_invoice_file, $path, $size);
                } else {
                        $step9_data->invoice_file = $step9invoice_file_;
                }
                $step9_data->save();
        }

        public function Step8Data($data, $step8_data, $step8_bank_wire_confirmation_scan_, $bank_statment_log_) {
                $step8_bank_wire_confirmation_scan = UploadedFile::getInstance($step8_data, 'bank_wire_confirmation_scan');
                $bank_statment_log = UploadedFile::getInstance($step8_data, 'bank_statment_log');
                // $dhp_agreement = UploadedFile::getInstance($model, 'dhp_agreement');
                if (!empty($step8_bank_wire_confirmation_scan)) {
                        $step8_data->bank_wire_confirmation_scan = $step8_bank_wire_confirmation_scan->name;
                } else {
                        $step8_data->bank_wire_confirmation_scan = $step8_bank_wire_confirmation_scan_;
                }
                if (!empty($bank_statment_log)) {
                        $step8_data->bank_statment_log = $bank_statment_log->name;
                } else {
                        $step8_data->bank_statment_log = $bank_statment_log_;
                }
                if ($step8_data->validate() && $step8_data->save()) {
                        $this->UploadStep8($step8_data, $step8_bank_wire_confirmation_scan, $bank_statment_log);
                }
        }

        /*
         * Upload Documents
         */

        public function UploadStep8($model, $step8_bank_wire_confirmation_scan, $bank_statment_log) {
                $path = Yii::$app->basePath . '/../uploads/step8/' . $model->user_id . '/admin/';
                if (!file_exists($path)) {
                        \yii\helpers\FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
                }
                if (!empty($step8_bank_wire_confirmation_scan)) {
                        $file = $path . $model->bank_wire_confirmation_scan;
                        if (file_exists($file)) {
                                unlink($file);
                        }
                        $step8_bank_wire_confirmation_scan->saveAs($path . $model->bank_wire_confirmation_scan);
                }
                if (!empty($bank_statment_log)) {
                        $file = $path . $model->bank_statment_log;
                        if (file_exists($file)) {
                                unlink($file);
                        }
                        $bank_statment_log->saveAs($path . $model->bank_statment_log);
                }
                return TRUE;
        }

        /**
         * Creates a new Users model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Users();
                $model->setScenario('create');
                $user_steps = new \common\models\UserSteps();
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        if ($model->isNewRecord) {
                                $model->password = Yii::$app->security->generatePasswordHash($model->password);
                        }
                        if ($model->validate() && $model->save()) {
                                $user_steps->user_id = $model->id;
                                $user_steps->save();
                                Yii::$app->session->setFlash('success', "User Created Successfully");
                                return $this->redirect(['index']);
                        }
                }
                return $this->render('create', [
                            'model' => $model,
                ]);
        }

        /**
         * Updates an existing Users model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate1($id) {
                $model = $this->findModel($id);
                $model->setScenario('update');
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->validate() && $model->save()) {
                        Yii::$app->session->setFlash('success', "User Details Updated successfully.");
                        return $this->redirect(['update', 'id' => $model->id]);
                }
                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing Users model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
        }

        /**
         * Finds the Users model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Users the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Users::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

        public function actionChangePassword($id) {
                $id = Yii::$app->EncryptDecrypt->Encrypt('decrypt', $id);
                $model = new \common\models\ChangePasswordUser();
                $user = $this->findModel($id);

                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        $user->password = Yii::$app->security->generatePasswordHash($model->confirm_password);
                        $user->save();
                        Yii::$app->session->setFlash('success', 'Password changed successfully.');
                        $model = new \common\models\ChangePasswordUser();
                }
                return $this->render('change_password', [
                            'model' => $model,
                            'user' => $user,
                ]);
        }

        public function actionStep1Status() {
                $model = \common\models\UserSteps::find()->where(['user_id' => $_POST['user']])->one();
                if (empty($model)) {
                        $model = new \common\models\UserSteps();
                }
                $model->retainer_contract_approve = $_POST['step1_retainer'];
                $model->dhp_approve = $_POST['step1_dhp'];
                $model->save();
        }

        public function actionApproveStatus() {
                $model = \common\models\UserSteps::find()->where(['user_id' => $_POST['user']])->one();
                $user = \common\models\Users::findOne($_POST['user']);
                if (empty($model)) {
                        $model = new \common\models\UserSteps();
                }
                $model->step_1_completed = 1;
                $model->step_1_complete_date = date('Y-m-d');

                if ($model->save()) {
                        $user->current_step = 1;
                        $user->save();
                        $approved = 1;
                        $message = 'Admin approved step 1';
                        Yii::$app->SetValues->Notification(1, $_POST['user'], 1, $message);
                }
                return $approved;
        }

        public function actionStep3UploadStatus() {
                if (\Yii::$app->request->isAjax) {
                        $model = \common\models\Step3Uploads::findOne($_POST['id']);
                        $model->status = $_POST['status'];
                        $model->save();
                        return $model->status;
                }
        }

        public function actionStepsApproveStatus() {

                $model = \common\models\UserSteps::find()->where(['user_id' => $_POST['user']])->one();
                $user = \common\models\Users::findOne($_POST['user']);
                if (empty($model)) {
                        $model = new \common\models\UserSteps();
                }
                $step = 'step_' . $_POST['step'] . '_completed';
                $step_date = 'step_' . $_POST['step'] . '_complete_date';
                $model->$step = 1;
                $model->$step_date = date('Y-m-d');
                if ($model->save()) {
                        if ($_POST['step'] != 11) {
                                $user->current_step = $_POST['step'];
                                $user->save();
                        }
                        $approved = 1;
                }
                //   if ($_POST['step_value'] == 1)
                $message = 'Admin approved step ' . $_POST['step'];
//        else
//            $message = 'Admin disapproved step ' . $_POST['step'];
                Yii::$app->SetValues->Notification(1, $_POST['user'], 1, $message);
                Yii::$app->SetValues->NotificationMail($_POST['step'], $_POST['user']);
                return $approved;
        }

        public function actionCheckUsername() {
                if (Yii::$app->request->isAjax) {
                        $username = $_POST['username'];
                        $mode = $_POST['mode'];
                        if ($mode === "create") {
                                $user_exists = Users::find()->where(['user_name' => $username])->exists();
                        } else {
                                $user_exists = Users::find()->where(['user_name' => $username])->andWhere(['<>', 'id', $mode])->exists();
                        }
                        if ($user_exists) {
                                $error = 1;
                        } else {
                                $error = 0;
                        }
                        return $error;
                }
        }

}
