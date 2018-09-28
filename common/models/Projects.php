<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $project_title
 * @property string $image
 * @property string $microsite_page
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Projects extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'projects';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                        [['microsite_page'], 'string'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU'], 'safe'],
                        [['project_title'], 'string', 'max' => 255],
                        [['image'], 'string', 'max' => 100],
                        [['project_title', 'microsite_page', 'image'], 'required']
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'project_title' => 'Project Title',
                    'image' => 'Image',
                    'microsite_page' => 'Microsite Page',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
