<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = 'Кабинет компании';
?>

<div class="main">

<div class="auth_notowner">
    <div class="notowner_head">
        <img src="/img/RIC-LO.svg" alt="Логотип ЕИРЦ">
        <h3>ВХОД</h3>
    </div>
    <div class="auth_form">
    <?php $form = ActiveForm::begin(['enableAjaxValidation' => true, 'validationUrl' => Url::to(['validate-form']),]); ?>
        <div class="form_group form_item">
            <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите email', 'class' => 'form-control'])->label('Email'); ?>
        </div>
        <div class="form_group form_item">
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Введите пароль', 'class' => 'form-control'])->label('Пароль'); ?>
        </div>
        <button class="button_submit" type="submit">Войти</button>
    <?php ActiveForm::end(); ?>
    </div>
    <div>
        <a class="register_link notowner" href="<?= Url::to(['auth/signup-company']); ?>" >Регистрация</a>
    </div>
</div>

        <div class="auth_notowner_info">
            <div class="notowner_container">
                <div class="auth_content">
                    <div class="auth_header">
                        <h2>Личный кабинет АО «ЕИРЦ ЛО» для компаний</h2></div>
                    <div class="auth_text">
                        <p><strong>Уважаемый клиент!</strong></p><br>
                        <p>Добро пожаловать в сервис Личный кабинет юридического лица!</p><br>
                        <p>Данный сервис позволяет управлять лицевыми счетами онлайн.<br>В Личном кабинете клиента доступны следующие опции:</p>
                        <ul>
                            <li>Передача показаний приборов учёта</li>
                            <li>Оплата счетов</li>
                            <li>Отслеживание начислений и оплат</li>
                            <li>Подключение нескольких счетов</li>
                            <li>Подача заявок в службу поддержки</li>
                            <li>Подписка на получение электронной квитанции</li>
                            <li>Заказ услуг и товаров</li>
                        </ul><br>
                        <p>Благодарим Вас за выбор Личного кабинета АО «ЕИРЦ ЛО».</p><br>
                        <p>Если у Вас возникли вопросы по регистрации в Личном кабинете клиента, напишите на support@epd47.ru или позвоните по многоканальному телефону 8 (812) 630-20-10, и мы оперативно поможем.</p>
                    </div>
                </div>
            </div>
        </div>

</div>