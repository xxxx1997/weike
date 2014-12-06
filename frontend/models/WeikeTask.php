<?php

namespace app\models;
use yii\base\Model;
use Yii;
use app\models\WeikeUser;
use app\models\Xuqiu;
/**
 * This is the model class for table "weike_task".
 *
 * @property integer $task_id
 * @property integer $c_id
 * @property integer $end_time
 * @property integer $count
 * @property integer $danjia
 * @property integer $y_count
 * @property integer $y_price
 * @property integer $e_count
 * @property integer $e_price
 * @property integer $s_count
 * @property integer $s_price
 */
class WeikeTask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weike_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id'], 'required'],
            [['task_id', 'c_id', 'end_time', 'count', 'danjia', 'y_count', 'y_price', 'e_count', 'e_price', 's_count', 's_price'], 'integer']
        ];
    }
 public function getWeikeuser()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(Weikeuser::className(), ['user_id' => 'u_id']);
    }
    public function getXuqiu()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(xuqiu::className(), ['task_id' => 'task_id']);
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'c_id' => 'C ID',
            'end_time' => 'End Time',
            'count' => 'Count',
            'danjia' => 'Danjia',
            'y_count' => 'Y Count',
            'y_price' => 'Y Price',
            'e_count' => 'E Count',
            'e_price' => 'E Price',
            's_count' => 'S Count',
            's_price' => 'S Price',
        ];
    }
}
