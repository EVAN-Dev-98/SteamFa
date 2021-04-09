<?php
if (!class_exists('Product')){
    class Product{
        static function add( $params ){
            $query = "INSERT INTO products (name , game , type , quality , number , img) VALUES ('{$params['name']}' ,'{$params['game']}' , '{$params['type']}' , '{$params['quality']}' , '{$params['number']}', '{$params['img']}')";
            $db = new DB();
            $db->Execute($query);
        }
    }
}