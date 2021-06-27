<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ItemAdd")){
    Alert::alerts("متاسفانه شما مجوز افزودن آیتم را ندارید!","میتوانید با اضافه کردن لینک پروفایل استیم خود در قسمت پروفایل پنل کاربری مجوز افزودن آیتم را بصورت رایگان دریافت کنید","info");
    redirect(account("dashboard.php"));
}

// get values from html
if (isset($_POST['submit'])){
    if ( Validation::Token_Check( $_POST['csrf_token'] )) {
        unset($_POST['csrf_token']);
        unset($_SESSION['CSRF_Token']);
        $_POST = SafeScript($_POST);
        $product["name"] = $_POST["name"];
        $product["attr_name"] = $_POST["attr_name"];
        $product["number"] = $_POST["number"];
        $product["img"] = assets("images/default-item.jpg");
        $product["owner_id"] = Authentication::uid();
        $attr["product_id"] = Product::add($product);
        switch ($product["attr_name"]){
            case "attr_csgo":
                $attr["type"] = $_POST["type"];
                if (isset($_POST["weapon"])){
                    $attr["weapon"] = $_POST["weapon"];
                }
                if (isset($_POST["quality"])){
                    $attr["quality"] = $_POST["quality"];
                }
                if (isset($_POST["category"])){
                    $attr["category"] = $_POST["category"];
                }
                attr_csgo::add($attr);
                Alert::alerts("ایتم کانتر " . $product["name"] . " با موفقیت درج شد.","","info");
                break;
            case "attr_dota2":
                $table = Hero::get_id($_POST["hero"]);
                $row = $table[0];
                $attr["hero_id"] = $row["id"];
                $attr["rarity"] = $_POST["rarity"];
                $attr["quality"] = $_POST["quality"];
                attr_dota2::add($attr);
                Alert::alerts("ایتم دوتا 2 " . $product["name"] . " با موفقیت درج شد.","","info");
                break;
        }
        unset($db);
        redirect(account("dashboard.php"));
    }
    else
        Alert::alerts("توکن CSRF نامعتبر!");
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}