<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institution".
 *
 * @property int $ins_id
 * @property string $ins_name
 * @property string $ins_phonenum
 *
 * @property Hold[] $holds
 * @property Activity[] $activities
 */
class Institution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'institution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ins_id'], 'required'],
            [['ins_id'], 'integer'],
            [['ins_name'], 'string', 'max' => 100],
            [['ins_phonenum'], 'string', 'max' => 50],
            [['ins_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ins_id' => 'Ins ID',
            'ins_name' => 'Ins Name',
            'ins_phonenum' => 'Ins Phonenum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHolds()
    {
        return $this->hasMany(Hold::className(), ['ins_id' => 'ins_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['activity_id' => 'activity_id'])->viaTable('hold', ['ins_id' => 'ins_id']);
    }
}
