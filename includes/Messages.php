<?php
if (!class_exists('Messages')){
    class Messages{
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
                alerts("درخواست شما با موفقیت ثبت شد!!!","","success");
            }
        }
    }
}