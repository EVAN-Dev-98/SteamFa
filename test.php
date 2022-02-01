<?php
require_once '__php__.php';

/*
$appID = 730;
$steamID = 76561198358256782;
$inventoryJsonUrl = 'https://steamcommunity.com/inventory/'.$steamID.'/'.$appID.'/2?l=english&count=5000';
$inventoryJsonGet = file_get_contents($inventoryJsonUrl);
$inventories = json_decode($inventoryJsonGet , TRUE);
*/
/*
foreach ($inventories['descriptions'] as $key => $description) {
    echo '<p>';
    echo $description['market_name'];
    echo ' - Type : ';
    echo $description['type'];
    echo ' - Trade Hold : ';
    echo $description['market_tradable_restriction'];
    echo '</p>';
}*/
/*
var_dump($inventories['descriptions']);
*/

$counter = 10000001000;

if ($counter % 500 == 0 ){
    echo "ok";
}else{
    echo "no";
}