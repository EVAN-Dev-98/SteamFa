<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

Authentication::steam_logout();
Alert::alerts("اتصال اکانت استیم شما به حساب کاربری با موفقیت حذف شد!",null,"info");
redirect(account("dashboard.php"));