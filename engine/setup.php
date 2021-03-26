<?php

$path = "../";
include '../information/settings.php';
include '../information/functions.php';

$db = new DB(false);

if (!$SoftSetup){
    $Query = "DROP DATABASE IF EXISTS {$dbName}";
    $db->Execute($Query);
}

$Query = "CREATE DATABASE IF NOT EXISTS {$dbName} COLLATE {$dbCollate}";
$db->Execute($Query);

$db->SelectDB();

$Query = "CREATE TABLE IF NOT EXISTS contact (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    subject VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    PRIMARY KEY (ID))";
$db->Execute($Query);

$Query = "CREATE TABLE IF NOT EXISTS products (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    image VARCHAR(255),
    description VARCHAR(255),
    prie INT,
    quantity INT,
    PRIMARY KEY (ID))";
$db->Execute($Query);
