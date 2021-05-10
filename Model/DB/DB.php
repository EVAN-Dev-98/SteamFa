<?php

include "__php__.php";

// we most include all tables Class :)
include "Table.php";
include "CSGO.php";
include "DOTA2.php";
include "Hero.php";
include "User.php";
include "Messages.php";
include "Role.php";

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
                echo alert("خطا در اتصال به دیتابیس","خطا : " . $this->dbc->connect_error ,"danger");
                exit();
            }
        }
        public function SelectDB(){
            $this->dbc->select_db(DBNAME);
            if ($this->dbc->error){
                echo alert("خطا در انتخاب دیتابیس","خطا : " . $this->dbc->error ,"danger");
                exit();
            }
        }
        public function Execute($query){
            $result = $this -> dbc -> query($query);
            if ( $this -> dbc -> errno == 1050 || $this -> dbc -> errno == 1007 ){
                return $this -> dbc -> errno;
            }
            elseif ( $this -> dbc -> error ){
                alerts("خطا در اجرای دستورات","خطا : " . $this->dbc->error ,"danger");
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