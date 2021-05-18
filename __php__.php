<?php

$root = __DIR__ . "/";

// For Includes
$Model = $root . "Model/";
$View = $root . "View/";
$Controller = $root . "Controller/";
$Template = $View . "template/";

include $Model . "initializer.php";

global $SiteDir;
global $FirstTime;

// For Echo
$model = "{$SiteDir}/Model/";
$view = "{$SiteDir}/View/";
$controller = "{$SiteDir}/Controller/";
$assets = "{$SiteDir}/View/assets/";
$account = "{$SiteDir}/View/account/";