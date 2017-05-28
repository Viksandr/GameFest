<section id="aboutfest">
    <div class="parallax-window" data-parallax="scroll" data-image-src="/img/background.jpg">	<div class="fest">
            <h1>Shinsen fest</h1>
            <p>Уникальное сочетание киберспорта и аниме индустрии, не пропусти это событие.</p>


            <?php if (Yii::$app->user->isGuest) { ?>
                <input type="submit" id="go" value="Подать заявку">
            <?php } ?>
            <?php if (!Yii::$app->user->isGuest) { ?>
                <form action="<?= \yii\helpers\Url::to(['cabinet/index']) ?>" style="display:inline-block">
                    <input type="submit" value="Личный кабинет">
                </form>
            <?php } ?>
        </div>

        <div id="modal_form">
            <form class="login" method="post" action="<?= \yii\helpers\Url::to(['user/login']) ?>">
                <p>Вход</p>
                <input type="text" name="Login[login]" placeholder="Логин" value="<?= $loginModel->login ?>"/>
                <input type="password" name="Login[password]" placeholder="Пароль"/>
                <input type="submit" value="Войти">
                <a href="<?= \yii\helpers\Url::to([]) ?>">Забыли пароль?</a>
            </form>
            <form class="signin" method="post" action="<?= \yii\helpers\Url::to(['user/registration']) ?>">
                <div class="border-login"></div>
                <p>Ещё нет аккаунта?</p>
                <input type="text"name="Registration[email]" placeholder="Email" value="<?= $registrationModel->email ?>"/>
                <input type="text" style="margin-top:0;border-radius:0;border-top:none" name="Registration[login]" placeholder="Логин" value="<?= $registrationModel->login ?>"/>
                <input type="password" name="Registration[password]" placeholder="Пароль"/>
                <input type="submit" class="signin-button" value="Зарегистрироваться">
            </form>

        </div>
        <div id="overlay"></div>
</section>
<section id="aboutus">
    <div class="block">
        <div class="aboutus">
            <p>550x280</p>
        </div>
        <div class="aboutus-text">
            <span>"Shinsen" - начало.</span> <p>19 августа 2к17-го года будет первый в своем роде фестиваль, и пройдет он в мариуполе.</p>
            <a href="<?= \yii\helpers\Url::to(['site/main']) ?>">Подробнее</a>
        </div>
    </div>
</section>
<section id="tournament">
    <div class="block">
        <div class="tournament">
            <p>550x280</p>
        </div>
        <div class="tournament-text">
            <span>Tournaments</span> <p>В рамках фестиваля будут проведены турниры по командным и одиночным киберспортивным дисциплинам, а также по консольным и настольным играм.</p>
            <a href="#">Детали</a>
        </div>
    </div>
</section>
<section id="cosplayShow">
    <div class="block">
        <div class="cosplayShow">
        </div>
        <div class="cosplayShow-text">
            <span>Косплей шоу</span> <p>Для всех желающих выступать, наша сцена готова к вашему выступлению, вопрос только в том - а вы готовы?</p>
            <a href="#">Хочу участвовать</a>
        </div>
    </div>
</section>
<section id="programa">
    <div class="block">
        <div class="tournament">
            <p>550x280</p>
        </div>
        <div class="programa-text">
            <span>Программа холла</span> <p>Различные стенды, ивенты и игровые зоны не дадут вам заскучать во время нашего фестиваля. А горничные в мейд кафе обслужат вас и не дадут... умереть с голоду.</p>
            <a href="#">Узнать больше</a>
        </div>
    </div>
</section>
