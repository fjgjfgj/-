<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lectures;

/**
 * LecturesSearch represents the model behind the search form of `app\models\Lectures`.
 */
class LecturesSearch extends Lectures
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lecture_id'], 'integer'],
            [['lecturer', 'lecture_date'], 'safe'],
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
        $query = Lectures::find();

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
            'lecture_date' => $this->lecture_date,
        ]);

        $query->andFilterWhere(['like', 'lecturer', $this->lecturer]);

        return $dataProvider;
    }
}
