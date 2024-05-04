<?php
namespace Support;

abstract class Model {
    private static $table = '';
    protected static $fillable = ['name', 'email', 'password'];
    public function __construct()
    {
        static::$table = lcfirst(basename(static::class))."s";
        echo self::$table."\n";
    }

    public static function all() {
        return DB::query('select * from '. lcfirst(basename(static::class))."s");
    }
    public static function create(array $data) {
        $query = 'INSERT INTO '. lcfirst(basename(static::class))."s (";
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

    }
    public static function delete($id) {

    }
}