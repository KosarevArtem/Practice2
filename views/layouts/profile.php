<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use app\models\UserSettings;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?php $user = Yii::$app->user->identity; ?>
<div class="main_cabinet">
        <section class="section_left">
            <div class="sidebar">
                <a class="sidebar_logo" href="/">
                    <img src="/img/logo.svg" alt="">
                </a>
                <ul class="sidebar_nav">
                    <a href="post.php"><li>Передача показаний</li></a>
                    <a href="pay.php"><li>Оплата</li></a>
                    <a href="services.php"><li>Услуги</li></a>
                    <a href="data_form.php"><li>Ввод данных</li></a>
                    <li class="menu-item">
                        <a href="<?= Url::toRoute(['auth/logout']); ?>" class="link">Выход из системы</a>
                    </li>
                </ul>
                <p>Добро пожаловать, <?= $user->user_name ?></p>
            </div>
            <div class="sidebar_footer">
                <ul>
                    <a href="#"><li>Контакты</li></a>
                    <a href="#"><li>Помощь</li></a>
                </ul>
            </div>
        </section>
        <section class="section_right">
            <?=$content;?>
        </section>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>