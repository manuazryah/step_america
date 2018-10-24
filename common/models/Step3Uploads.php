<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step3_uploads".
 *
 * @property int $id
 * @property int $category
 * @property int $subcategory
 * @property string $file
 * @property string $user_comment
 * @property string $admin_comment
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step3Uploads extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'step3_uploads';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['category', 'subcategory', 'file'], 'required'],
                        [['category', 'subcategory', 'status', 'CB', 'UB'], 'integer'],
                        [['user_comment', 'admin_comment'], 'string'],
                        [['DOC', 'DOU', 'file_name'], 'safe'],
                        [['file'], 'string', 'max' => 255],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'category' => 'Category',
                    'subcategory' => 'Subcategory',
                    'file' => 'File',
                    'user_comment' => 'User Comment',
                    'admin_comment' => 'Admin Comment',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
