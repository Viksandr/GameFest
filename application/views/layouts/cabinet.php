<?php \app\assets\CabinetAsset::register($this); ?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Business
        </title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <header id="top">
        <div class="logo">
        </div>
        <div class="main-menu">
            <ul class="menu">
               <li>
                <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="main-a">Главная</a>
            </li>
            <li>
                <a href="#" class="main-a"><i class="icon-about">О Фестивале</i></a>
                <ul class="sub-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['site/main']) ?>" class="second-a">Общая информация</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/progg']) ?>" class="second-a">Программа фестиваля</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/faq']) ?>" class="second-a">FAQ</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/rules']) ?>" class="second-a">Общие правила фестифаля</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/partners']) ?>" class="second-a">Партнёры</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="main-a"><i class="icon-members">Участникам</i></a>
                <ul class="sub-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['site/cosplay']) ?>" class="second-a">Косплей-шоу</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/fair']) ?>" class="second-a">Ярмарка</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/stands']) ?>" class="second-a">Стенды</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/volunteering']) ?>" class="second-a">Волонтёрство</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/regulations']) ?>" class="second-a">Регламент турниров</a></li>
                    <?php if (!Yii::$app->user->isGuest) { ?>
                        <li><a href="<?= \yii\helpers\Url::to(['cabinet/index']) ?>" class="second-a">Личный кабинет</a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="<?= \yii\helpers\Url::to(['site/news']) ?>" class="main-a">Новости</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['site/contact']) ?>" class="main-a">Контакты</a></li>
            </ul>
        </div>
        <a id="touch-menu" class="mobile-menu" href="#">
            <i class="icon-reorder"></i>
            Меню
        </a>
    </header>

    <?= $content ?>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>