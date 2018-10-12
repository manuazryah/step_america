<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property int $id
 * @property int $user_id
 * @property string $message
 * @property int $status
 * @property int $message_status 1=user_message,2=reply
 * @property string $date
 */
class Chat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'message_status'], 'integer'],
            [['message'], 'string'],
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
            'message' => 'Message',
            'status' => 'Status',
            'message_status' => 'Message Status',
            'date' => 'Date',
        ];
    }
}
