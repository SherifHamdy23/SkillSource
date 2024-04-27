<?php

use Support\Console;

require_once './Support/autoload.php';


class ConsoleModel extends Console {
    public function __construct()
    {
        echo static::class;
    }
}