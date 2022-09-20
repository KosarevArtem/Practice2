<?php

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Выберите ваш личный кабинет';
?>

<div class="main_header">
    <h1 class="status_container">Выберите ваш личный кабинет</h1>
</div>

<div class="main">

    <div class="main_left">
        <a class="link_owner_choice" href="<?= Url::to(['site/owner']); ?>">
            <div class="owner_container_choice">
                <div class="auth_content_choice">
                    <div class="auth_header_choice">
                        <h2>Личный кабинет АО «ЕИРЦ ЛО» для собственников</h2>
                    </div>
                    <div class="auth_text_choice">
                        <p><strong>Уважаемый клиент!</strong></p><br>
                        <p>Данный сервис позволяет управлять лицевыми счетами онлайн.<br>В Личном кабинете клиента доступны следующие опции:</p>
                        <ul>
                            <li>Передача показаний приборов учёта</li>
                            <li>Оплата счетов</li>
                            <li>Отслеживание начислений и оплат</li>
                            <li>Подключение нескольких счетов</li>
                            <li>Подача заявок в службу поддержки</li>
                            <li>Подписка на получение электронной квитанции</li>
                            <li>Заказ услуг и товаров</li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="main_right">
        <a class="link_notowner_choice" href="<?= Url::to(['site/company']); ?>">
            <div class="notowner_container_choice">
                <div class="auth_content_choice">
                    <div class="auth_header_choice">
                        <h2>Личный кабинет АО «ЕИРЦ ЛО» для компаний</h2>
                        <div class="auth_text_choice">
                            <p><strong>Уважаемый клиент!</strong></p><br>
                            <p>Данный сервис позволяет управлять лицевыми счетами онлайн.<br>В Личном кабинете клиента доступны следующие опции:</p>
                            <ul>
                                <li>Передача показаний приборов учёта</li>
                                <li>Оплата счетов</li>
                                <li>Отслеживание начислений и оплат</li>
                                <li>Подключение нескольких счетов</li>
                                <li>Подача заявок в службу поддержки</li>
                                <li>Подписка на получение электронной квитанции</li>
                                <li>Заказ услуг и товаров</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>