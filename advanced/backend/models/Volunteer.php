<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property int $stu_id
 * @property int $college_id
 * @property int $team_id
 * @property string $stu_name
 * @property string $stu_college
 * @property string $stu_gender
 * @property string $stu_nation
 * @property int $stu_age
 *
 * @property StuActivity[] $stuActivities
 * @property Activity[] $activities
 * @property StuLecture[] $stuLectures
 * @property Lectures[] $lectures
 * @property College $college
 * @property Team $team
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stu_id'], 'required'],
            [['stu_id', 'college_id', 'team_id', 'stu_age'], 'integer'],
            [['stu_name'], 'string', 'max' => 50],
            [['stu_college'], 'string', 'max' => 100],
            [['stu_gender'], 'string', 'max' => 10],
            [['stu_nation'], 'string', 'max' => 30],
            [['stu_id'], 'unique'],
            [['college_id'], 'exist', 'skipOnError' => true, 'targetClass' => College::className(), 'targetAttribute' => ['college_id' => 'college_id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'team_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stu_id' => 'Stu ID',
            'college_id' => 'College ID',
            'team_id' => 'Team ID',
            'stu_name' => 'Stu Name',
            'stu_college' => 'Stu College',
            'stu_gender' => 'Stu Gender',
            'stu_nation' => 'Stu Nation',
            'stu_age' => 'Stu Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuActivities()
    {
        return $this->hasMany(StuActivity::className(), ['stu_id' => 'stu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['activity_id' => 'activity_id'])->viaTable('stu_activity', ['stu_id' => 'stu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuLectures()
    {
        return $this->hasMany(StuLecture::className(), ['stu_id' => 'stu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLectures()
    {
        return $this->hasMany(Lectures::className(), ['lecture_id' => 'lecture_id'])->viaTable('stu_lecture', ['stu_id' => 'stu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege()
    {
        return $this->hasOne(College::className(), ['college_id' => 'college_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['team_id' => 'team_id']);
    }
}
