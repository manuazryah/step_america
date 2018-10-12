<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserChildrensInfo;

/**
 * UserChildrensInfoSearch represents the model behind the search form of `common\models\UserChildrensInfo`.
 */
class UserChildrensInfoSearch extends UserChildrensInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'country_of_birth', 'passport_issuance_company', 'country_of_citizenship', 'currently_status', 'applying_status', 'adopted_status', 'status', 'CB', 'UB'], 'integer'],
            [['last_name', 'middle_name', 'first_name', 'date_of_birth', 'passport_number', 'passport_issuance_date', 'passport_expiration_date', 'adopted_date', 'DOC', 'DOU'], 'safe'],
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
        $query = UserChildrensInfo::find();

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
            'date_of_birth' => $this->date_of_birth,
            'country_of_birth' => $this->country_of_birth,
            'passport_issuance_company' => $this->passport_issuance_company,
            'passport_issuance_date' => $this->passport_issuance_date,
            'passport_expiration_date' => $this->passport_expiration_date,
            'country_of_citizenship' => $this->country_of_citizenship,
            'currently_status' => $this->currently_status,
            'applying_status' => $this->applying_status,
            'adopted_status' => $this->adopted_status,
            'adopted_date' => $this->adopted_date,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'passport_number', $this->passport_number]);

        return $dataProvider;
    }
}
