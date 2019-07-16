<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $team_id
 * @property string $team_name
 *
 * @property Volunteer[] $volunteers
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_id'], 'required'],
            [['team_id'], 'integer'],
            [['team_name'], 'string', 'max' => 50],
            [['team_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'team_name' => 'Team Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteers()
    {
        return $this->hasMany(Volunteer::className(), ['team_id' => 'team_id']);
    }
}
