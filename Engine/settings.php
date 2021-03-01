<?php
if (! defined('DBHOST') ) define('DBHOST','localhost');
if (! defined('DBUSER') ) define('DBUSER','root');
if (! defined('DBPASS') ) define('DBPASS','');
if (! defined('DBNAME') ) define('DBNAME','steamfa');
if (! defined('CHARSET')) define('CHARSET','utf8mb4');
$dbHost = DBHOST;
$dbUser = DBUSER;
$dbPass = DBPASS;
$dbName = DBNAME;
$dbCharset = CHARSET;

$SiteVersion = 3.2;

$style = "styles-V".$SiteVersion.".css";
if (isset($path)){
    $newpath = $path."theme";
    $themeFiles = scandir($newpath,1);
}
else{
    $themeFiles = scandir("theme",1);
}
$styleName = $themeFiles[0];
if ($styleName != $style){
    rename('theme/'.$styleName,'theme/'.$style);
    $styleName = $style;
}
