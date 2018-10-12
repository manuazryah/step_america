<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserFamilyInfo;

/**
 * UserFamilyInfoSearch represents the model behind the search form of `common\models\UserFamilyInfo`.
 */
class UserFamilyInfoSearch extends UserFamilyInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'marital_status', 'currently', 'no_of_marriages', 'spouse_1_country', 'spouse_2_country', 'state_of_marriage', 'country_of_marriage', 'state_of_birth', 'country_of_birth', 'spouse_accompany', 'status', 'CB', 'UB'], 'integer'],
            [['spouse_1_first_name', 'spouse_1_middle_name', 'spouse_1_last_name', 'spouse_1_dob', 'spouse_1_state', 'spouse_2_first_name', 'spouse_2_middle_name', 'spouse_2_last_name', 'spouse_2_dob', 'spouse_2_state', 'marriage_date', 'last_name', 'maiden_name', 'first_name', 'middle_name', 'dob', 'passport_number', 'passport_issuance_company', 'passport_issuance_date', 'passport_expiration_date', 'country_of_citizenship', 'DOC', 'DOU'], 'safe'],
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
        $query = UserFamilyInfo::find();

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
            'marital_status' => $this->marital_status,
            'currently' => $this->currently,
            'no_of_marriages' => $this->no_of_marriages,
            'spouse_1_dob' => $this->spouse_1_dob,
            'spouse_1_country' => $this->spouse_1_country,
            'spouse_2_dob' => $this->spouse_2_dob,
            'spouse_2_country' => $this->spouse_2_country,
            'marriage_date' => $this->marriage_date,
            'state_of_marriage' => $this->state_of_marriage,
            'country_of_marriage' => $this->country_of_marriage,
            'dob' => $this->dob,
            'state_of_birth' => $this->state_of_birth,
            'country_of_birth' => $this->country_of_birth,
            'passport_issuance_date' => $this->passport_issuance_date,
            'passport_expiration_date' => $this->passport_expiration_date,
            'spouse_accompany' => $this->spouse_accompany,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'spouse_1_first_name', $this->spouse_1_first_name])
            ->andFilterWhere(['like', 'spouse_1_middle_name', $this->spouse_1_middle_name])
            ->andFilterWhere(['like', 'spouse_1_last_name', $this->spouse_1_last_name])
            ->andFilterWhere(['like', 'spouse_1_state', $this->spouse_1_state])
            ->andFilterWhere(['like', 'spouse_2_first_name', $this->spouse_2_first_name])
            ->andFilterWhere(['like', 'spouse_2_middle_name', $this->spouse_2_middle_name])
            ->andFilterWhere(['like', 'spouse_2_last_name', $this->spouse_2_last_name])
            ->andFilterWhere(['like', 'spouse_2_state', $this->spouse_2_state])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'maiden_name', $this->maiden_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'passport_number', $this->passport_number])
            ->andFilterWhere(['like', 'passport_issuance_company', $this->passport_issuance_company])
            ->andFilterWhere(['like', 'country_of_citizenship', $this->country_of_citizenship]);

        return $dataProvider;
    }
}
