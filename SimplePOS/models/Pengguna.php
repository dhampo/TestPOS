<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $Id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property int $level
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'username', 'password', 'authKey', 'accessToken', 'level'], 'required'],
            [['Id', 'level'], 'default', 'value' => null],
            [['Id', 'level'], 'integer'],
            [['username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 40],
            [['Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'level' => 'Level',
        ];
    }
}
