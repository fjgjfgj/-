<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property int $activity_id
 * @property string $activity_time
 * @property string $activity_site
 * @property string $activity_theme
 *
 * @property Hold[] $holds
 * @property Institution[] $ins
 * @property StuActivity[] $stuActivities
 * @property Volunteer[] $stus
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id'], 'required'],
            [['activity_id'], 'integer'],
            [['activity_time', 'activity_site', 'activity_theme'], 'string', 'max' => 1024],
            [['activity_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => 'Activity ID',
            'activity_time' => 'Activity Time',
            'activity_site' => 'Activity Site',
            'activity_theme' => 'Activity Theme',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHolds()
    {
        return $this->hasMany(Hold::className(), ['activity_id' => 'activity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIns()
    {
        return $this->hasMany(Institution::className(), ['ins_id' => 'ins_id'])->viaTable('hold', ['activity_id' => 'activity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuActivities()
    {
        return $this->hasMany(StuActivity::className(), ['activity_id' => 'activity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStus()
    {
        return $this->hasMany(Volunteer::className(), ['stu_id' => 'stu_id'])->viaTable('stu_activity', ['activity_id' => 'activity_id']);
    }
}
