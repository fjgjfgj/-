<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Volunteer;

/**
 * VolunteerSearch represents the model behind the search form of `app\models\Volunteer`.
 */
class VolunteerSearch extends Volunteer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stu_id', 'college_id', 'team_id', 'stu_age'], 'integer'],
            [['stu_name', 'stu_college', 'stu_gender', 'stu_nation'], 'safe'],
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
        $query = Volunteer::find();

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
            'stu_id' => $this->stu_id,
            'college_id' => $this->college_id,
            'team_id' => $this->team_id,
            'stu_age' => $this->stu_age,
        ]);

        $query->andFilterWhere(['like', 'stu_name', $this->stu_name])
            ->andFilterWhere(['like', 'stu_college', $this->stu_college])
            ->andFilterWhere(['like', 'stu_gender', $this->stu_gender])
            ->andFilterWhere(['like', 'stu_nation', $this->stu_nation]);

        return $dataProvider;
    }
}
