<?php

namespace backend\modules\steps\controllers;

use Yii;
use common\models\Step1;
use common\models\Step1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Step1Controller implements the CRUD actions for Step1 model.
 */
class Step1Controller extends Controller {

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
     * Lists all Step1 models.
     * @return mixed
     */
    public function actionIndex() {
        $model = $this->findModel(1);
        $retainer_contract_agreement_ = $model->retainer_contract_agreement;
        $dhp_agreement_ = $model->dhp_agreement;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $retainer_contract_agreement = UploadedFile::getInstance($model, 'retainer_contract_agreement');
            $dhp_agreement = UploadedFile::getInstance($model, 'dhp_agreement');
            if (!empty($retainer_contract_agreement)) {
                $model->retainer_contract_agreement = $retainer_contract_agreement->name;
            } else {
                $model->retainer_contract_agreement = $retainer_contract_agreement_;
            }
            if (!empty($dhp_agreement)) {
                $model->dhp_agreement = $dhp_agreement->name;
            } else {
                $model->dhp_agreement = $dhp_agreement_;
            }
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $retainer_contract_agreement, $dhp_agreement);
            }
            Yii::$app->session->setFlash('success', "Step 1 Save Successfully");
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /*
     * Upload Documents
     */

    public function Upload($model, $retainer_contract_agreement, $dhp_agreement) {
        $path = Yii::$app->basePath . '/../uploads/step1/';
        if (!empty($retainer_contract_agreement)) {
            $file = $path . $model->retainer_contract_agreement;
            if (file_exists($file)) {
                unlink($file);
            }
            $retainer_contract_agreement->saveAs($path . $model->retainer_contract_agreement);
        }
        if (!empty($dhp_agreement)) {
            $file = $path . $model->dhp_agreement;
            if (file_exists($file)) {
                unlink($file);
            }
            $dhp_agreement->saveAs($path . $model->dhp_agreement);
        }
        return TRUE;
    }

    /**
     * Displays a single Step1 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Step1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Step1();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Step1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Step1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Step1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Step1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Step1::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
