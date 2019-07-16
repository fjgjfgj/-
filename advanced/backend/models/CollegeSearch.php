<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\College;

/**
 * CollegeSearch represents the model behind the search form of `app\models\College`.
 */
class CollegeSearch extends College
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['college_id', 'college_vnum'], 'integer'],
            [['college_name', 'college_leader'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = College::find();

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
            'college_id' => $this->college_id,
            'college_vnum' => $this->college_vnum,
        ]);

        $query->andFilterWhere(['like', 'college_name', $this->college_name])
            ->andFilterWhere(['like', 'college_leader', $this->college_leader]);

        return $dataProvider;
    }
}
