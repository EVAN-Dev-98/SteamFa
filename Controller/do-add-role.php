<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز افزودن مجوز را ندارید!");
    redirect(account("dashboard.php"));
}

// get values from html
if (isset($_POST['submit'])){
    $_POST = SafeScript($_POST);
    $params = $_POST;
    unset($params['submit']);
    foreach ($params as $key => $value){
        if ($value === 'on'){
            $params[$key] = 1;
        }
    }
    Role::add($params);
    Alert::alerts("مجوز " . $params['name'] . " با موفقیت درج شد.","","info");
    unset($db);
    redirect(account("dashboard.php"));
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}