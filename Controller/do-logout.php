<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

Authentication::logout();
Alert::alerts("آرزوی موفقیت از طرف خانواده استیم فارسی 🤗",null,"info");
redirect(view("home.php"));