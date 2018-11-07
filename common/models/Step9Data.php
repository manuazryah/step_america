<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step9_data".
 *
 * @property int $id
 * @property int $user_id
 * @property string $bank_name
 * @property string $bank_institution
 * @property string $transit
 * @property string $swift_code
 * @property string $bank_account
 * @property string $bank_address
 * @property string $company_name
 * @property string $beneficiary_bank_name
 * @property string $beneficiary_bank_institution
 * @property string $beneficiary_transit
 * @property string $beneficiary_swift_code
 * @property string $beneficiary_bank_account
 * @property string $beneficiary_bank_address
 * @property string $invoice
 * @property string $currency
 * @property string $exchange_rate
 * @property string $transfer_amount
 * @property string $reference_number
 * @property string $invoice_file
 */
class Step9Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'step9_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['bank_name', 'bank_institution', 'transit', 'swift_code', 'bank_account', 'bank_address', 'company_name', 'beneficiary_bank_name', 'beneficiary_bank_institution', 'beneficiary_transit', 'beneficiary_swift_code', 'beneficiary_bank_account', 'beneficiary_bank_address', 'invoice', 'currency', 'exchange_rate', 'transfer_amount', 'reference_number', 'invoice_file'], 'string', 'max' => 255],
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
            'bank_name' => 'Bank Name',
            'bank_institution' => 'Bank Institution',
            'transit' => 'Transit',
            'swift_code' => 'Swift Code',
            'bank_account' => 'Bank Account',
            'bank_address' => 'Bank Address',
            'company_name' => 'Company Name',
            'beneficiary_bank_name' => 'Beneficiary Bank Name',
            'beneficiary_bank_institution' => 'Beneficiary Bank Institution',
            'beneficiary_transit' => 'Beneficiary Transit',
            'beneficiary_swift_code' => 'Beneficiary Swift Code',
            'beneficiary_bank_account' => 'Beneficiary Bank Account',
            'beneficiary_bank_address' => 'Beneficiary Bank Address',
            'invoice' => 'Invoice',
            'currency' => 'Currency',
            'exchange_rate' => 'Exchange Rate',
            'transfer_amount' => 'Transfer Amount',
            'reference_number' => 'Reference Number',
            'invoice_file' => 'Invoice File',
        ];
    }
}
