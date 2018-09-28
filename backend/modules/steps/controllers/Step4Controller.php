<?php

namespace backend\modules\steps\controllers;

use Yii;
use common\models\Step4;
use common\models\Step4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Projects;
use common\models\ProjectsSearch;
use yii\web\UploadedFile;

/**
 * Step4Controller implements the CRUD actions for Step4 model.
 */
class Step4Controller extends Controller {

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
         * Lists all Step4 models.
         * @return mixed
         */
        public function actionIndex($id = null) {
                $model = $this->findModel(1);

                if (!empty($id)) {
                        $projects = Projects::findOne($id);
                } else {
                        $projects = new Projects();
                }

                $searchModel = new ProjectsSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
                        Yii::$app->session->setFlash('success', "Step 4 Save Successfully");
                }

                if ($projects->load(Yii::$app->request->post())) {

                        $image = UploadedFile::getInstance($projects, 'image');
                        $this->SetExtension($projects, $id);
                        if ($projects->validate() && $projects->save()) {
                                $this->Upload($projects, $image);
                        }
                        Yii::$app->session->setFlash('success', "Project Saved Successfully");
                        $projects = new Projects();
                }
                return $this->render('update', [
                            'model' => $model,
                            'projects' => $projects,
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /*
         * This function get model and set image extensions
         * return model
         */

        public function SetExtension($model, $id) {
                $image = UploadedFile::getInstance($model, 'image');
                if (!empty($id)) {
                        $update = Projects::findOne($id);
                        if (!empty($image))
                                $model->image = $image->extension;
                        else
                                $model->image = $update->img;
                } else {
                        if (!empty($image))
                                $model->image = $image->extension;
                }

                return TRUE;
        }

        public function Upload($model, $image) {
                if (!empty($image)) {
                        $image->saveAs(Yii::$app->basePath . '/../uploads/step4/' . $model->id . '.' . $model->image);
                }
                return TRUE;
        }

        public function actionDel($id) {
                $model = Projects::findOne($id);
                $file = Yii::$app->basePath . '/../uploads/step4/' . $model->id . '.' . $model->image;
                $project = \common\models\Step5Form::find()->where(['project' => $model->id])->exists();
                if (!$project) {
                        if ($model->delete()) {
                                if (file_exists($file))
                                        unlink($file);
                                Yii::$app->session->setFlash('success', "Deleted Successfully");
                        }
                } else {
                        Yii::$app->session->setFlash('error', "Sorry ! You cannot delete this project");
                }
                return $this->redirect(['index']);
        }

        /**
         * Displays a single Step4 model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Step4 model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Step4();

                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        return $this->redirect(['view', 'id' => $model->id]);
                } else {
                        return $this->render('create', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Updates an existing Step4 model.
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
         * Deletes an existing Step4 model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {

                $this->findModel($id)->delete();


                return $this->redirect(['index']);
        }

        /**
         * Finds the Step4 model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Step4 the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Step4::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
