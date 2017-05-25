<?php

namespace app\models;

class Tournament5vs5 extends Tournament {
    public static function tableName()
    {
        return 'tournaments_5_vs_5';
    }

    public function rules() {
        return [
            [['userId','teamName' ,'nickInGame1', 'nickInVk1', 'email', 'phone'], 'required'],
            [['email'], 'email'],
            [['nickInGame2','nickInVk2'],'required'],
            [['nickInGame3','nickInVk3'],'required'],
            [['nickInGame4','nickInVk4'],'required'],
            [['nickInGame5','nickInVk5'],'required'],
        ];
    }
}