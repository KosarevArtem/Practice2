<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Регистрация';
?>

<div class="main">

<div class="owner_registration">
    <div class="owner_head">
        <img src="/img/RIC-LO.svg" alt="Логотип ЕИРЦ">
        <h4>Личный кабинет юридического лица АО «ЕИРЦ ЛО» 1</h4>
        <h3>Регистрация</h3>
    </div>
    <div class="reg_form">          
    <?php $form = ActiveForm::begin(['enableAjaxValidation' => true, 'validationUrl' => \yii\helpers\Url::to(['validate-form']),]); ?>
            <?= $form->field($model, 'user_status')->hiddenInput(['value'=> '0'])->label(false); ?>
            <div class="cont">
                <div class="form_container">
                    <div class="form_group form_item">
                        <?= $form->field($model, 'user_name')->textInput(['class' => 'form-control'])->label('Ваше имя'); ?>
                    </div>
                    <div class="form_group form_item">
                        <?= $form->field($model, 'user_password')->passwordInput(['class' => 'form-control'])->label('Пароль'); ?>
                    </div>
                    <div class="form_group form_item">
                        <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'form-control'])->label('Повторите пароль'); ?>
                    </div>
                    <div class="form_group form_item">
                        <?= $form->field($model, 'email')->input('email', ['class' => 'form-control']); ?>
                    </div>
                </div>
            </div>
            <button class="button_submit" type="submit">Зарегистрироваться</button>
            <?php ActiveForm::end(); ?>
    </div>
</div>

</div>