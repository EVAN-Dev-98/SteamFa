<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( isset($_GET['id']) ){
    $id = SafeScript($_GET['id']);
    if (is_numeric($id) && $id > 0) {
        $db = new DB();
        $table = Product::find("id = {$id}");
        if (isset($table[0])){
            $row = $table[0]; ?>
            <section class="container mt-5">
                <?php
                $alerts = Alert::alerts();
                if ($alerts) echo $alerts;
                ?>
                <section class="row">
                    <?php
                    if ($row['attr_name'] === "attr_csgo"){
                        $p_csgo = attr_csgo::find("product_id = {$id}");
                        if (isset($p_csgo[0])){
                            $p_all = array_merge($row,$p_csgo[0]);
                            get_template_part("product-detail-csgo","template",$p_all);
                        }
                    }
                    if ($row['attr_name'] === "attr_dota2"){
                        $p_dota2 = attr_dota2::find("product_id = {$id}");
                        if (isset($p_dota2[0])){
                            $p_all = array_merge($row,$p_dota2[0]);
                            get_template_part("product-detail-dota2","template",$p_all);
                        }
                    } ?>
                </section>
            </section>
            <?php
        }
        else
            Alert::alerts("محصولی با این شناسه وجود ندارد!");
        unset($db);
    }
    else
        Alert::alerts("شناسه نامعتبر!");
}
else
    Alert::alerts("شناسه دریافت نشد!");