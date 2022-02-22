<?php
if (!class_exists('Inventory')){
    class Inventory extends Table {
        static public function find($where = "true" , $order = "" , $count = 0 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}