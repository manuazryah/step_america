<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step5_user_project".
 *
 * @property int $id
 * @property int $user_id
 * @property int $project
 * @property string $date
 * @property int $status
 */
class Step5UserProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'step5_user_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'project', 'status'], 'integer'],
            [['date'], 'required'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'project' => 'Project',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
