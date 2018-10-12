<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserConatctInfo;

/**
 * UserConatctInfoSearch represents the model behind the search form of `common\models\UserConatctInfo`.
 */
class UserConatctInfoSearch extends UserConatctInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'country', 'deportation_proceedings', 'worked_in_us', 'status', 'CB', 'UB'], 'integer'],
            [['street_number', 'appt_number', 'city', 'state', 'daytime_contact_no', 'mobile_number', 'email', 'email_1', 'foreign_address', 'foreign_address_native', 'explain_details', 'worked_explain_details', 'DOC', 'DOU'], 'safe'],
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
        $query = UserConatctInfo::find();

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
            'country' => $this->country,
            'deportation_proceedings' => $this->deportation_proceedings,
            'worked_in_us' => $this->worked_in_us,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'street_number', $this->street_number])
            ->andFilterWhere(['like', 'appt_number', $this->appt_number])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'daytime_contact_no', $this->daytime_contact_no])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'email_1', $this->email_1])
            ->andFilterWhere(['like', 'foreign_address', $this->foreign_address])
            ->andFilterWhere(['like', 'foreign_address_native', $this->foreign_address_native])
            ->andFilterWhere(['like', 'explain_details', $this->explain_details])
            ->andFilterWhere(['like', 'worked_explain_details', $this->worked_explain_details]);

        return $dataProvider;
    }
}
