<?php
namespace Support;

use Models\Job;

abstract class Model {
    private static $table;
    protected static $fillable = [];

    public static function table() {
        return static::$table ?? static::$table = lcfirst(basename(str_replace('\\', '/' ,static::class)))."s";
    }

    public static function all() {
        $query = "select * from ". static::table();
        return DB::query($query);
    }

    public static function create(array $data) {
        $query = 'INSERT INTO '. static::table() ." (";
        $values = "VALUES (";
        foreach (static::$fillable as $column) {
            $query .= $column.",";
            $values .= is_string($data[$column]) ? '"'.$data[$column]."\",": $data[$column].",";
        }
        $query .= '$';
        $values .= '$';

        $full_query = str_replace(',$', ')', $query)." ".str_replace(',$', ')', $values);
        echo $full_query;
        return DB::query($full_query);
    }
    
    public static function find($id) {
        $table = static::table();
        return DB::query("SELECT * FROM $table WHERE id = :id" , ['id' => $id]);

    }
    public static function update($id, array $data) {
        $table = static::table();
        $query = "UPDATE $table SET ";
        foreach ($data as $column => $value) {
            $query .= "$column = :$column,";
        }
        $query = rtrim($query, ',');
        $query .= " WHERE id = :id";
        $data['id'] = $id;
        DB::query($query, $data);
    }
    public static function delete($id) {
        $table = static::table();
        DB::query("DELETE FROM $table WHERE id = :id", ['id' => $id]);
    }

    public static function where($column, $value) {
        $table = static::table();
        return DB::query("SELECT * FROM $table WHERE $column = :$column" , [$column => $value]);
    }

    public static function attach($pivot_table, $foreign_key, $related_key, $id, $related_id) {
        DB::query("INSERT INTO $pivot_table ($foreign_key, $related_key) VALUES (:id, :related_id)", ['id' => $id, 'related_id' => $related_id]);
    }

    public static function belongsToMany($related, $pivot_table, $foreign_key, $related_key, $id) {
        return DB::query("SELECT * FROM $related WHERE id IN (SELECT $related_key FROM $pivot_table WHERE $foreign_key = :id)", ['id' => $id]);
    }

    public static function findOrInsert($column, $value)
    {
        $obj = static::where($column, $value);
        if (!$obj) {
            static::create([$column => $value]);
            $obj = static::where($column, $value);
        }
        return $obj[0];
    }

    public static function lastInsertedId() {
        return DB::lastInsertedId();
    }

    public static function first($arr) {
        return $arr[0];
    }
    public static function exists($column, $value) {
        $table = static::table();
        $result = DB::query("SELECT * FROM $table WHERE $column = :$column", [$column => $value]);
        return count($result) > 0;
    }
}