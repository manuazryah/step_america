<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_childrens_info".
 *
 * @property int $id
 * @property int $user_id
 * @property string $last_name
 * @property string $middle_name
 * @property string $first_name
 * @property string $date_of_birth
 * @property int $country_of_birth
 * @property string $passport_number
 * @property int $passport_issuance_company
 * @property string $passport_issuance_date
 * @property string $passport_expiration_date
 * @property int $country_of_citizenship
 * @property int $currently_status
 * @property int $applying_status
 * @property int $adopted_status
 * @property string $adopted_date
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class UserChildrensInfo extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user_childrens_info';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'country_of_birth', 'passport_issuance_company', 'country_of_citizenship', 'currently_status', 'applying_status', 'adopted_status', 'status', 'CB', 'UB'], 'integer'],
            [['date_of_birth', 'passport_issuance_date', 'passport_expiration_date', 'adopted_date', 'DOC', 'DOU'], 'safe'],
            [['last_name', 'middle_name', 'first_name', 'passport_number'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'first_name' => 'First Name',
            'date_of_birth' => 'Date Of Birth',
            'country_of_birth' => 'Country Of Birth',
            'passport_number' => 'Passport Number',
            'passport_issuance_company' => 'Passport Issuance Company',
            'passport_issuance_date' => 'Passport Issuance Date',
            'passport_expiration_date' => 'Passport Expiration Date',
            'country_of_citizenship' => 'Country Of Citizenship',
            'currently_status' => 'Currently Status',
            'applying_status' => 'Applying Status',
            'adopted_status' => 'Adopted Status',
            'adopted_date' => 'Adopted Date',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
    
    public static function conter_details($header_id, $id) {
        $size = count(Yii::$app->request->post()['ContainerDetails']['container_no']);
        for ($i = 0; $i < $size; $i++) {
            $container_model = new ContainerDetails();
            $container_model->header_id = $header_id;
            $container_model->cargo_id = $id;
            $container_model->container_no = Yii::$app->request->post()['ContainerDetails']['container_no'][$i];
            $container_model->size_type = Yii::$app->request->post()['ContainerDetails']['size_type'][$i];
            $container_model->weight = Yii::$app->request->post()['ContainerDetails']['weight'][$i];
            $container_model->seal_no = Yii::$app->request->post()['ContainerDetails']['seal_no'][$i];
            Yii::$app->SetValues->Attributes($container_model) && $container_model->save();
        }
    }

}
