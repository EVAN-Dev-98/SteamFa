<section class="panel">
    <header>
    <h2>افزودن محصول</h2>
    </header>
    <main>
        <form action="<?php echo_engine("do-add.php"); ?>" method="post">
            <section class="mb-3">
                <label for="name" class="form-label">نام محصول : </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="به عنوان مثال : AWP | Asiimov" required>
            </section>
            <section class="mb-3">
                <label for="game" class="form-label">نام بازی : </label>
                <select class="form-select" id="game" name="game" aria-label="Default select example">
                    <option value="CS:GO" selected>CS:GO</option>
                    <option value="Dota 2">Dota 2</option>
                    <option value="Team Fortress 2">Team Fortress 2</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="type" class="form-label">نوع : </label>
                <select class="form-select" id="type" name="type" aria-label="Default select example">
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
                <select class="form-select" id="quality" name="quality" aria-label="Default select example">
                    <option value="Field Tested" selected>Field Tested</option>
                    <option value="Minimal Wear">Minimal Wear</option>
                    <option value="Battle Scarred">Battle Scarred</option>
                    <option value="Well Worn">Well Worn</option>
                    <option value="Factory New">Factory New</option>
                    <option value="Not Painted">Not Painted</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="number" class="form-label">تعداد : </label>
                <input class="form-control" type="number" min="0" step="1" name="number" id="number">
            </section>
            <section class="mb-3">
                <label for="img" class="form-label">تصویر : </label>
                <input class="form-control" type="file" name="img" id="img">
            </section>
            <input type="submit" name="submit" value="افزودن" class="btn btn-primary">
        </form>
    </main>
</section>
