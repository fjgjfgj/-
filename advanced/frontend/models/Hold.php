<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hold".
 *
 * @property int $ins_id
 * @property int $activity_id
 * @property int $isactive
 * @property double $money
 *
 * @property Institution $ins
 * @property Activity $activity
 */
class Hold extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hold';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ins_id', 'activity_id'], 'required'],
            [['ins_id', 'activity_id', 'isactive'], 'integer'],
            [['money'], 'number'],
            [['ins_id', 'activity_id'], 'unique', 'targetAttribute' => ['ins_id', 'activity_id']],
            [['ins_id'], 'exist', 'skipOnError' => true, 'targetClass' => Institution::className(), 'targetAttribute' => ['ins_id' => 'ins_id']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activity::className(), 'targetAttribute' => ['activity_id' => 'activity_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ins_id' => 'Ins ID',
            'activity_id' => 'Activity ID',
            'isactive' => 'Isactive',
            'money' => 'Money',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIns()
    {
        return $this->hasOne(Institution::className(), ['ins_id' => 'ins_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(Activity::className(), ['activity_id' => 'activity_id']);
    }
}
