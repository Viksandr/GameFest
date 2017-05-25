<?php

namespace app\models;

class Tournament1vs1 extends Tournament {
    public static function tableName()
    {
        return 'tournaments_1_vs_1';
    }

    public function rules() {
        return [
            [['userId', 'nickInGame', 'nickInVk', 'email', 'phone'], 'required'],
            [['email'], 'email'],
        ];
    }
}