<?php
if (!class_exists('Users')){
    class Users{
        static function columnsList( $vars , $sep = ", "){
            unset($vars['submit']);
            unset($vars['repassword']);
            $keys = array_keys($vars);
            return join($sep , $keys);
        }
        static function valuesList( $vars , $sep = "', '"){
            unset($vars['submit']);
            unset($vars['repassword']);
            $values = array_values($vars);
            return "'" . join($sep , $values) . "'";
        }
        static function add( $params ){
            $TableName = __CLASS__;
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $query = "INSERT INTO {$TableName} ({$columnsString}) VALUES ({$valuesString})";
            $result = $GLOBALS['db'] ->Execute($query);
        }
        static function find($where = "true" , $order = "id" , $count = 100 , $offset = 0){
            $TableName = get_class();
            $query = "SELECT * FROM {$TableName} WHERE {$where} ORDER BY {$order} LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}