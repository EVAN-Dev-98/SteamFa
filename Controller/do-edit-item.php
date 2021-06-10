<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ProductEdit")){
    Alert::alerts("متاسفانه شما مجوز ویرایش محصولات خود را ندارید!","ابتدا باید لینک پروفایل استیم خود در قسمت پروفایل پنل کاربری وارد کنید","warning");
    redirect(account("dashboard.php"));
}

Alert::alerts("متاسفانه این بخش درحال بروزرسانی میباشد!");