<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Step2AccountDetails;

/**
 * Step2AccountDetailsSearch represents the model behind the search form about `common\models\Step2AccountDetails`.
 */
class Step2AccountDetailsSearch extends Step2AccountDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'currency', 'status', 'CB', 'UB'], 'integer'],
            [['debit_acc_bank_name', 'debit_acc_bank_institution_no', 'debit_acc_transit_no', 'debit_acc_swift_code', 'debit_acc_no', 'debit_acc_address', 'company_name', 'benefi_acc_bank_name', 'benefi_acc_bank_institution_no', 'benefi_acc_transit_no', 'benefi_acc_swift_code', 'benefi_acc_no', 'benefi_acc_address', 'invoice', 'reference_no', 'invoice_file', 'DOC', 'DOU'], 'safe'],
            [['exchange_rate', 'transfer_amount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Step2AccountDetails::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'currency' => $this->currency,
            'exchange_rate' => $this->exchange_rate,
            'transfer_amount' => $this->transfer_amount,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'debit_acc_bank_name', $this->debit_acc_bank_name])
            ->andFilterWhere(['like', 'debit_acc_bank_institution_no', $this->debit_acc_bank_institution_no])
            ->andFilterWhere(['like', 'debit_acc_transit_no', $this->debit_acc_transit_no])
            ->andFilterWhere(['like', 'debit_acc_swift_code', $this->debit_acc_swift_code])
            ->andFilterWhere(['like', 'debit_acc_no', $this->debit_acc_no])
            ->andFilterWhere(['like', 'debit_acc_address', $this->debit_acc_address])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'benefi_acc_bank_name', $this->benefi_acc_bank_name])
            ->andFilterWhere(['like', 'benefi_acc_bank_institution_no', $this->benefi_acc_bank_institution_no])
            ->andFilterWhere(['like', 'benefi_acc_transit_no', $this->benefi_acc_transit_no])
            ->andFilterWhere(['like', 'benefi_acc_swift_code', $this->benefi_acc_swift_code])
            ->andFilterWhere(['like', 'benefi_acc_no', $this->benefi_acc_no])
            ->andFilterWhere(['like', 'benefi_acc_address', $this->benefi_acc_address])
            ->andFilterWhere(['like', 'invoice', $this->invoice])
            ->andFilterWhere(['like', 'reference_no', $this->reference_no])
            ->andFilterWhere(['like', 'invoice_file', $this->invoice_file]);

        return $dataProvider;
    }
}
