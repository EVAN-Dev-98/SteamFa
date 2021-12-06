<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";


$db = new DB();
User::steam_logout($_SESSION['uid']);
unset($db);
Alert::alerts("اتصال اکانت استیم شما به حساب کاربری با موفقیت حذف شد!",null,"info");
redirect(account("dashboard.php"));