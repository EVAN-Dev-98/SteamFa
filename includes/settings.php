<?php
/* Created By Evan ( Sajad Gholami ) */

if (! defined('DBHOST') ) define('DBHOST','localhost');
if (! defined('DBUSER') ) define('DBUSER','root');
if (! defined('DBPASS') ) define('DBPASS','');
if (! defined('DBNAME') ) define('DBNAME','steamfa');
if (! defined('CHARSET')) define('CHARSET','utf8mb4');
if (! defined('COLLATE')) define('COLLATE','utf8mb4_unicode_ci');

$dbHost = DBHOST;
$dbUser = DBUSER;
$dbPass = DBPASS;
$dbName = DBNAME;
$dbCharset = CHARSET;
$dbCollate = COLLATE;

$SiteVersion = 5.2;
/*
$style = "styles-V".$SiteVersion.".css";
$responsive = "responsive-V".$SiteVersion.".css";
if (isset($path)){
    $newpath = $path."theme";
    $themeFiles = scandir($newpath,1);
}
else{
    $themeFiles = scandir("theme",1);
}
$styleName = $themeFiles[0];
$responsiveName = $themeFiles[2];
if ($styleName != $style){
    rename('theme/'.$styleName,'theme/'.$style);
    $styleName = $style;
}
if ($responsiveName != $responsive){
    rename('theme/'.$responsiveName,'theme/'.$responsive);
    $responsiveName = $responsive;
}
*/
$SoftSetup = true;