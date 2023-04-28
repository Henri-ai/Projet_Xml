
<div id="mid">
    <div class="formMid">
        <form method="get">
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
        </div>
        <button class="button">Envoyer</button>
        </form>
    </div>
</div>
