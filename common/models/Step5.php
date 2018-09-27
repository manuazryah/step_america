<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step5".
 *
 * @property int $id
 * @property int $page_title
 * @property string $description
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'step5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_title', 'status', 'CB', 'UB'], 'integer'],
            [['description'], 'string'],
            [['DOC', 'DOU'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
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
