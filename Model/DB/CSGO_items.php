<?php
if (!class_exists('CSGO_items')){
    class CSGO_items extends Table {
        static public function find($where = "true" , $order = "" , $count = 0 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}