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
                    'other_name' => 'Other Names used if any (Maiden Name and Names from Previous Marriages)',
                    'gender' => 'Gender',
                    'dob' => 'Date of Birth',
                    'state_of_birth' => 'State Of Birth',
                    'country_of_birth' => 'Country Of Birth',
                    'country_of_citizenship' => 'Country Of Citizenship',
                    'other_country_citizenship' => 'If Dual Citizenship, provide other Country of Citizenship',
                    'date_of_last_entry' => 'If in U.S. provide Date of Last Entry into U.S.',
                    'form_number' => 'If in U.S. (provide Form I-94 Number (Arrival/Departure Record))',
                    'social_security_number' => 'U.S. Social Security Number',
                    'alien_reg_number' => 'U.S. Alien Registration Number (”A#”) (if none, write N/A)',
                    'immigration_status' => 'Current Immigration Status',
                    'immigration_expiration_date' => 'Current Status Expiration Date',
                    'passport_number' => 'Passport Number',
                    'issuance_country' => 'Passport Issuance Country',
                    'issuance_date' => 'Passport Issuance Date',
                    'expiration_date' => 'Passport Expiration Date',
                    'permanent_resident' => 'Please identify if you are: (Permanent Resident)',
                    'family_members' => 'Have you or your accompanying family members ever applied for U.S. Permanent Resident (Green Card)?',
                    'expiration_on_form' => 'Expiration of Status as shown on Form I-94 or Form I-688',
                    'visa_number' => 'Visa Number (8 Digits)',
                    'visa_issuance_date' => 'Visa Issuance Date',
                    'visa_issuance_country' => 'Visa Issuance (City, Country)',
                    'issued_any_visa' => 'Have you ever been in J-1 or J-2 Status or have been issued a J-1 or J-2 Visa?',
                    'explain_visa_details' => 'If yes, please explain:',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
