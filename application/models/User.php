<?php
namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules() {
        return [
            [['login', 'password', 'email'], 'required'],
            ['login', 'string', 'min' => 3, 'max' => 100],
            [['email'], 'email'],
            [['login', 'email'], 'unique'],
            ['password', 'string', 'min' => 60, 'max' => 60],
            [['createdAt', 'updatedAt'], 'safe']
        ];
    }

    public function attributeLabels() {
        return [
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'cratedAt' => 'Date created',
            'updatedAt' => 'Date updated'
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey() {}

    public function validateAuthKey($authKey) {}

    public static function findIdentityByAccessToken($token, $type = null) {}
}
