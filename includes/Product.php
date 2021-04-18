<?php
if (!class_exists('Product')){
    class Product{
        static function columnsList( $vars , $sep = ", "){
            unset($vars['submit']);
            $keys = array_keys($vars);
            return join($sep , $keys);
        }
        static function valuesList( $vars , $sep = "', '"){
            unset($vars['submit']);
            $values = array_values($vars);
            return "'" . join($sep , $values) . "'";
        }
        static function add( $params ){
            $TableName = get_class();
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $query = "INSERT INTO {$TableName} ({$columnsString}) VALUES ({$valuesString})";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                alerts("محصول مورد نظر با موفقیت افزوده شد!!!","","success");
            }
        }
        static function find($where = "true" , $order = "id DESC" , $count = 100 , $offset = 0){
            $TableName = get_class();
            $query = "SELECT * FROM {$TableName} WHERE {$where} ORDER BY {$order} LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}