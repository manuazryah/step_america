<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Step1;

/**
 * Step1Search represents the model behind the search form about `common\models\Step1`.
 */
class Step1Search extends Step1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['page_title', 'description', 'drafted_on', 'drafted_by', 'retainer_contract_agreement', 'contract_agreement_drafted_on', 'contract_agreement_drafted_by', 'contract_agreement_modified_on', 'contract_agreement_modified_by', 'dhp_agreement', 'questionaire_drafted_on', 'questionaire_drafted_by', 'DOC', 'DOU'], 'safe'],
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
        $query = Step1::find();

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
            'drafted_on' => $this->drafted_on,
            'contract_agreement_drafted_on' => $this->contract_agreement_drafted_on,
            'contract_agreement_modified_on' => $this->contract_agreement_modified_on,
            'questionaire_drafted_on' => $this->questionaire_drafted_on,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'page_title', $this->page_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'drafted_by', $this->drafted_by])
            ->andFilterWhere(['like', 'retainer_contract_agreement', $this->retainer_contract_agreement])
            ->andFilterWhere(['like', 'contract_agreement_drafted_by', $this->contract_agreement_drafted_by])
            ->andFilterWhere(['like', 'contract_agreement_modified_by', $this->contract_agreement_modified_by])
            ->andFilterWhere(['like', 'dhp_agreement', $this->dhp_agreement])
            ->andFilterWhere(['like', 'questionaire_drafted_by', $this->questionaire_drafted_by]);

        return $dataProvider;
    }
}
