<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "new_user".
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string|null $authKey
 * @property string|null $accessToken
 */
class NewUser extends \yii\db\ActiveRecord implements \yii\web\identityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'torty.new_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','email'], 'string', 'max' => 80],
            [['password', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type=null)
    {
        return self::findOne(['accessToken'=>$token]);
    }

    public static function findByUsername($username)
    {
        return self::findOne('username'=>$username);
    }

    public static function getId()
    {
        return $this->id;
    }

}
