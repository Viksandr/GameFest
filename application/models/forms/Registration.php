<?php

namespace app\models\forms;

use app\models\User;

class Registration extends \yii\base\Model
{
    public $login;
    public $password;
    public $email;

    public function rules() {
        return [
            [['login', 'password', 'email'], 'required'],
            [['email'], 'email'],

            ['login', 'unique', 'targetClass' => User::className()],
        ];
    }

    public function attributeLabels() {
        return [
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email'
        ];
    }

    public function run() {
        if ($this->validate()) {
                $user = new User();
                $user->login = $this->login;
                $user->password = \Yii::$app->security->generatePasswordHash($this->password);
                $user->email = $this->email;
                if($user->save()) {
                    return \Yii::$app->user->login($user);
                };
        }

        return false;
    }

}
