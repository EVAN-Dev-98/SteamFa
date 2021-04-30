<?php
if (!class_exists('Product')){
    class Product{
        static function columnsList( $vars , $sep = ", "){
            $keys = array_keys($vars);
            return join($sep , $keys);
        }
        static function valuesList( $vars , $sep = "', '"){
            $values = array_values($vars);
            return "'" . join($sep , $values) . "'";
        }
        static function columnsValueList( $params, $sep = ", "){
            unset($params['id']);
            foreach ( $params as $key => $value){
                $varPairs[] = "{$key} = '{$value}'";
            }
            return join($sep, $varPairs);
        }
        static function add( $params ){
            $TableName = get_class();
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $query = "INSERT INTO {$TableName} ({$columnsString}) VALUES ({$valuesString})";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                alerts("{$TableName} شما با موفقیت ثبت شد!","","success");
            }
        }
        static function find($where = "true" , $order = "id DESC" , $count = 100 , $offset = 0){
            $TableName = get_class();
            $query = "SELECT * FROM {$TableName} WHERE {$where} ORDER BY {$order} LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
        static function update( $params ){
            $TableName = get_class();
            $columnsValueList = self::columnsValueList( $params );
            $query = "UPDATE {$TableName} SET {$columnsValueList} WHERE ID = {$params['id']}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                alerts("{$TableName} شما با موفقیت ویرایش شد!","","success");
            }
        }
    }
}