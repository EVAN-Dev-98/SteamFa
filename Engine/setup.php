<?php
include '../information/settings.php';
include '../information/functions.php';
include '../information/DB.php';

if (!$SoftSetup){
    $Query = "DROP DATABASE {$dbName} IF EXISTS";
    $db = new DB();

}