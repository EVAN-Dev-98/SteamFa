<?php

include "Hero-List.php";
// var_dump($hero);

$max = count($hero);
/*
for ($index = 103 ; $index < 122 ; $index++){

    $address = strtolower($hero[$index]["name"]).".png";

    $address = str_replace(" ","_",$address);
    $address = str_replace("-","",$address);

    $url = "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/".$address;

    $name = strtolower($hero[$index]["name"]).".png";
    $result = file_put_contents( $name, file_get_contents($url));

    if( $result ) {
        echo "تصویر : " . $name . " دانلود شد" . "<br>";
    }
    else {
        echo "متاسفانه" . $name . " دانلود نشد" . "<br>";
    }
}
*/
/*
$index = 60;

$address = strtolower($hero[$index]["name"]).".png";

$address = str_replace(" ","_",$address);
$address = str_replace("-","",$address);

$url = "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/".$address;

$name = strtolower($hero[$index]["name"]).".png";
$result = file_put_contents( $name, file_get_contents($url));

if( $result ) {
    echo "تصویر : " . $name . " دانلود شد" . "<br>";
}
else {
    echo "متاسفانه" . $name . " دانلود نشد" . "<br>";
}*/