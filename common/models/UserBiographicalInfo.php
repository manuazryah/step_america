<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_biographical_info".
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $other_name
 * @property int $gender
 * @property string $dob
 * @property string $state_of_birth
 * @property int $country_of_birth
 * @property int $country_of_citizenship
 * @property int $other_country_citizenship
 * @property string $date_of_last_entry
 * @property string $form_number
 * @property string $social_security_number
 * @property string $alien_reg_number
 * @property int $immigration_status
 * @property string $immigration_expiration_date
 * @property string $passport_number
 * @property int $issuance_country
 * @property string $issuance_date
 * @property string $expiration_date
 * @property int $permanent_resident
 * @property int $family_members
 * @property string $expiration_on_form
 * @property int $visa_number
 * @property string $visa_issuance_date
 * @property int $visa_issuance_country
 * @property int $issued_any_visa
 * @property string $explain_visa_details
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class UserBiographicalInfo extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user_biographical_info';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['first_name'], 'required'],
            [['user_id', 'gender', 'country_of_birth', 'country_of_citizenship', 'other_country_citizenship', 'immigration_status', 'issuance_country', 'permanent_resident', 'family_members', 'visa_number', 'visa_issuance_country', 'issued_any_visa', 'status', 'CB', 'UB'], 'integer'],
            [['dob', 'date_of_last_entry', 'immigration_expiration_date', 'issuance_date', 'expiration_date', 'visa_issuance_date', 'DOC', 'DOU'], 'safe'],
            [['explain_visa_details'], 'string'],
            [['first_name', 'middle_name', 'last_name', 'other_name', 'state_of_birth', 'form_number', 'social_security_number', 'alien_reg_number', 'passport_number', 'expiration_on_form'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'other_name' => 'Other Name',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'state_of_birth' => 'State Of Birth',
            'country_of_birth' => 'Country Of Birth',
            'country_of_citizenship' => 'Country Of Citizenship',
            'other_country_citizenship' => 'Other Country Citizenship',
            'date_of_last_entry' => 'Date Of Last Entry',
            'form_number' => 'Form Number',
            'social_security_number' => 'Social Security Number',
            'alien_reg_number' => 'Alien Reg Number',
            'immigration_status' => 'Immigration Status',
            'immigration_expiration_date' => 'Immigration Expiration Date',
            'passport_number' => 'Passport Number',
            'issuance_country' => 'Issuance Country',
            'issuance_date' => 'Issuance Date',
            'expiration_date' => 'Expiration Date',
            'permanent_resident' => 'Permanent Resident',
            'family_members' => 'Family Members',
            'expiration_on_form' => 'Expiration On Form',
            'visa_number' => 'Visa Number',
            'visa_issuance_date' => 'Visa Issuance Date',
            'visa_issuance_country' => 'Visa Issuance Country',
            'issued_any_visa' => 'Issued Any Visa',
            'explain_visa_details' => 'Explain Visa Details',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
