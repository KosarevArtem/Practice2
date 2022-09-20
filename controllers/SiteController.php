<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;

class SiteController extends Controller {
    
    public function actionIndex() {

        
        return $this->render('index', []);
    }

    public function actionOwner() {

        if (Yii::$app->user->identity) {
            return $this->redirect(['profile/index']);
        }
        
        $loginForm = new LoginForm();

        if (\Yii::$app->request->getIsPost()) {
            $loginForm->load(\Yii::$app->request->post());
            if ($loginForm->validate()) {
                $user = $loginForm->getUser();
                \Yii::$app->user->login($user);
                return $this->redirect(['profile/index']);
            }
        }

        return $this->render('owner', ['model' => $loginForm]);
    }

    public function actionCompany() {

        if (Yii::$app->user->identity) {
            return $this->redirect(['profile/index']);
        }
        
        $loginForm = new LoginForm();

        if (\Yii::$app->request->getIsPost()) {
            $loginForm->load(\Yii::$app->request->post());
            if ($loginForm->validate()) {
                $user = $loginForm->getUser();
                \Yii::$app->user->login($user);
                return $this->redirect(['profile/index']);
            }
        }

        return $this->render('company', ['model' => $loginForm]);
    }

    public function actionValidateForm() 
    {

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $model = new LoginForm();
            if($model->load(Yii::$app->request->post()))
                return \yii\widgets\ActiveForm::validate($model);
        }
        throw new \yii\web\BadRequestHttpException('Bad request!');
    }
}