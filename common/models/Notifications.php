<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property int $id
 * @property int $user_type 1=user, 2=admin-user
 * @property int $user
 * @property int $notification_type
 * @property string $message
 * @property string $date
 * @property int $status 0->unread,1->read
 */
class Notifications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type', 'user', 'notification_type', 'status'], 'integer'],
            [['message'], 'string'],
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
            'user_type' => 'User Type',
            'user' => 'User',
            'notification_type' => 'Notification Type',
            'message' => 'Message',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
