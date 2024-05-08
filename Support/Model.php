<?php
namespace Support;

abstract class Model {
    private static $table;
    protected static $fillable = ['name', 'email', 'password'];


    public static function all() {
        $query = "select * from ". (static::$table ?? static::$table = lcfirst(basename(str_replace('\\', '/' ,static::class)))."s");
        return DB::query($query);
    }
    
    public static function create(array $data) {
        // return;
        $query = 'INSERT INTO '. (static::$table ?? lcfirst(basename(str_replace('\\', '/' ,static::class)))."s") ." (";
        $values = "VALUES (";
        foreach (static::$fillable as $column) {
            $query .= $column.",";
            $values .= '"'.$data[$column]."\",";
        }
        $query .= '$';
        $values .= '$';

        $full_query = str_replace(',$', ')', $query)." ".str_replace(',$', ')', $values);
        // echo $full_query;
        DB::query($full_query);
    }
    
    public static function find($id) {

    }
    public static function update($id, array $data) {
        $query = 'UPDATE '. (static::$table ?? lcfirst(basename(str_replace('\\', '/' ,static::class)))."s") ." SET ";
        foreach (static::$fillable as $column) {
            $query .= $column."=:".$column.", ";
        }
        $query .= 'WHERE id=:id';
        DB::query($query, $data);
    }
    public static function delete($id) {
        $query = 'DELETE FROM '. (static::$table ?? lcfirst(basename(str_replace('\\', '/' ,static::class)))."s") ." WHERE id=:id";
        DB::query($query, ['id' => $id]);
    }

    public static function where($column, $value) {
        $table = (static::$table ?? lcfirst(basename(str_replace('\\', '/' ,static::class)))."s");
        return DB::query("SELECT * FROM $table WHERE $column = :$column" , [$column => $value])[0];
    }
}