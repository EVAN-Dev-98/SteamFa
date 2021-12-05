<?php
require_once '__php__.php';

if (!class_exists("User_Info")) {
    class User_Info{
        var $steamprofile;
        public function __construct( $steamid ){
            $url = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . API_KEY . "&steamids=" . $steamid);
            $content = json_decode($url, true);
            $this -> steamprofile['steamid'] = $content['response']['players'][0]['steamid'];
            $this -> steamprofile['communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
            $this -> steamprofile['personaname'] = $content['response']['players'][0]['personaname'];
            $this -> steamprofile['profileurl'] = $content['response']['players'][0]['profileurl'];
            $this -> steamprofile['personastate'] = $content['response']['players'][0]['personastate'];
            if (isset($content['response']['players'][0]['realname'])) {
                $this -> steamprofile['realname'] = $content['response']['players'][0]['realname'];
            } else {
                $this -> steamprofile['realname'] = "Real name not given";
            }
            $this -> steamprofile['avatar'] = $content['response']['players'][0]['avatar'];
            $this -> steamprofile['avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
            $this -> steamprofile['avatarfull'] = $content['response']['players'][0]['avatarfull'];
        }
    }
}


/*
 * // just copy content from this section
if (empty($steamprofile['uptodate']) or empty($_SESSION['steam_personaname'])) {
    $url = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . API_KEY . "&steamids=" . $_SESSION['steamid']);
    $content = json_decode($url, true);
    $this->$steamprofile['steamid'] = $content['response']['players'][0]['steamid'];
    $this->steamprofile['communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
    $_SESSION['steam_profilestate'] = $content['response']['players'][0]['profilestate'];
    $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
    $_SESSION['steam_lastlogoff'] = $content['response']['players'][0]['lastlogoff'];
    $_SESSION['steam_profileurl'] = $content['response']['players'][0]['profileurl'];
    $_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];
    $_SESSION['steam_avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
    $_SESSION['steam_avatarfull'] = $content['response']['players'][0]['avatarfull'];
    $_SESSION['steam_personastate'] = $content['response']['players'][0]['personastate'];
    if (isset($content['response']['players'][0]['realname'])) {
        $_SESSION['steam_realname'] = $content['response']['players'][0]['realname'];
    } else {
        $_SESSION['steam_realname'] = "Real name not given";
    }
    $_SESSION['steam_primaryclanid'] = $content['response']['players'][0]['primaryclanid'];
    $_SESSION['steam_timecreated'] = $content['response']['players'][0]['timecreated'];
    $_SESSION['steam_uptodate'] = time();
}


$steamprofile['profilestate'] = $_SESSION['steam_profilestate'];
$steamprofile['personaname'] = $_SESSION['steam_personaname'];
$steamprofile['lastlogoff'] = $_SESSION['steam_lastlogoff'];
$steamprofile['profileurl'] = $_SESSION['steam_profileurl'];
$steamprofile['avatar'] = $_SESSION['steam_avatar'];
$steamprofile['avatarmedium'] = $_SESSION['steam_avatarmedium'];
$steamprofile['avatarfull'] = $_SESSION['steam_avatarfull'];
$steamprofile['personastate'] = $_SESSION['steam_personastate'];
$steamprofile['realname'] = $_SESSION['steam_realname'];
$steamprofile['primaryclanid'] = $_SESSION['steam_primaryclanid'];
$steamprofile['timecreated'] = $_SESSION['steam_timecreated'];
$steamprofile['uptodate'] = $_SESSION['steam_uptodate'];
*/