




<div id="mid">
    <div class="formMid">
        <form method="post">
            <div class="checkBox">
                <legend id="titleCheckBox"> Choisissez 3 préférences</legend>
                <input type="checkbox" class="choice" name="choice[]" value="1">
                <label for="choice">International</label>
                <input type="checkbox" class="choice" name="choice[]" value="2">
                <label for="choice">National</label>
                <input type="checkbox" class="choice" name="choice[]" value="3">
                <label for="choice">Écologie</label>
                <input type="checkbox" class="choice" name="choice[]" value="4">
                <label for="choice">Culture</label>
                <input type="checkbox" class="choice" name="choice[]" value="5">
                <label for="choice">Économie</label>
                <div class="error"><?= $error['choice'] ?? '' ?>
                </div>
            </div>
            <div class="select">
                <select class="form-select form-select-sm" name="nbArticle" aria-label=".form-select-sm example">
                    <option>Choisissez le nombres d'arcticles</option>
                    <?php foreach (ARRAY_ARTICLE as $key => $article) {
                        $isSelected = ($nbArticle == $article) ? 'selected' : '';
                        echo '<option ' . $isSelected . '>' . $article . '</option>';
                    } ?>
                </select>
                <small><?= $error['nbArticle'] ?? '' ?></small>
            </div>

            <button class="button">Envoyer</button>

        </form>
    </div>
</div>