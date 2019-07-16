<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StuLecture;

/**
 * StulectureSearch represents the model behind the search form of `app\models\StuLecture`.
 */
class StulectureSearch extends StuLecture
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lecture_id', 'stu_id', 'lecture_grade'], 'integer'],
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
        $query = StuLecture::find();

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
            'lecture_id' => $this->lecture_id,
            'stu_id' => $this->stu_id,
            'lecture_grade' => $this->lecture_grade,
        ]);

        return $dataProvider;
    }
}
