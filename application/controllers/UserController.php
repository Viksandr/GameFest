<?php

namespace app\controllers;

use app\models\User;
use app\models\forms\Registration;
use app\models\forms\Login;

class UserController extends \yii\web\Controller {
    // route = site/user/registration
    public function actionRegistration() {
        $model = new Registration();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());

            if ($model->run()) {
                return $this->goHome();
            }
        }

        return $this->render('/registration', [
            'model' => $model
            
            
        ]);
    }

    public function actionLogin() {
        $model = new Login();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());

            if ($model->run()) {
                return $this->goHome();
            }
        }

        return $this->render('/login', [
            'model' => $model


        ]);

    }

    public function actionLogout() {

  \Yii::$app->user->logout();

        return $this->goHome();

    }
}