<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserBiographicalInfo;

/**
 * UserBiographicalInfoSearch represents the model behind the search form of `common\models\UserBiographicalInfo`.
 */
class UserBiographicalInfoSearch extends UserBiographicalInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','gender', 'country_of_birth', 'country_of_citizenship', 'other_country_citizenship', 'immigration_status', 'issuance_country', 'permanent_resident', 'family_members', 'visa_number', 'visa_issuance_country', 'issued_any_visa', 'status', 'CB', 'UB'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'other_name', 'dob', 'state_of_birth', 'date_of_last_entry', 'form_number', 'social_security_number', 'alien_reg_number', 'immigration_expiration_date', 'passport_number', 'issuance_date', 'expiration_date', 'expiration_on_form', 'visa_issuance_date', 'explain_visa_details', 'DOC', 'DOU'], 'safe'],
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
        $query = UserBiographicalInfo::find();

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
            'gender' => $this->gender,
            'dob' => $this->dob,
            'country_of_birth' => $this->country_of_birth,
            'country_of_citizenship' => $this->country_of_citizenship,
            'other_country_citizenship' => $this->other_country_citizenship,
            'date_of_last_entry' => $this->date_of_last_entry,
            'immigration_status' => $this->immigration_status,
            'immigration_expiration_date' => $this->immigration_expiration_date,
            'issuance_country' => $this->issuance_country,
            'issuance_date' => $this->issuance_date,
            'expiration_date' => $this->expiration_date,
            'permanent_resident' => $this->permanent_resident,
            'family_members' => $this->family_members,
            'visa_number' => $this->visa_number,
            'visa_issuance_date' => $this->visa_issuance_date,
            'visa_issuance_country' => $this->visa_issuance_country,
            'issued_any_visa' => $this->issued_any_visa,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'other_name', $this->other_name])
            ->andFilterWhere(['like', 'state_of_birth', $this->state_of_birth])
            ->andFilterWhere(['like', 'form_number', $this->form_number])
            ->andFilterWhere(['like', 'social_security_number', $this->social_security_number])
            ->andFilterWhere(['like', 'alien_reg_number', $this->alien_reg_number])
            ->andFilterWhere(['like', 'passport_number', $this->passport_number])
            ->andFilterWhere(['like', 'expiration_on_form', $this->expiration_on_form])
            ->andFilterWhere(['like', 'explain_visa_details', $this->explain_visa_details]);

        return $dataProvider;
    }
}
