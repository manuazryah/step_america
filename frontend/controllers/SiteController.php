<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller {

        /**
         * {@inheritdoc}
         */
        public function behaviors() {
                return [
                    'access' => [
                        'class' => AccessControl::className(),
                        'only' => ['logout', 'signup'],
                        'rules' => [
                                [
                                'actions' => ['signup'],
                                'allow' => true,
                                'roles' => ['?'],
                            ],
                                [
                                'actions' => ['logout'],
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'logout' => ['post'],
                        ],
                    ],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function actions() {
                return [
                    'error' => [
                        'class' => 'yii\web\ErrorAction',
                    ],
                    'captcha' => [
                        'class' => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                    ],
                ];
        }

        public function beforeAction($action) {
                $this->enableCsrfValidation = false;
                return parent::beforeAction($action);
        }

        /**
         * Displays homepage.
         *
         * @return mixed
         */
        public function actionIndex() {
                if (!Yii::$app->user->isGuest) {
                        return $this->redirect(['/dashboard/index']);
                }

                $this->layout = 'login';
                $model = new \common\models\Users();
                $model->scenario = 'login';
                if ($model->load(Yii::$app->request->post()) && $model->login()) {
                        return $this->redirect(['/dashboard/index']);
                } else {
                        return $this->render('index', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Logs in a user.
         *
         * @return mixed
         */
        public function actionLogin() {
                if (!Yii::$app->user->isGuest) {
                        return $this->goHome();
                }

//        $this->layout = 'login';
                $model = new \common\models\Users();
                $model->scenario = 'login';
                if ($model->load(Yii::$app->request->post()) && $model->login() && $this->setSession()) {

                        return $this->redirect(['home']);
                } else {
                        return $this->render('index', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Logs out the current user.
         *
         * @return mixed
         */
        public function actionLogout() {
                Yii::$app->user->logout();

                return $this->goHome();
        }

        /**
         * Displays contact page.
         *
         * @return mixed
         */
        public function actionContact() {
                $model = new ContactForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
                        } else {
                                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                        }

                        return $this->refresh();
                } else {
                        return $this->render('contact', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Displays about page.
         *
         * @return mixed
         */
        public function actionAbout() {
                return $this->render('about');
        }

        /**
         * Signs user up.
         *
         * @return mixed
         */
        public function actionSignup() {
                $model = new SignupForm();
                if ($model->load(Yii::$app->request->post())) {
                        if ($user = $model->signup()) {
                                if (Yii::$app->getUser()->login($user)) {
                                        return $this->goHome();
                                }
                        }
                }

                return $this->render('signup', [
                            'model' => $model,
                ]);
        }

        /**
         * Requests password reset.
         *
         * @return mixed
         */
        public function actionRequestPasswordReset() {
                $model = new PasswordResetRequestForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        if ($model->sendEmail()) {
                                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                                return $this->goHome();
                        } else {
                                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
                        }
                }

                return $this->render('requestPasswordResetToken', [
                            'model' => $model,
                ]);
        }

        /**
         * Resets password.
         *
         * @param string $token
         * @return mixed
         * @throws BadRequestHttpException
         */
        public function actionResetPassword($token) {
                try {
                        $model = new ResetPasswordForm($token);
                } catch (InvalidParamException $e) {
                        throw new BadRequestHttpException($e->getMessage());
                }

                if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
                        Yii::$app->session->setFlash('success', 'New password saved.');

                        return $this->goHome();
                }

                return $this->render('resetPassword', [
                            'model' => $model,
                ]);
        }

        public function actionUserChat() {
                $model = new \common\models\Chat();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        if (isset(Yii::$app->user->identity->id)) {
                                $model->user_id = Yii::$app->user->identity->id;
                                $model->date = date('Y-m-d h:i:s');
                                $model->status = 1;
                                $model->message_status = 1;
                                $model->save();
                        }
                }
        }

        public function actionListMessages() {
                $messages = \common\models\Chat::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
                $list = $this->renderPartial('list_messages', ['model' => $messages]);
                return $list;
        }

        public function actionNotifications() {
        $searchModel = new \common\models\NotificationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['user' => \Yii::$app->user->identity->id, 'user_type' => 1]);
        $notifications = \common\models\Notifications::find()->where(['user' => \Yii::$app->user->identity->id, 'user_type' => 1])->all();
        return $this->render('notifications', [
                    'all_notifications' => $notifications,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

        public function actionAllMessages() {
                $messages = \common\models\Chat::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
                return $this->render('messages', [
                            'messages' => $messages,
                ]);
        }
        
        public function actionNotificationStatus() {
        $model = \common\models\Notifications::findOne($_POST['id']);
        $model->status = 1;
        $model->save();
    }

}
