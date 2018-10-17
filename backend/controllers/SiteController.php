<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminUsers;
use common\models\AdminPosts;

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
                        'rules' => [
                                [
                                'actions' => ['login', 'error', 'index', 'home', 'forgot', 'new-password', 'exception', 'list-messages', 'user-chat', 'list-all-messages'],
                                'allow' => true,
                            ],
                                [
                                'actions' => ['logout', 'index'],
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
                ];
        }

        /**
         * Displays homepage.
         *
         * @return string
         */
        public function actionIndex() {
                if (!Yii::$app->user->isGuest) {
                        return $this->redirect(array('site/home'));
                }

                $this->layout = 'login';
                $model = new AdminUsers();
                $model->scenario = 'login';
                if ($model->load(Yii::$app->request->post()) && $model->login() && $this->setSession()) {

                        return $this->redirect(['home']);
                } else {
                        return $this->render('login', [
                                    'model' => $model,
                        ]);
                }
        }

        public function setSession() {
                $post = AdminPosts::findOne(Yii::$app->user->identity->post_id);
                if (!empty($post)) {
                        Yii::$app->session['post'] = $post->attributes;
                        return true;
                } else {
                        return FALSE;
                }
        }

        public function actionHome() {
                if (isset(Yii::$app->user->identity->id)) {
                        if (Yii::$app->user->isGuest) {
                                return $this->redirect(['index']);
                        }
                        return $this->render('index', [
                        ]);
                } else {
                        throw new \yii\web\HttpException(2000, 'Session Expired.');
                }
        }

        /**
         * Login action.
         *
         * @return string
         */
        public function actionLogin() {
                $this->layout = 'login';
                if (!Yii::$app->user->isGuest) {
                        return $this->redirect(['home']);
                }

                $model = new AdminUsers();
                $model->scenario = 'login';
                if ($model->load(Yii::$app->request->post()) && $model->login() && $this->setSession()) {

                        return $this->redirect(['home']);
                } else {
                        return $this->render('login', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Logout action.
         *
         * @return string
         */
        public function actionLogout() {
                Yii::$app->user->logout();

                return $this->goHome();
        }

        public function actionListMessages() {
                $user_id = $_POST['user_id'];
                $user = \common\models\Users::find()->where(['id' => $user_id])->one();
                $messages = \common\models\Chat::find()->where(['user_id' => $user_id])->all();
                foreach ($messages as $msg) {
                        if ($msg->message_status == 1) {
                                $msg->status = 2; /* message marked as read */
                                $msg->save();
                        }
                }

                $list = $this->renderPartial('list_messages', [
                    'model' => $messages,
                    'user' => $user,
                ]);
                return $list;
        }

        public function actionUserChat() {
                $model = new \common\models\Chat();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        if (isset(Yii::$app->user->identity->id)) {
                                $model->date = date('Y-m-d h:i:s');
                                $model->status = 1;
                                $model->message_status = 2;
                                $model->save();
                                $arr_variable = array('chat_user_id' => $model->user_id, 'chat_msg' => $model->message);
                                $data['result'] = $arr_variable;
                                echo json_encode($data);
                        }
                }
        }

        public function actionListAllMessages() {
                $chats_open = $_POST['user_chats'];

                $list_messages = $this->renderPartial('list_all_messages', [
                    'chats' => $chats_open,
                ]);
                return $list_messages;
        }

}
