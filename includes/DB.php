<?php
include 'Product.php';

if (!class_exists('DB')){
    class DB{
        var $dbc;
        function __construct($Soft = true){
            $this->Connect();
            if ($Soft){
                $this->SelectDB();
            }
            $this->dbc->set_charset(CHARSET);
        }
        function Connect(){
            $this->dbc = new mysqli(DBHOST,DBUSER,DBPASS);
            if ($this->dbc->connect_errno) {
                echo alert("خطا در اتصال به دیتابیس","خطا : " . $this->dbc->connect_error ,"danger");
                exit();
            }
        }
        function SelectDB(){
            $this->dbc->select_db(DBNAME);
            if ($this->dbc->error){
                echo alert("خطا در انتخاب دیتابیس","خطا : " . $this->dbc->error ,"danger");
                exit();
            }
        }
        function Execute($query){
            $this->dbc->query($query);
            if ($this->dbc->error){
                echo alert("خطا در اجرای دستورات","خطا : " . $this->dbc->error ,"danger");
                exit();
            }
            else
                return true;
        }
        function __destruct(){
            $this->dbc->close();
        }
    }
}