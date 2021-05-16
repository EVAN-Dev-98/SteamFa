<?php
/* Created By Evan ( Sajad Gholami ) */

$SiteName = "SteamFa";
$SiteDir = "/SteamFa";

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

$SiteVersion = 8;

$SoftSetup = true;
$FirstTime = false;