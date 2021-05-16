<?php
$types = array(
    "Pistol",
    "SMG",
    "Rifle",
    "Sniper Rifle",
    "Shotgun",
    "Machinegun",
    "Agent",
    "Knife",
    "Container",
    "Sticker",
    "Gloves",
    "Graffiti",
    "Music Kit",
    "Key",
    "Pass"
);
$weapons = array(
    "AK-47",
    "AUG",
    "AWP",
    "CZ75-Auto",
    "Desert Eagle",
    "Dual Berettas",
    "FAMAS",
    "Five-Seven",
    "G3SG1",
    "Galil AR",
    "Glock-18",
    "M249",
    "M4A1-S",
    "M4A4",
    "MAC-10",
    "MAG-7",
    "MP5-SD",
    "MP7",
    "MP9",
    "Negev",
    "Nova",
    "P2000",
    "P250",
    "P90",
    "PP-Bizon",
    "R8 Revolver",
    "Sawed-Off",
    "SCAR-20",
    "SG 553",
    "SSG 08",
    "Tec-9",
    "UMP-45",
    "USP-S",
    "XM1014",
    "Bayonet",
    "Bowie Knife",
    "Butterfly Knife",
    "Classic Knife",
    "Falchion Knife",
    "Flip Knife",
    "Gut Knife",
    "Huntsman Knife",
    "Karambit",
    "M9 Bayonet",
    "Navaja Knife",
    "Nomad Knife",
    "Paracord Knife",
    "Shadow Daggers",
    "Skeleton Knife",
    "Stiletto Knife",
    "Survival Knife",
    "Talon Knife",
    "Ursus Knife"
);
global $db;
$db = new DB();
$heroes = Hero::find();
$rarity = array(
    "Common",
    "Uncommon",
    "Rare",
    "Mythical",
    "Immortal",
    "Legendary",
    "Arcana",
    "Ancient"
);
$quality = array(
    "Standard",
    "Inscribed",
    "Auspicious",
    "Heroic",
    "Genuine",
    "Autographed",
    "Frozen",
    "Cursed",
    "Base",
    "Corrupted",
    "Infused",
    "Unusual",
    "Exalted",
    "Elder",
    "Legacy",
    "Ascendant",
    "Favored"
);
?>
<section class="panel">
    <header>
    <h2>افزودن آیتم</h2>
    </header>
    <main>
        <form action="<?php echo controller("add-product.php"); ?>" method="post">
            <!-- attr_name for product -->
            <section class="input-group mb-3" id="s_attr_name">
                <span class="input-group-text">نام بازی : </span>
                <select class="form-select" id="attr" name="attr_name" onchange="change()">
                    <option value="attr_csgo" selected>CS:GO</option>
                    <option value="attr_dota2">Dota 2</option>
                </select>
            </section>
            <!-- name csgo for product -->
            <section class="input-group mb-3" id="s_csgo_name">
                <span class="input-group-text">نام آیتم : </span>
                <input type="text" class="form-control" id="csgo_name" name="name" placeholder="به عنوان مثال : AWP | Asiimov" required>
            </section>
            <!-- type for csgo -->
            <section class="input-group mb-3" id="s_csgo_type">
                <span class="input-group-text">نوع آیتم : </span>
                <input class="form-control" list="csgo_type_list" id="csgo_type" name="type" onchange="csgo_type_check(this.value)" placeholder="نوع آیتم را انتخاب کنید...">
                <datalist id="csgo_type_list">
                    <?php foreach ($types as $name) echo "<option value='".$name."'>"; ?>
                </datalist>
            </section>
            <!-- weapon for csgo -->
            <section class="input-group mb-3" id="s_csgo_weapon">
                <span class="input-group-text">نام اسلحه : </span>
                <input class="form-control" list="csgo_weapon_list" id="csgo_weapon" name="weapon" onchange="csgo_weapon_check(this.value)" placeholder="نام اسلحه را انتخاب کنید...">
                <datalist id="csgo_weapon_list">
                    <?php foreach ($weapons as $name) echo "<option value='".$name."'>"; ?>
                </datalist>
            </section>
            <!-- quality for csgo -->
            <section class="input-group mb-3" id="s_csgo_quality">
                <span class="input-group-text">کیفیت : </span>
                <select class="form-select" id="csgo_quality" name="quality">
                    <option value="Field Tested" selected>Field Tested</option>
                    <option value="Minimal Wear">Minimal Wear</option>
                    <option value="Battle Scarred">Battle Scarred</option>
                    <option value="Well Worn">Well Worn</option>
                    <option value="Factory New">Factory New</option>
                </select>
            </section>
            <!-- category for csgo -->
            <section class="input-group mb-3" id="s_csgo_category">
                <span class="input-group-text">دسته : </span>
                <select class="form-select" id="csgo_category" name="category">
                    <option value="Normal" selected>Normal</option>
                    <option value="StatTrak™">StatTrak™</option>
                    <option value="Souvenir">Souvenir</option>
                    <option value="★">★</option>
                    <option value="★ StatTrak™">★ StatTrak™</option>
                </select>
            </section>
            <!-- name dota2 for product -->
            <section class="input-group mb-3" id="s_dota2_name">
                <span class="input-group-text">نام آیتم : </span>
                <input type="text" class="form-control" id="dota2_name" name="name" placeholder="به عنوان مثال : Maw of Eztzhok" required>
            </section>
            <!-- hero for dota2 -->
            <section class="input-group mb-3" id="s_dota2_hero_list">
                <span class="input-group-text">نام هیرو : </span>
                <input class="form-control" list="hero_list" id="dota2_hero_list" name="hero" placeholder="نام هیرو را انتخاب کنید...">
                <datalist id="hero_list">
                    <?php foreach ($heroes as $name) echo "<option value='".$name["name"]."'>"; ?>
                </datalist>
            </section>
            <!-- rarity for dota2 -->
            <section class="input-group mb-3" id="s_dota2_rarity">
                <span class="input-group-text">سطح نادر بودن : </span>
                <input class="form-control" list="rarity" id="dota2_rarity" name="rarity" placeholder="سطح نادر بودن را انتخاب کنید...">
                <datalist id="rarity">
                    <?php foreach ($rarity as $name) echo "<option value='".$name."'>"; ?>
                </datalist>
            </section>
            <!-- quality for dota2 -->
            <section class="input-group mb-3" id="s_dota2_quality">
                <span class="input-group-text">کیفیت : </span>
                <input class="form-control" list="quality" id="dota2_quality" name="quality" placeholder="کیفیت را انتخاب کنید...">
                <datalist id="quality">
                    <?php foreach ($quality as $name) echo "<option value='".$name."'>"; ?>
                </datalist>
            </section>
            <!-- number for product -->
            <section class="input-group mb-3" id="s_number">
                <span class="input-group-text">تعداد : </span>
                <input class="form-control" type="number" min="0" step="1" name="number" id="number">
            </section>
            <!-- img for product -->
            <section class="input-group mb-3" id="s_img">
                <span class="input-group-text">تصویر : </span>
                <input class="form-control" type="file" name="img" id="img">
            </section>
            <!-- submit -->
            <input type="submit" name="submit" value="افزودن" class="btn btn-primary">
        </form>
    </main>
</section>
<script src="<?php echo assets("js/add-item.js"); ?>"></script>