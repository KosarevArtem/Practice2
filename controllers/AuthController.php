<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\SignupForm;
use app\models\LoginForm;

class AuthController extends Controller {
    
    public function actionSignupOwner() {

        $model = new SignupForm();

        if (Yii::$app->request->getIsPost()) {
            $model->load(Yii::$app->request->post());
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup/owner', ['model' => $model]);
    }

    public function actionSignupCompany() {

        $model = new SignupForm();

        if (Yii::$app->request->getIsPost()) {
            $model->load(Yii::$app->request->post());
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup/company', ['model' => $model]);
    }

    public function actionValidateForm() 
    {

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $model = new SignupForm();
            if($model->load(Yii::$app->request->post()))
                return \yii\widgets\ActiveForm::validate($model);
        }
        throw new \yii\web\BadRequestHttpException('Bad request!');
    }

    public function actionLogout() {
        
        if (Yii::$app->user->identity) {
            Yii::$app->user->logout();
            return $this->goHome();
        }
    }
}