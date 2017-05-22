<section id="categories">
    <div class="tabs">
        <?php foreach (\Yii::$app->params['tournaments'] as $index => $tournament) { ?>
            <input id="tab<?= $index + 1 ?>" type="radio" name="tabs" <?php if ($index == 0) { echo 'checked'; } ?>>
            <label for="tab<?= $index + 1 ?>" title="Вкладка <?= $index + 1 ?>"><?= $tournament['label'] ?></label>
        <?php } ?>

        <?php foreach (\Yii::$app->params['tournaments'] as $index => $tournament) { ?>
            <?php $i1 = $index  +1 ?>
            <div id="content-tab<?= $i1 ?>">
                <div class="tabs<?= $i1 ?>-<?= $i1 ?>">
                    <?php foreach ($tournament['items'] as $index2 => $item) { ?>
                        <input id="tab<?= $index2 + 1 ?>-<?= $i1 ?>" type="radio" name="tabs<?= $i1 ?>-<?= $i1 ?>" <?= ($index2 == 0) ? 'checked' : 0 ?>>
                        <label for="tab<?= $index2 + 1 ?>-<?= $i1 ?>" title="Вкладка <?= $index2 + 1 ?>"><?= $item ?></label>
                    <?php } ?>

                    <?php foreach ($tournament['items'] as $index2 => $item) { ?>
                        <div id="content-tab<?= $index2 + 1 ?>-<?= $i1 ?>" >
                            <p>Ник в игре:</p>
                            <input type="text">
                            <p>Вк:</p>
                            <input type="text">
                            <p>Email:</p>
                            <input type="text">
                            <p>Номер телефона:</p>
                            <input type="text">
                            <br>
                            <input type="button" value="Подать заявку">
                            <p></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>