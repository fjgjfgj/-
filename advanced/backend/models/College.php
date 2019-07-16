<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property int $college_id
 * @property string $college_name
 * @property string $college_leader
 * @property int $college_vnum
 *
 * @property Volunteer[] $volunteers
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'college';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['college_id'], 'required'],
            [['college_id', 'college_vnum'], 'integer'],
            [['college_name', 'college_leader'], 'string', 'max' => 50],
            [['college_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'college_id' => 'College ID',
            'college_name' => 'College Name',
            'college_leader' => 'College Leader',
            'college_vnum' => 'College Vnum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteers()
    {
        return $this->hasMany(Volunteer::className(), ['college_id' => 'college_id']);
    }
}
