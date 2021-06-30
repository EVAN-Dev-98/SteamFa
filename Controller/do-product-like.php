<?php
include "__php__.php";

if ( Authentication::check() ){
    $user_id = Authentication::uid();
    if ( isset( $_GET['id'] ) ) {
        $product_id = $_GET['id'];
        if ( real_number($product_id) ) {
            $db = new DB();
            $table = Product_Like::find("user_id = {$user_id} AND product_id = {$product_id}");
            if ( isset( $table[0] ) ){
                $row = $table[0];
                Product_Like::delete($row['id']);
            }
            else{
                $params = [
                    'user_id'	=> $user_id,
                    'product_id'	=> $product_id
                ];
                Product_Like::add($params);
            }
            if ( isset($_SESSION['redirect']) ){
                $address = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                redirect($address);
            }
            else{
                redirect(view("catalog.php#Products"));
            }
        }
        else
            Alert::alerts("شناسه نامعتبر!");
    }
    else
        Alert::alerts("شناسه دریافت نشد!");
}
else{
    Alert::alerts("ابتدا وارد شوید!");
    redirect(account("sign-in.php"));
}