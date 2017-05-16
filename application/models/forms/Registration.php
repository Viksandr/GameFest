<?php

namespace app\models\forms;

use app\models\User;

class Registration extends \yii\base\Model
{
    public $login;
    public $password;

    public function rules() {
        return [
            [['login', 'password'], 'required'],

            ['login', 'unique', 'targetClass' => User::className()],
        ];
    }

    public function attributeLabels() {
        return [
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    public function run() {
        if ($this->validate()) {
                $user = new User();
                $user->login = $this->login;
                $user->password = \Yii::$app->security->generatePasswordHash($this->password);
                if($user->save()) {
                    return \Yii::$app->user->login($user);
                };
        }

        return false;
    }

}
