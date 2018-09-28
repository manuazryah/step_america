<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step7".
 *
 * @property int $id
 * @property string $page_title
 * @property string $description
 * @property string $escrow_agent
 * @property string $llc
 * @property string $administrative_agent
 * @property string $bank_name
 * @property string $bank_address
 * @property string $bank_institution
 * @property string $bank_branch
 * @property string $bank_account
 * @property string $swift_id
 * @property string $contact_name
 * @property string $contact
 * @property string $ABA
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step7 extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'step7';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['description', 'page_title'], 'required'],
            [['description'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['page_title', 'escrow_agent', 'llc', 'administrative_agent', 'bank_name', 'bank_address', 'bank_institution', 'bank_branch', 'bank_account', 'swift_id', 'contact_name', 'contact', 'ABA'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'page_title' => 'Page Title',
            'description' => 'Description',
            'escrow_agent' => 'Escrow Agent',
            'llc' => 'LLC',
            'administrative_agent' => 'Administrative Agent',
            'bank_name' => 'Bank Name',
            'bank_address' => 'Bank Address',
            'bank_institution' => 'Bank Institution',
            'bank_branch' => 'Bank Branch',
            'bank_account' => 'Bank Account',
            'swift_id' => 'Swift ID',
            'contact_name' => 'Contact Name',
            'contact' => 'Contact',
            'ABA' => 'ABA',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
