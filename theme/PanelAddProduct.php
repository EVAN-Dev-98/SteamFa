<section class="add-product">
    <form action="<?php if (isset($path)) echo $path; ?>Engine/do-add.php" method="post">
        <section class="mb-3">
            <label for="name" class="form-label">نام محصول : </label>
            <input type="text" class="form-control" id="name" placeholder="به عنوان مثال : AWP | Asiimov">
        </section>
        <section class="mb-3">
            <label for="quality" class="form-label">نام بازی : </label>
            <select class="form-select" id="quality" aria-label="Default select example">
                <option value="1" selected>Counter-Strike: Global Offensive</option>
                <option value="2">Dota 2</option>
                <option value="3">Team Fortress 2</option>
            </select>
        </section>
        <section class="mb-3">
            <label for="type" class="form-label">نوع : </label>
            <select class="form-select" id="type" aria-label="Default select example">
                <option value="Pistol" selected>Pistol</option>
                <option value="SMG">SMG</option>
                <option value="Rifle">Rifle</option>
                <option value="Sniper Rifle">Sniper Rifle</option>
                <option value="Shotgun">Shotgun</option>
                <option value="Machinegun">Machinegun</option>
                <option value="Agent">Agent</option>
                <option value="Knife">Knife</option>
                <option value="Container">Container</option>
                <option value="Sticker">Sticker</option>
                <option value="Gloves">Gloves</option>
                <option value="Graffiti">Graffiti</option>
                <option value="Music Kit">Music Kit</option>
                <option value="Key">Key</option>
                <option value="Pass">Pass</option>
            </select>
        </section>
        <section class="mb-3">
            <label for="quality" class="form-label">کیفیت : </label>
            <select class="form-select" id="quality" aria-label="Default select example">
                <option value="1" selected>Field Tested</option>
                <option value="2">Minimal Wear</option>
                <option value="3">Battle Scarred</option>
                <option value="4">Well Worn</option>
                <option value="4">Factory New</option>
                <option value="4">Not Painted</option>
            </select>
        </section>
        <section class="mb-3">
            <label for="img" class="form-label">تصویر : </label>
            <input class="form-control" type="file" id="img">
        </section>
        <input type="submit" value="افزودن" class="btn btn-primary">
    </form>
</section>