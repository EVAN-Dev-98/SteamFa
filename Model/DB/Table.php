<?php
if (!class_exists('Table')){
    class Table{
        static protected function columnsList( $vars , $sep = ", "): string{
            $keys = array_keys($vars);
            return join($sep , $keys);
        }
        static protected function valuesList( $vars , $sep = "', '"): string{
            $dbc = new mysqli(DBHOST,DBUSER,DBPASS);
            foreach($vars as $k => $v)
                $vars[$k] = mysqli_real_escape_string($dbc,$v);
            $values = array_values($vars);
            return "'" . join($sep , $values) . "'";
        }
        static protected function columnsValueList( $params, $sep = ", "): string{
            unset($params['id']);
            $dbc = new mysqli(DBHOST,DBUSER,DBPASS);
            foreach ( $params as $k => $v)
                $varPairs[$k] = mysqli_real_escape_string($dbc,$v);
            foreach ($varPairs as $key => $value){
                $query[] = "{$key} = '{$value}'";
            }
            return join($sep, $query);
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
        static public function update( $params ){
            $TableName = static::class;
            $columnsValueList = self::columnsValueList( $params );
            $query = "UPDATE {$TableName}
                      SET {$columnsValueList}
                      WHERE id = {$params['id']}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت ویرایش شد!","","success");
            }
        }
        static public function delete( $id ){
            $TableName = static::class;
            $query = "UPDATE {$TableName}
                      SET status = 'deleted'
                      WHERE id = {$id}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت حذف شد!","","success");
            }
        }
        static public function find($where = "true" , $order = "id DESC" , $count = 100 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where} AND status != 'deleted'
                      ORDER BY {$order}
                      LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
        static public function find_join( $joined_table = "User" , $where = "true" , $order = "id DESC" , $count = 100 , $offset = 0 ){
            $TableName = static::class;
            $table_name = strtolower($TableName);
            $query = "SELECT * FROM {$TableName} , {$joined_table}
                      WHERE {$where}
                      AND {$joined_table}.{$table_name}_id = {$TableName}.id
                      AND {$TableName}.status != 'deleted'
                      ORDER BY {$TableName}.{$order}
                      LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
    }
}