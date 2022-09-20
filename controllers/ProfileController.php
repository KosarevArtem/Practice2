<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionIndex() {

        $this->layout = 'profile';
        
        return $this->render('index', []);
    }
}