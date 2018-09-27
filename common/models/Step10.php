<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step10".
 *
 * @property int $id
 * @property string $page_title
 * @property string $description
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step10 extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'step10';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['description'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['description', 'page_title'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['page_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'page_title' => 'Page Title',
            'description' => 'Description',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
