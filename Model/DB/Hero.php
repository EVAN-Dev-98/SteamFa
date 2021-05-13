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
    }
}