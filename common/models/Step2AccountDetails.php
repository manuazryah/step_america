<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step2_account_details".
 *
 * @property int $id
 * @property int $user_id
 * @property string $debit_acc_bank_name
 * @property string $debit_acc_bank_institution_no
 * @property string $debit_acc_transit_no
 * @property string $debit_acc_swift_code
 * @property string $debit_acc_no
 * @property string $debit_acc_address
 * @property string $company_name
 * @property string $benefi_acc_bank_name
 * @property string $benefi_acc_bank_institution_no
 * @property string $benefi_acc_transit_no
 * @property string $benefi_acc_swift_code
 * @property string $benefi_acc_no
 * @property string $benefi_acc_address
 * @property string $invoice
 * @property int $currency
 * @property double $exchange_rate
 * @property double $transfer_amount
 * @property string $reference_no
 * @property string $invoice_file
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step2AccountDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'step2_account_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'currency', 'status', 'CB', 'UB'], 'integer'],
            [['debit_acc_address', 'benefi_acc_address'], 'string'],
            [['exchange_rate', 'transfer_amount'], 'number'],
            [['DOC', 'DOU'], 'safe'],
            [['debit_acc_bank_name', 'debit_acc_bank_institution_no', 'company_name', 'benefi_acc_bank_name', 'benefi_acc_bank_institution_no'], 'string', 'max' => 255],
            [['debit_acc_transit_no', 'debit_acc_swift_code', 'debit_acc_no', 'benefi_acc_transit_no', 'benefi_acc_swift_code', 'benefi_acc_no', 'invoice', 'reference_no', 'invoice_file'], 'string', 'max' => 100],
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
            'debit_acc_bank_name' => 'Debit Acc Bank Name',
            'debit_acc_bank_institution_no' => 'Debit Acc Bank Institution No',
            'debit_acc_transit_no' => 'Debit Acc Transit No',
            'debit_acc_swift_code' => 'Debit Acc Swift Code',
            'debit_acc_no' => 'Debit Acc No',
            'debit_acc_address' => 'Debit Acc Address',
            'company_name' => 'Company Name',
            'benefi_acc_bank_name' => 'Benefi Acc Bank Name',
            'benefi_acc_bank_institution_no' => 'Benefi Acc Bank Institution No',
            'benefi_acc_transit_no' => 'Benefi Acc Transit No',
            'benefi_acc_swift_code' => 'Benefi Acc Swift Code',
            'benefi_acc_no' => 'Benefi Acc No',
            'benefi_acc_address' => 'Benefi Acc Address',
            'invoice' => 'Invoice',
            'currency' => 'Currency',
            'exchange_rate' => 'Exchange Rate',
            'transfer_amount' => 'Transfer Amount',
            'reference_no' => 'Reference No',
            'invoice_file' => 'Invoice File',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
