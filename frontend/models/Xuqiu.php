<?php

namespace app\models;

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
