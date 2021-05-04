<?php

$root = __DIR__ . "/";

// For Includes
$Model = $root . "Model/";
$View = $root . "View/";
$Controller = $root . "Controller/";
$Template = $View . "template/";

include_once  $Model . "initializer.php";

global $SiteDir;

// For Echo
$model = "{$SiteDir}/Model/";
$view = "{$SiteDir}/View/";
$controller = "{$SiteDir}/Controller/";
$assets = "{$SiteDir}/View/assets/";
$account = "{$SiteDir}/View/account/";


