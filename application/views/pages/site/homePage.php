<section id="aboutfest">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/background.jpg">	<div class="fest">
            <h1>ФАНТАСТИЧЕСКИЙ ФЕСТ</h1>
            <p>Окунись в мир волшебства и веселья вместе с крупнейшим Харьковским фендом-фестивалем "ХАНИФЕСТ"! Ты просто не имеешь права пропустить столь масштабное и захватывающее действо!</p>


            <?php if (Yii::$app->user->isGuest) { ?>
                <input type="submit" id="go" value="Подать заявку">
            <?php } ?>
<input type="submit" value="Информация">
        </div>

        <div id="modal_form">
            <form class="login" method="post" action="<?= \yii\helpers\Url::to(['user/login']) ?>">
                <p>Вход</p>
                <input type="text" name="Login[login]" placeholder="Логин" value="<?= $loginModel->login ?>"/>
                <input type="password" name="Login[password]" placeholder="Пароль"/>
                <input type="submit" value="Войти">
                <a href="<?= \yii\helpers\Url::to([]) ?>">Забыли пароль?</a>
            </form>
            <form class="signin login" method="post" action="<?= \yii\helpers\Url::to(['user/registration']) ?>">
                <div class="border-login"></div>
                <p>Ещё нет аккаунта?</p>
                <input type="text" name="Registration[login]" placeholder="Логин" value="<?= $registrationModel->login ?>"/>
                <input type="password" name="Registration[password]" placeholder="Пароль"/>
                <input type="submit" class="signin-button" value="Зарегистрироваться">
            </form>

        </div>
        <div id="overlay"></div>
</section>
<section id="aboutus">
</section>
