<?php

namespace app\models;

class Tournament extends \yii\db\ActiveRecord {
    const TYPE_1_VS_1 = 1;
    const TYPE_5_VS_5 = 2;
    const TYPE_KOSPLAY = 3;
    const TYPE_K_POP = 4;

    public static function getTournament($type, $id = null) {
        switch ($type) {
            case self::TYPE_1_VS_1 :
                return $id ? Tournament1vs1::findOne($id) : new Tournament1vs1();
            case self::TYPE_5_VS_5 :
                return;
            case self::TYPE_COSPLAY :
                return;
            case self::TYPE_K_POP :
                return;
            
        }
    }
}