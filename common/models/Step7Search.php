<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Step7;

/**
 * Step7Search represents the model behind the search form about `common\models\Step7`.
 */
class Step7Search extends Step7
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['page_title', 'description', 'escrow_agent', 'llc', 'administrative_agent', 'bank_name', 'bank_address', 'bank_institution', 'bank_branch', 'bank_account', 'swift_id', 'contact_name', 'contact', 'ABA', 'DOC', 'DOU'], 'safe'],
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
        $query = Step7::find();

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
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'page_title', $this->page_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'escrow_agent', $this->escrow_agent])
            ->andFilterWhere(['like', 'llc', $this->llc])
            ->andFilterWhere(['like', 'administrative_agent', $this->administrative_agent])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'bank_institution', $this->bank_institution])
            ->andFilterWhere(['like', 'bank_branch', $this->bank_branch])
            ->andFilterWhere(['like', 'bank_account', $this->bank_account])
            ->andFilterWhere(['like', 'swift_id', $this->swift_id])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'ABA', $this->ABA]);

        return $dataProvider;
    }
}
