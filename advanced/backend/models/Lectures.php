<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lectures".
 *
 * @property int $lecture_id
 * @property string $lecturer
 * @property string $lecture_date
 *
 * @property StuLecture[] $stuLectures
 * @property Volunteer[] $stus
 */
class Lectures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lectures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lecture_id'], 'required'],
            [['lecture_id'], 'integer'],
            [['lecture_date'], 'safe'],
            [['lecturer'], 'string', 'max' => 50],
            [['lecture_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lecture_id' => 'Lecture ID',
            'lecturer' => 'Lecturer',
            'lecture_date' => 'Lecture Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuLectures()
    {
        return $this->hasMany(StuLecture::className(), ['lecture_id' => 'lecture_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStus()
    {
        return $this->hasMany(Volunteer::className(), ['stu_id' => 'stu_id'])->viaTable('stu_lecture', ['lecture_id' => 'lecture_id']);
    }
}
