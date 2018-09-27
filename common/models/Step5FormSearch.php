<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Step5Form;

/**
 * Step5FormSearch represents the model behind the search form about `common\models\Step5Form`.
 */
class Step5FormSearch extends Step5Form
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'project'], 'integer'],
            [['title', 'author', 'date', 'doc'], 'safe'],
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
        $query = Step5Form::find();

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
            'date' => $this->date,
            'project' => $this->project,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'doc', $this->doc]);

        return $dataProvider;
    }
}
