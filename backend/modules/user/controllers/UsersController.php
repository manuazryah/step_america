<?php

namespace backend\modules\user\controllers;

use Yii;
use common\models\Users;
use common\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller {

    /**
     * @inheritdoc
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
    public function actionView($id) {
        $step2_model = \common\models\Step2AccountDetails::find()->where(['user_id' => $id])->one();
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
        return $this->render('view', [
                    'model' => $this->findModel($id),
                    'step2_model' => $step2_model,
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

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Users();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            if ($model->isNewRecord) {
                $model->password = Yii::$app->security->generatePasswordHash($model->password);
            }
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', "User Created Successfully");
                $model = new Users();
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
    public function actionUpdate($id) {
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

}
