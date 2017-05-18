<?php
namespace app\controllers;
class CabinetController extends \yii\web\Controller
{
    public $layout='cabinet';
    public function actionIndex()
    {
        return $this->render('userAcc');
    }
}