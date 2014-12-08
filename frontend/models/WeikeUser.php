<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weike_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $email
 */
class WeikeUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weike_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'email'], 'string', 'max' => 20],
            [['user_password'], 'string', 'max' => 32]
        ];
    }
   public $a;

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_password' => 'User Password',
            'email' => 'Email',
        ];
    }
}
