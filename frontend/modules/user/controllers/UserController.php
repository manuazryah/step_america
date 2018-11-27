<?php

namespace frontend\modules\user\controllers;

use Yii;
use common\models\UserBiographicalInfo;
use common\models\UserBiographicalInfoSearch;
use common\models\UserConatctInfo;
use common\models\UserFamilyInfo;
use common\models\UserChildrensInfo;
use common\models\UserChildrensInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserBiographicalInfoController implements the CRUD actions for UserBiographicalInfo model.
 */
class UserController extends Controller {

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
     * Lists all UserBiographicalInfo models.
     * @return mixed
     */

    /**
     * Creates a new UserBiographicalInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionBiographical() {
        $model = UserBiographicalInfo::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        if (empty($model)) {
            $model = new UserBiographicalInfo();
        }

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->user_id = Yii::$app->user->identity->id;
            $model->dob = date('Y-m-d', strtotime($model->dob));
            $model->immigration_expiration_date = date('Y-m-d', strtotime($model->immigration_expiration_date));
            $model->issuance_date = date('Y-m-d', strtotime($model->issuance_date));
            $model->expiration_date = date('Y-m-d', strtotime($model->expiration_date));
            $model->visa_issuance_date = date('Y-m-d', strtotime($model->visa_issuance_date));
            if ($model->validate() && $model->save()) {
                return $this->redirect(['family']);
            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['contact', 'id' => $model->id]);
//        }

        return $this->render('biographical_form', [
                    'model' => $model,
        ]);
    }

    public function actionFamily() {
        $model = UserFamilyInfo::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        if (empty($model)) {
            $model = new UserFamilyInfo();
        }
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->user_id = Yii::$app->user->identity->id;
            $model->spouse_1_dob = date('Y-m-d', strtotime($model->spouse_1_dob));
            $model->spouse_2_dob = date('Y-m-d', strtotime($model->spouse_2_dob));
            $model->marriage_date = date('Y-m-d', strtotime($model->marriage_date));
            $model->dob = date('Y-m-d', strtotime($model->dob));
            $model->passport_issuance_date = date('Y-m-d', strtotime($model->passport_issuance_date));
            $model->passport_expiration_date = date('Y-m-d', strtotime($model->passport_expiration_date));
            if ($model->validate() && $model->save()) {
                return $this->redirect(['childrens']);
            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['family']);
//        }

        return $this->render('family_form', [
                    'model' => $model,
        ]);
    }

    public function actionChildrens() {
        $children_model = UserChildrensInfo::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
        if (empty($children_model)) {
            $children_model = '';
        }
        $model = new UserChildrensInfo();

        if ($model->load(Yii::$app->request->post())) {
            $size = count(Yii::$app->request->post()['UserChildrensInfo']['first_name']);
            for ($i = 1; $i <= $size; $i++) {
                $user_model = new UserChildrensInfo();
                $first_name = Yii::$app->request->post()['UserChildrensInfo']['first_name'][$i];
                $date_of_birth = Yii::$app->request->post()['UserChildrensInfo']['date_of_birth'][$i];
                if (!empty($first_name) && !empty($date_of_birth)) {
                    $user_model->user_id = Yii::$app->user->identity->id;
                    $user_model->last_name = Yii::$app->request->post()['UserChildrensInfo']['last_name'][$i];
                    $user_model->middle_name = Yii::$app->request->post()['UserChildrensInfo']['middle_name'][$i];
                    $user_model->first_name = Yii::$app->request->post()['UserChildrensInfo']['first_name'][$i];
                    $user_model->date_of_birth = Yii::$app->request->post()['UserChildrensInfo']['date_of_birth'][$i];
                    $user_model->country_of_birth = Yii::$app->request->post()['UserChildrensInfo']['country_of_birth'][$i];
                    $user_model->passport_number = Yii::$app->request->post()['UserChildrensInfo']['passport_number'][$i];
                    $user_model->passport_issuance_company = Yii::$app->request->post()['UserChildrensInfo']['passport_issuance_company'][$i];
                    $user_model->passport_issuance_date = Yii::$app->request->post()['UserChildrensInfo']['passport_issuance_date'][$i];
                    $user_model->passport_expiration_date = Yii::$app->request->post()['UserChildrensInfo']['passport_expiration_date'][$i];
                    $user_model->country_of_citizenship = Yii::$app->request->post()['UserChildrensInfo']['country_of_citizenship'][$i];
                    $user_model->currently_status = Yii::$app->request->post()['UserChildrensInfo']['currently_status'][$i];
                    $user_model->applying_status = Yii::$app->request->post()['UserChildrensInfo']['applying_status'][$i];
                    $user_model->adopted_status = Yii::$app->request->post()['UserChildrensInfo']['adopted_status'][$i];
                    $user_model->adopted_date = Yii::$app->request->post()['UserChildrensInfo']['adopted_date'][$i];
                    Yii::$app->SetValues->Attributes($user_model) && $user_model->save();
                }
            }
//            if ($model->validate() && $model->save()) {
            return $this->redirect(['contact']);
//            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['family']);
//        }

        return $this->render('childrens_form', [
                    'model' => $model,
                    'children_model' => $children_model,
        ]);
    }

    public function actionChildrensUpdate() {
        $size = count(Yii::$app->request->post()['UserChildrensInfo']['first_name']);
        echo $size;
        echo '<pre>';
        print_r(Yii::$app->request->post()['UserChildrensInfo']);
        for ($i = 1; $i <= $size; $i++) {
//                $user_model = new UserChildrensInfo();
            $user_model = UserChildrensInfo::findOne(Yii::$app->request->post()['UserChildrensInfo']['id'][$i]);
            if (empty($user_model)) {
                $user_model = new UserChildrensInfo();
                echo 'ivde';
            }
            $first_name = Yii::$app->request->post()['UserChildrensInfo']['first_name'][$i];
            $date_of_birth = Yii::$app->request->post()['UserChildrensInfo']['date_of_birth'][$i];
            echo $first_name . '<br>';
            if (!empty($first_name) && !empty($date_of_birth)) {
                $user_model->user_id = Yii::$app->user->identity->id;
                $user_model->last_name = Yii::$app->request->post()['UserChildrensInfo']['last_name'][$i];
                $user_model->middle_name = Yii::$app->request->post()['UserChildrensInfo']['middle_name'][$i];
                $user_model->first_name = Yii::$app->request->post()['UserChildrensInfo']['first_name'][$i];
                $user_model->date_of_birth = Yii::$app->request->post()['UserChildrensInfo']['date_of_birth'][$i];
                $user_model->country_of_birth = Yii::$app->request->post()['UserChildrensInfo']['country_of_birth'][$i];
                $user_model->passport_number = Yii::$app->request->post()['UserChildrensInfo']['passport_number'][$i];
                $user_model->passport_issuance_company = Yii::$app->request->post()['UserChildrensInfo']['passport_issuance_company'][$i];
                $user_model->passport_issuance_date = Yii::$app->request->post()['UserChildrensInfo']['passport_issuance_date'][$i];
                $user_model->passport_expiration_date = Yii::$app->request->post()['UserChildrensInfo']['passport_expiration_date'][$i];
                $user_model->country_of_citizenship = Yii::$app->request->post()['UserChildrensInfo']['country_of_citizenship'][$i];
                $user_model->currently_status = Yii::$app->request->post()['UserChildrensInfo']['currently_status'][$i];
                $user_model->applying_status = Yii::$app->request->post()['UserChildrensInfo']['applying_status'][$i];
                $user_model->adopted_status = Yii::$app->request->post()['UserChildrensInfo']['adopted_status'][$i];
                $user_model->adopted_date = Yii::$app->request->post()['UserChildrensInfo']['adopted_date'][$i];
                Yii::$app->SetValues->Attributes($user_model) && $user_model->save();
            }
        }

//        exit;
        return $this->redirect(['contact']);

        return $this->render('childrens_form', [
                    'model' => $model,
                    'children_model' => $children_model,
        ]);
    }

    public function actionContact() {
        $model = UserConatctInfo::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        if (empty($model)) {
            $model = new UserConatctInfo();
        }
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->user_id = Yii::$app->user->identity->id;
            if ($model->validate() && $model->save()) {
                Yii::$app->SetValues->Notification(1, Yii::$app->user->identity->id, 1, 'Completed step 1 form');
                return $this->redirect(['contact']);
            }
        }

        return $this->render('contact_form', [
                    'model' => $model,
        ]);
    }

}
