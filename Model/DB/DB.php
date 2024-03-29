<?php

include "__php__.php";
// we most include all tables Class :)
include "Table.php";
include "Product.php";
include "attr_csgo.php";
include "attr_dota2.php";
include "Hero.php";
include "User.php";
include "Messages.php";
include "Role.php";
include "Product_Like.php";
include "Product_Bookmark.php";
include "CSGO_items.php";
include "Inventory.php";

if (!class_exists("DB")){
    class DB{
        var $dbc;
        public function __construct($Soft = true){
            $this->Connect();
            if ($Soft){
                $this->SelectDB();
            }
            $this->dbc->set_charset(CHARSET);
        }
        private function Connect(){
            $this->dbc = new mysqli(DBHOST,DBUSER,DBPASS);
            if ($this->dbc->connect_errno) {
                echo Alert::alerts("خطا در اتصال به دیتابیس","خطا : " . $this->dbc->connect_error ,"danger");
                exit();
            }
        }
        public function SelectDB(){
            $this->dbc->select_db(DBNAME);
            if ($this->dbc->error){
                echo Alert::alerts("خطا در انتخاب دیتابیس","خطا : " . $this->dbc->error ,"danger");
                exit();
            }
        }
        public function Execute($query){
            $result = $this -> dbc -> query($query);
            if ( $this -> dbc -> errno == 1050 || $this -> dbc -> errno == 1007 ){
                return $this -> dbc -> errno;
            }
            elseif ( $this -> dbc -> error ){
                Alert::alerts("خطا در اجرای دستورات","خطا : " . $this->dbc->error ,"danger");
                return false;
            }
            else{

                if ( $result !== true && $result !== false ){ // select
                    return $result -> fetch_all( MYSQLI_ASSOC );
                }
                else{
                    if ( isset( $this -> dbc-> insert_id ) ){ // insert
                        return $this -> dbc -> insert_id;
                    }
                    else // update / delete
                        return $result;
                }
            }
        }
        public function __destruct(){
            $this->dbc->close();
        }
    }
}