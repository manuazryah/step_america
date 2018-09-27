<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step1".
 *
 * @property int $id
 * @property string $page_title
 * @property string $description
 * @property string $drafted_on
 * @property string $drafted_by
 * @property string $retainer_contract_agreement
 * @property string $contract_agreement_drafted_on
 * @property string $contract_agreement_drafted_by
 * @property string $contract_agreement_modified_on
 * @property string $contract_agreement_modified_by
 * @property string $dhp_agreement
 * @property string $questionaire_drafted_on
 * @property string $questionaire_drafted_by
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step1 extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'step1';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['description'], 'string'],
            [['drafted_on', 'contract_agreement_drafted_on', 'contract_agreement_modified_on', 'questionaire_drafted_on', 'DOC', 'DOU'], 'safe'],
            [['status', 'CB', 'UB'], 'integer'],
            [['page_title'], 'string', 'max' => 250],
            [['retainer_contract_agreement', 'dhp_agreement'], 'string', 'max' => 100],
            [['description', 'page_title', 'drafted_by', 'contract_agreement_drafted_by', 'contract_agreement_modified_by', 'questionaire_drafted_by', 'drafted_on', 'contract_agreement_drafted_on', 'contract_agreement_modified_on', 'questionaire_drafted_on'], 'required'],
            [['retainer_contract_agreement', 'dhp_agreement'], 'file', 'extensions' => 'jpg, png, jpeg, pdf, txt, doc, docx'],
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
            'drafted_on' => 'Drafted On',
            'drafted_by' => 'Drafted By',
            'retainer_contract_agreement' => 'Retainer Contract Agreement',
            'contract_agreement_drafted_on' => 'Contract Agreement Drafted On',
            'contract_agreement_drafted_by' => 'Contract Agreement Drafted By',
            'contract_agreement_modified_on' => 'Contract Agreement Modified On',
            'contract_agreement_modified_by' => 'Contract Agreement Modified By',
            'dhp_agreement' => 'Dhp Agreement',
            'questionaire_drafted_on' => 'Questionaire Drafted On',
            'questionaire_drafted_by' => 'Questionaire Drafted By',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
