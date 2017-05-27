<?php
namespace app\controllers;
class SiteController extends \yii\web\Controller
{
        public function actionIndex()
        {
            return $this->render('homePage');
        }
        public function actionContact()
        {
        	return $this->render('contactPage');
        }
        public function actionProgg()
        {
        	return $this->render('festProg');
        }
        public function actionRules()
        {
        	return $this->render('festRules');
        }
        public function actionFaq()
        {
        	return $this->render('FAQ');
        }
        public function actionProg()
        {
        	return $this->render('festProg');
        }
        public function actionMain()
        {
        	return $this->render('mainInfo');
        }
        public function actionPartners()
        {
        	return $this->render('partners');
        }
        public function actionFair()
        {
        	return $this->render('Fair');
        }
        public function actionStands()
        {
        	return $this->render('Stands');
        }
        public function actionCosplay()
        {
        	return $this->render('cosplayShow');
        }
        public function actionRegulations()
        {
        	return $this->render('regulations');
        }
        public function actionVolunteering()
        {
        	return $this->render('volunteering');
        }
        public function actionNews()
        {
        	return $this->render('News');
        }
}