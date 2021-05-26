<?php
if (!class_exists('attr_dota2')){
    class attr_dota2 extends Table {
        static public function find($where = "true" , $order = "product_id DESC" , $count = 100 , $offset = 0){
            $TableName = static::class;
            $query = "SELECT * FROM {$TableName}
                      WHERE {$where} AND status != 'deleted'
                      ORDER BY {$order}
                      LIMIT {$offset} , {$count}";
            return $GLOBALS['db'] -> Execute($query);
        }
        static public function delete( $id ){
            $TableName = static::class;
            $query = "UPDATE {$TableName}
                      SET status = 'deleted'
                      WHERE product_id = {$id}";
            $result = $GLOBALS['db'] -> Execute($query);
            if ($result){
                Alert::alerts("{$TableName} شما با موفقیت حذف شد!","","success");
            }
        }
    }
}