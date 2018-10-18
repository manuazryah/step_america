<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_family_info".
 *
 * @property int $id
 * @property int $user_id
 * @property int $marital_status
 * @property int $currently
 * @property int $no_of_marriages
 * @property string $spouse_1_first_name
 * @property string $spouse_1_middle_name
 * @property string $spouse_1_last_name
 * @property string $spouse_1_dob
 * @property string $spouse_1_state
 * @property int $spouse_1_country
 * @property string $spouse_2_first_name
 * @property string $spouse_2_middle_name
 * @property string $spouse_2_last_name
 * @property string $spouse_2_dob
 * @property string $spouse_2_state
 * @property int $spouse_2_country
 * @property string $marriage_date
 * @property int $state_of_marriage
 * @property int $country_of_marriage
 * @property string $last_name
 * @property string $maiden_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $dob
 * @property int $state_of_birth
 * @property int $country_of_birth
 * @property string $passport_number
 * @property string $passport_issuance_company
 * @property string $passport_issuance_date
 * @property string $passport_expiration_date
 * @property int $spouse_accompany
 * @property string $country_of_citizenship
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class UserFamilyInfo extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'user_family_info';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                        [['user_id', 'marital_status', 'currently', 'no_of_marriages', 'spouse_1_country', 'spouse_2_country', 'state_of_marriage', 'country_of_marriage', 'state_of_birth', 'country_of_birth', 'spouse_accompany', 'status', 'CB', 'UB'], 'integer'],
                        [['spouse_1_dob', 'spouse_2_dob', 'marriage_date', 'dob', 'passport_issuance_date', 'passport_expiration_date', 'DOC', 'DOU'], 'safe'],
                        [['spouse_1_first_name', 'spouse_1_middle_name', 'spouse_1_last_name', 'spouse_1_state', 'spouse_2_first_name', 'spouse_2_middle_name', 'spouse_2_last_name', 'spouse_2_state', 'last_name', 'maiden_name', 'first_name', 'middle_name', 'passport_number', 'passport_issuance_company', 'country_of_citizenship'], 'string', 'max' => 255],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'user_id' => 'User ID',
                    'marital_status' => 'Marital Status',
                    'currently' => 'Currently',
                    'no_of_marriages' => 'No Of Marriages',
                    'spouse_1_first_name' => 'First Name',
                    'spouse_1_middle_name' => 'Middle Name',
                    'spouse_1_last_name' => 'Last Name',
                    'spouse_1_dob' => 'Date of Birth',
                    'spouse_1_state' => 'State/ Province of Birth',
                    'spouse_1_country' => 'Country Of Birth',
                    'spouse_2_first_name' => 'First Name',
                    'spouse_2_middle_name' => 'Middle Name',
                    'spouse_2_last_name' => 'Last Name',
                    'spouse_2_dob' => 'Date of Birth',
                    'spouse_2_state' => 'State/ Province of Birth',
                    'spouse_2_country' => 'Country Of Birth',
                    'marriage_date' => 'Marriage Date',
                    'state_of_marriage' => 'State Of Marriage',
                    'country_of_marriage' => 'Country Of Marriage',
                    'last_name' => 'Last Name',
                    'maiden_name' => 'Maiden Name',
                    'first_name' => 'First Name',
                    'middle_name' => 'Middle Name',
                    'dob' => 'Date of Birth',
                    'state_of_birth' => 'State Of Birth',
                    'country_of_birth' => 'Country Of Birth',
                    'passport_number' => 'Passport Number',
                    'passport_issuance_company' => 'Passport Issuance Company',
                    'passport_issuance_date' => 'Passport Issuance Date',
                    'passport_expiration_date' => 'Passport Expiration Date',
                    'spouse_accompany' => 'Is your spouse accompanying with you?',
                    'country_of_citizenship' => 'Country Of Citizenship',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
