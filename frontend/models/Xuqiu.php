<?php

namespace app\models;
use app\models\WeikeTask;
use Yii;

/**
 * This is the model class for table "xuqiu".
 *
 * @property integer $xuqiu_id
 * @property integer $hangye_id
 * @property integer $task_id
 * @property string $title
 * @property string $desc
 * @property string $file
 * @property integer $phone
 * @property integer $state
 */
class Xuqiu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xuqiu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['xuqiu_id', 'hangye_id', 'task_id', 'phone', 'state'], 'integer'],
            [['desc'], 'string'],
            [['title', 'file'], 'string', 'max' => 20]
        ];
    }
    public function getWeikeTask()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(WeikeTask::className(), ['task_id' => 'task_id']);
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'xuqiu_id' => 'Xuqiu ID',
            'hangye_id' => 'Hangye ID',
            'task_id' => 'Task ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'file' => 'File',
            'phone' => 'Phone',
            'state' => 'State',
        ];
    }
}
