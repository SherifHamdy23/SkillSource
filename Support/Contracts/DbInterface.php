<?php

namespace Support\Contracts;

interface DBInterface {
    public static function connect();
    public static function query($query);
    public function close();
    public static function getInstance();
}


?>