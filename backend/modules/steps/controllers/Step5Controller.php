<?php

namespace backend\modules\steps\controllers;

use Yii;
use common\models\Step5;
use common\models\Step5Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Step5Form;
use common\models\Step5FormSearch;
use yii\web\UploadedFile;

/**
 * Step5Controller implements the CRUD actions for Step5 model.
 */
class Step5Controller extends Controller {

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
     * Lists all Step5 models.
     * @return mixed
     */
    public function actionIndex() {
        $model = $this->findModel(1);
        $searchModel = new Step5FormSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model_form = new Step5Form();
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            Yii::$app->session->setFlash('success', "Step 5 Save Successfully");
        }
        if ($model_form->load(Yii::$app->request->post())) {
            $doc = UploadedFile::getInstance($model_form, 'doc');
            $model_form->doc = $doc->name;
            if ($model_form->validate() && $model_form->save()) {
                $this->Upload($model_form, $doc);
            }
            Yii::$app->session->setFlash('success', "New Form Save Successfully");
        }
        return $this->render('update', [
                    'model' => $model,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'model_form' => $model_form,
        ]);
    }

    /*
     * Upload Documents
     */

    public function Upload($model, $doc) {
        $dir = Yii::$app->basePath . '/../uploads/step5/' . $model->id;
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        $path = $dir . '/';
        if (!empty($doc)) {
            $file = $path . $model->doc;
            if (file_exists($file)) {
                unlink($file);
            }
            $doc->saveAs($path . $model->doc);
        }
        return TRUE;
    }

    /**
     * Displays a single Step5 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Step5 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Step5();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Step5 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Step5 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = Step5Form::findOne($id);
        $path = Yii::$app->basePath . '/../uploads/step5/' . $model->id . '/';
        $file = $path . $model->doc;
        if ($model->delete()) {
            if (file_exists($file)) {
                unlink($file);
                rmdir($path);
            }
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Step5 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Step5 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Step5::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
