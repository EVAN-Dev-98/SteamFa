<?php
if (!class_exists("Authorization")) {
    class Authorization{
        static public function check( $Permission ){
            global $db;
            $db = new DB();
            if ( Authentication::check() ){
                $uid = Authentication::uid();
                $table = Role::find_join("User","User.id = {$uid}");
                $row = $table[0];
                return boolval($row[$Permission]);
            }
            else{
                Alert::alerts("ابتدا وارد شوید!");
                redirect(account("sign-in.php"));
                return false;
            }
        }
    }
}