<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stu_lecture".
 *
 * @property int $lecture_id
 * @property int $stu_id
 * @property int $lecture_grade
 *
 * @property Lectures $lecture
 * @property Volunteer $stu
 */
class StuLecture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stu_lecture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lecture_id', 'stu_id'], 'required'],
            [['lecture_id', 'stu_id', 'lecture_grade'], 'integer'],
            [['lecture_id', 'stu_id'], 'unique', 'targetAttribute' => ['lecture_id', 'stu_id']],
            [['lecture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lectures::className(), 'targetAttribute' => ['lecture_id' => 'lecture_id']],
            [['stu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Volunteer::className(), 'targetAttribute' => ['stu_id' => 'stu_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lecture_id' => 'Lecture ID',
            'stu_id' => 'Stu ID',
            'lecture_grade' => 'Lecture Grade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLecture()
    {
        return $this->hasOne(Lectures::className(), ['lecture_id' => 'lecture_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStu()
    {
        return $this->hasOne(Volunteer::className(), ['stu_id' => 'stu_id']);
    }
}
