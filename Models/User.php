<?php

namespace Models;

use Support\Contracts\ModelInterface;
use Support\Model;

class User extends Model implements ModelInterface {
    public function __construct() {
        parent::__construct();
        echo "User class loaded<br>";
    }
    public static function getAll() {
        return [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Smith'],
            ['id' => 3, 'name' => 'Bob Johnson']
        ];
    }
}
?>