<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stu_activity".
 *
 * @property int $activity_id
 * @property int $stu_id
 * @property double $volunteer_time
 *
 * @property Activity $activity
 * @property Volunteer $stu
 */
class StuActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stu_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'stu_id'], 'required'],
            [['activity_id', 'stu_id'], 'integer'],
            [['volunteer_time'], 'number'],
            [['activity_id', 'stu_id'], 'unique', 'targetAttribute' => ['activity_id', 'stu_id']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activity::className(), 'targetAttribute' => ['activity_id' => 'activity_id']],
            [['stu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Volunteer::className(), 'targetAttribute' => ['stu_id' => 'stu_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => 'Activity ID',
            'stu_id' => 'Stu ID',
            'volunteer_time' => 'Volunteer Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(Activity::className(), ['activity_id' => 'activity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStu()
    {
        return $this->hasOne(Volunteer::className(), ['stu_id' => 'stu_id']);
    }
}
