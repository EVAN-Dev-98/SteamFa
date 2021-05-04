<?php
global $row;
global $alerts;
?>
<section class="panel">
    <header>
        <h2>ویرایش آیتم</h2>
    </header>
    <main>
        <?php
        if (isset($alerts))
            echo $alerts;
        ?>
        <form action="<?php echo controller("edit-product.php"); ?>?id=<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" method="post">
            <section class="mb-3">
                <label for="name" class="form-label">نام محصول : </label>
                <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($row['name'])) echo $row['name']; ?>" placeholder="به عنوان مثال : AWP | Asiimov" required>
            </section>
            <section class="mb-3">
                <label for="game" class="form-label">نام بازی : </label>
                <select class="form-select" id="game" name="game" aria-label="Default select example">
                    <option value="CS:GO" <?php if (isset($row['game']) && $row['game'] == "CS:GO") echo "selected"; ?>>CS:GO</option>
                    <option value="Dota 2" <?php if (isset($row['game']) && $row['game'] == "Dota 2") echo "selected"; ?>>Dota 2</option>
                    <option value="Team Fortress 2" <?php if (isset($row['game']) && $row['game'] == "Team Fortress 2") echo "selected"; ?>>Team Fortress 2</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="type" class="form-label">نوع : </label>
                <select class="form-select" id="type" name="type" aria-label="Default select example">
                    <option value="Pistol" <?php if (isset($row['type']) && $row['type'] == "Pistol") echo "selected"; ?>>Pistol</option>
                    <option value="SMG" <?php if (isset($row['type']) && $row['type'] == "SMG") echo "selected"; ?>>SMG</option>
                    <option value="Rifle" <?php if (isset($row['type']) && $row['type'] == "Rifle") echo "selected"; ?>>Rifle</option>
                    <option value="Sniper Rifle" <?php if (isset($row['type']) && $row['type'] == "Sniper Rifle") echo "selected"; ?>>Sniper Rifle</option>
                    <option value="Shotgun" <?php if (isset($row['type']) && $row['type'] == "Shotgun") echo "selected"; ?>>Shotgun</option>
                    <option value="Machinegun" <?php if (isset($row['type']) && $row['type'] == "Machinegun") echo "selected"; ?>>Machinegun</option>
                    <option value="Agent" <?php if (isset($row['type']) && $row['type'] == "Agent") echo "selected"; ?>>Agent</option>
                    <option value="Knife" <?php if (isset($row['type']) && $row['type'] == "Knife") echo "selected"; ?>>Knife</option>
                    <option value="Container" <?php if (isset($row['type']) && $row['type'] == "Container") echo "selected"; ?>>Container</option>
                    <option value="Sticker" <?php if (isset($row['type']) && $row['type'] == "Sticker") echo "selected"; ?>>Sticker</option>
                    <option value="Gloves" <?php if (isset($row['type']) && $row['type'] == "Gloves") echo "selected"; ?>>Gloves</option>
                    <option value="Graffiti" <?php if (isset($row['type']) && $row['type'] == "Graffiti") echo "selected"; ?>>Graffiti</option>
                    <option value="Music Kit" <?php if (isset($row['type']) && $row['type'] == "Music Kit") echo "selected"; ?>>Music Kit</option>
                    <option value="Key" <?php if (isset($row['type']) && $row['type'] == "Key") echo "selected"; ?>>Key</option>
                    <option value="Pass" <?php if (isset($row['type']) && $row['type'] == "Pass") echo "selected"; ?>>Pass</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="quality" class="form-label">کیفیت : </label>
                <select class="form-select" id="quality" name="quality" aria-label="Default select example">
                    <option value="Field Tested" <?php if (isset($row['quality']) && $row['quality'] == "Field Tested") echo "selected"; ?>>Field Tested</option>
                    <option value="Minimal Wear" <?php if (isset($row['quality']) && $row['quality'] == "Minimal Wear") echo "selected"; ?>>Minimal Wear</option>
                    <option value="Battle Scarred" <?php if (isset($row['quality']) && $row['quality'] == "Battle Scarred") echo "selected"; ?>>Battle Scarred</option>
                    <option value="Well Worn" <?php if (isset($row['quality']) && $row['quality'] == "Well Worn") echo "selected"; ?>>Well Worn</option>
                    <option value="Factory New" <?php if (isset($row['quality']) && $row['quality'] == "Factory New") echo "selected"; ?>>Factory New</option>
                    <option value="Not Painted" <?php if (isset($row['quality']) && $row['quality'] == "Not Painted") echo "selected"; ?>>Not Painted</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="number" class="form-label">تعداد : </label>
                <input class="form-control" type="number" min="0" step="1" name="number" value="<?php if (isset($row['number'])) echo $row['number']; ?>" id="number">
            </section>
            <section class="mb-3">
                <label for="img" class="form-label">تصویر : </label>
                <input class="form-control" type="file" name="img" id="img">
            </section>
            <input type="submit" name="submit" value="ویرایش" class="btn btn-primary">
        </form>
    </main>
</section>
