<?php
require_once '__php__.php';

if (!isset($_SESSION['steamid'])) {
    require $Model . "Steam/Steam_Auth.php";
    ?><a href="?steam_login">اتصال اکانت استیم به حساب کاربری</a><?php
}
else{
    include $Model . "Steam/User_Info.php";
    $user_info = new User_Info($_SESSION['steamid']);
    ?>
    <p>SteamID64 of the user : <?php echo $user_info->steamprofile['steamid']; ?></p>
    <p>Visibility State : <?php if ($user_info->steamprofile['communityvisibilitystate'] == 1 ){ echo 'Account is not visible';} elseif ($user_info->steamprofile['communityvisibilitystate'] == 3){ echo 'Account is public';}?></p>
    <p>Steam Persona Name : <?php echo $user_info->steamprofile['personaname']; ?></p>
    <p>Steam Profile Url : <a href="<?php echo $user_info->steamprofile['profileurl']; ?>" target="_blank"><?php echo $user_info->steamprofile['profileurl']; ?></a></p>
    <p>Steam Persona State : <?php
        switch ($user_info->steamprofile['personastate']){
            case 0:
                echo 'Offline';
                break;
            case 1:
                echo 'Online';
                break;
            case 2:
                echo 'Busy';
                break;
            case 3:
                echo 'Away';
                break;
            case 4:
                echo 'Snooze';
                break;
            case 5:
                echo 'looking to trade';
                break;
            case 6:
                echo 'looking to play';
                break;
        }
        ?></p>
    <p>Steam Avatar : <img src="<?php echo $user_info->steamprofile['avatar']; ?>" alt=""></p>
    <p>Steam Avatar Medium : <img src="<?php echo $user_info->steamprofile['avatarmedium']; ?>" alt=""></p>
    <p>Steam Avatar Full : <img src="<?php echo $user_info->steamprofile['avatarfull']; ?>" alt=""></p>
    <a href="<?php echo controller("do-steam-logout.php") ?>">حذف اتصال اکانت استیم به حساب کاربری</a>
<?php }
var_dump($_SESSION);
/*
$appID = 730;
$steamID = 76561198358256782;
$inventoryJsonUrl = 'https://steamcommunity.com/inventory/'.$steamID.'/'.$appID.'/2?l=english&count=5000';
$inventoryJsonGet = file_get_contents($inventoryJsonUrl);
$inventories = json_decode($inventoryJsonGet , TRUE);

foreach ($inventories['descriptions'] as $key => $description) {
    echo '<p>';
    echo $description['market_name'];
    echo ' - Type : ';
    echo $description['type'];
    echo ' - Trade Hold : ';
    echo $description['market_tradable_restriction'];
    echo '</p>';
}
*/
//var_dump($inventories['descriptions']);