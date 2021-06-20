<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز ویرایش مجوز را ندارید!");
    redirect(account("dashboard.php"));
}

$defult = array(
    "RoleMaster" => 0,
    "ItemAdd" => 0,
    "ItemEdit" => 0,
    "ItemDelete" => 0,
    "ItemViewOther" => 0,
    "ItemEditOther" => 0,
    "ItemDeleteOther" => 0,
    "ProductAdd" => 0,
    "ProductEdit" => 0,
    "ProductDelete" => 0,
    "ProductViewOther" => 0,
    "ProductEditOther" => 0,
    "ProductDeleteOther" => 0,
    "UserAdd" => 0,
    "UserEdit" => 0,
    "UserDelete" => 0,
    "UserViewOther" => 0,
    "UserEditOther" => 0,
    "UserDeleteOther" => 0,
    "MessageAdd" => 0,
    "MessageEdit" => 0,
    "MessageDelete" => 0,
    "MessageViewOther" => 0,
    "MessageEditOther" => 0,
    "MessageDeleteOther" => 0
);

if ( isset($_POST['submit']) ){
    $db = new DB();
    $params = SafeScript($_POST);
    unset($params['submit']);
    $table = Role::find("id = {$params['id']}");
    if ( isset($table[0]) ){
        $row = $table[0];
        foreach ($params as $key => $value){
            if ($value === 'on')
                $params[$key] = 1;
        }
        $params = array_merge($defult,$params);
        Role::update( $params );
        Alert::alerts("مجوز مورد نظر با موفقیت ویرایش شد.",null,"success");
        redirect(account("dashboard.php"));
    }
    else
        Alert::alerts("مجوزی با این شناسه وجود ندارد!");
}
else{

    redirect(view("home.php"));
}