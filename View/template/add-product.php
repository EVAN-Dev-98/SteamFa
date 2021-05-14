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
                <input class="form-control" list="csgo_type_list" id="csgo_type" name="type" placeholder="نوع آیتم را انتخاب کنید...">
                <datalist id="csgo_type_list">
                    <option value="Pistol">
                    <option value="SMG">
                    <option value="Rifle">
                    <option value="Sniper Rifle">
                    <option value="Shotgun">
                    <option value="Machinegun">
                    <option value="Agent">
                    <option value="Knife">
                    <option value="Container">
                    <option value="Sticker">
                    <option value="Gloves">
                    <option value="Graffiti">
                    <option value="Music Kit">
                    <option value="Key">
                    <option value="Pass">
                </datalist>
            </section>
            <!-- weapon for csgo -->
            <section class="input-group mb-3" id="s_csgo_weapon">
                <span class="input-group-text">نام اسلحه : </span>
                <input class="form-control" list="csgo_weapon_list" id="csgo_weapon" name="weapon" placeholder="نام اسلحه را انتخاب کنید...">
                <datalist id="csgo_weapon_list">
                    <option value="AK-47">
                    <option value="AUG">
                    <option value="AWP">
                    <option value="CZ75-Auto">
                    <option value="Desert Eagle">
                    <option value="Dual Berettas">
                    <option value="FAMAS">
                    <option value="Five-Seven">
                    <option value="G3SG1">
                    <option value="Galil AR">
                    <option value="Glock-18">
                    <option value="M249">
                    <option value="M4A1-S">
                    <option value="M4A4">
                    <option value="MAC-10">
                    <option value="MAG-7">
                    <option value="MP5-SD">
                    <option value="MP7">
                    <option value="MP9">
                    <option value="Negev">
                    <option value="Nova">
                    <option value="P2000">
                    <option value="P250">
                    <option value="P90">
                    <option value="PP-Bizon">
                    <option value="R8 Revolver">
                    <option value="Sawed-Off">
                    <option value="SCAR-20">
                    <option value="SG 553">
                    <option value="SSG 08">
                    <option value="Tec-9">
                    <option value="UMP-45">
                    <option value="USP-S">
                    <option value="XM1014">
                    <option value="Bayonet">
                    <option value="Bowie Knife">
                    <option value="Butterfly Knife">
                    <option value="Classic Knife">
                    <option value="Falchion Knife">
                    <option value="Flip Knife">
                    <option value="Gut Knife">
                    <option value="Huntsman Knife">
                    <option value="Karambit">
                    <option value="M9 Bayonet">
                    <option value="Navaja Knife">
                    <option value="Nomad Knife">
                    <option value="Paracord Knife">
                    <option value="Shadow Daggers">
                    <option value="Skeleton Knife">
                    <option value="Stiletto Knife">
                    <option value="Survival Knife">
                    <option value="Talon Knife">
                    <option value="Ursus Knife">
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