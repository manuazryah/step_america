<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_conatct_info".
 *
 * @property int $id
 * @property int $user_id
 * @property string $street_number
 * @property string $appt_number
 * @property string $city
 * @property string $state
 * @property int $country
 * @property string $daytime_contact_no
 * @property string $mobile_number
 * @property string $email
 * @property string $email_1
 * @property string $foreign_address
 * @property string $foreign_address_native
 * @property int $deportation_proceedings
 * @property string $explain_details
 * @property int $worked_in_us
 * @property string $worked_explain_details
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class UserConatctInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_conatct_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'country', 'deportation_proceedings', 'worked_in_us', 'status', 'CB', 'UB'], 'integer'],
            [['foreign_address', 'foreign_address_native', 'explain_details', 'worked_explain_details'], 'string'],
            [['DOC', 'DOU'], 'safe'],
            [['email', 'email_1'], 'email'],
            [['street_number', 'appt_number', 'city', 'state', 'daytime_contact_no', 'mobile_number', 'email', 'email_1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'street_number' => 'Street Number',
            'appt_number' => 'Appt Number',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'daytime_contact_no' => 'Daytime Contact No',
            'mobile_number' => 'Mobile Number',
            'email' => 'Email',
            'email_1' => 'Email 1',
            'foreign_address' => 'Foreign Address',
            'foreign_address_native' => 'Foreign Address Native',
            'deportation_proceedings' => 'Deportation Proceedings',
            'explain_details' => 'Explain Details',
            'worked_in_us' => 'Worked In Us',
            'worked_explain_details' => 'Worked Explain Details',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
