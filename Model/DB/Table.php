<?php
if (!class_exists('Table')){
    class Table{
        static protected function columnsList( $vars , $sep = ", "){
            $keys = array_keys($vars);
            return join($sep , $keys);
        }
        static protected function valuesList( $vars , $sep = "', '"){
            $values = array_values($vars);
            return "'" . join($sep , $values) . "'";
        }
        static protected function columnsValueList( $params, $sep = ", "){
            unset($params['id']);
            foreach ( $params as $key => $value){
                $varPairs[] = "{$key} = '{$value}'";
            }
            return join($sep, $varPairs);
        }
        static public function add( $params ){
            global $db;
            $TableName = static::class;
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $query = "INSERT INTO {$TableName} ({$columnsString})
                      VALUES ({$valuesString})";
            $result = $db -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت ثبت شد!","","success");
            }
            return $result;
        }
        static public function find($where = "true" , $order = "id DESC" , $count = 100 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where} AND status != 'deleted'
                      ORDER BY {$order}
                      LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
        static public function update( $params ){
            $TableName = static::class;
            $columnsValueList = self::columnsValueList( $params );
            $query = "UPDATE {$TableName}
                      SET {$columnsValueList}
                      WHERE ID = {$params['id']}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت ویرایش شد!","","success");
            }
        }
        static public function delete( $id ){
            $TableName = static::class;
            $query = "UPDATE {$TableName}
                      SET status = 'deleted'
                      WHERE ID = {$id}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت حذف شد!","","success");
            }
        }
    }
}