<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step8_data".
 *
 * @property int $id
 * @property int $user_id
 * @property string $bank_wire_confirmation_scan
 * @property string $bank_statment_log
 * @property string $user_bank_wire_confirmation_scan
 * @property string $user_bank_statment_log
 */
class Step8Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'step8_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['bank_wire_confirmation_scan', 'bank_statment_log', 'user_bank_wire_confirmation_scan', 'user_bank_statment_log'], 'string', 'max' => 255],
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
            'bank_wire_confirmation_scan' => 'Bank Wire Confirmation Scan',
            'bank_statment_log' => 'Bank Statment Log',
            'user_bank_wire_confirmation_scan' => 'User Bank Wire Confirmation Scan',
            'user_bank_statment_log' => 'User Bank Statment Log',
        ];
    }
}
