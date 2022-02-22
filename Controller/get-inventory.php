<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$appID = 730;
$db = new DB();
$user = User::find("id = {$_SESSION['uid']}");
$user = $user[0];
$steamID = $user['steam_id'];
$inventoryJsonUrl = 'https://steamcommunity.com/inventory/'.$steamID.'/'.$appID.'/2?l=english&count=5000';
$inventoryJsonGet = file_get_contents($inventoryJsonUrl);
$inventories = json_decode($inventoryJsonGet , TRUE);

$items = array();

Inventory::delete_all();
foreach ($inventories['descriptions'] as $key => $description) {
    if($description['marketable'] == 1){
        $name = $description['market_name'];
        $price = CSGO_items::find("name = '{$name}'");
        if (isset($price[0])){
            $items[$key] = [
                'name' => $price[0]['name'],
                'price' => $price[0]['price'],
                'type' => $description['type']
            ];
            Inventory::add($items[$key]);
        }
    }
}

$products = Inventory::find();
?>
<section class="container mt-5" id="Products">
    <section class="row">
        <?php
        foreach ($products as $row){
            get_template_part("item","inventory-template",$row);
        }
        ?>
    </section>
</section>