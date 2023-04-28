
<div id="mid">
    <div class="formMid">
        <form method="post">
            <div class="checkBox">
                <legend id="titleCheckBox"> Choisissez 3 préférences</legend>
                <input type="checkbox" class="choice" name="choice[]" value="1">
                <label for="choice">Sujet 1</label>
                <input type="checkbox" class="choice" name="choice[]" value="2">
                <label for="choice">Sujet 2</label>
                <input type="checkbox" class="choice" name="choice[]" value="3">
                <label for="choice">Sujet 3</label>
                <input type="checkbox" class="choice" name="choice[]" value="4">
                <label for="choice">Sujet 4</label>
                <input type="checkbox" class="choice" name="choice[]" value="5">
                <label for="choice">Sujet 5</label>
                <div class="error"><?= $error[''] ?? '' ?>
            </div>
        </div>
            <div class="select">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Choisissez le nombres d'arcticles</option>
                <option value="1">6</option>
                <option value="2">9</option>
                <option value="3">12</option>
            </select>
            <button class="button">Envoyer</button>
        </div>
        </form>
    </div>
</div>
