<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_posts".
 *
 * @property integer $id
 * @property string $post_name
 * @property integer $admin
 * @property integer $cms_contents
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class AdminPosts extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'admin_posts';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                        [['admin', 'steps', 'users', 'user_steps', 'masters', 'status', 'CB', 'UB', 'sales', 'accounts', 'operations'], 'integer'],
                        [['post_name'], 'required'],
                        [['DOC', 'DOU'], 'safe'],
                        [['post_name'], 'string', 'max' => 280],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'post_name' => 'Post Name',
                    'admin' => 'Admin',
                    'steps' => 'Steps',
                    'users' => 'Users',
                    'user_steps' => 'User Steps',
                    'masters' => 'Masters',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

        public function getAdminUsers() {
                return $this->hasMany(AdminUsers::className(), ['post_id' => 'id']);
        }

}
