<?php
if (!class_exists('Hero')){
    class Hero extends Table {
        static public function add( $params ){
            global $db;
            $TableName = static::class;
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $query = "INSERT INTO {$TableName} ({$columnsString})
                      VALUES ({$valuesString})";
            return $db -> Execute($query);
        }
        static public function get_id($hero_name){
            $TableName = static::class;
            $query = "SELECT id FROM {$TableName} WHERE name = '{$hero_name}'";
            return $GLOBALS['db'] -> Execute($query);
        }
        static public function find($where = "true" , $order = "id" , $count = 200 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where} AND status != 'deleted'
                      ORDER BY {$order}
                      LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}