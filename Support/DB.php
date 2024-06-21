<?php

namespace Support;

use Support\Contracts\DBInterface;

class DB implements DBInterface {
    private static $instance = null;

    public static function getInstance()
    {
        if (static::$instance == null)
            DB::connect();
        return static::$instance;
    }

    public static function connect() {
            $host = '127.0.0.1'; // Your host name
            $dbname = 'pp_uni'; // Your database name
            $username = 'root'; // Your database username
            $password = ''; // Your database password

            try {
                // Create a PDO instance
                $pdo = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                static::$instance = $pdo;
                
                // Set PDO to throw exceptions on errors
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
                
                // echo "Connected successfully";
            } catch (\PDOException $e) {
                // If connection fails, handle the exception
                echo "Connection failed: " . $e->getMessage();
            }
    }

    public static function query($query, $params = []) {
        // Implement query logic
        $db = static::getInstance();
        $query = $db->prepare($query);
        $query->execute($params);
        $results = $query->fetchAll(\PDO::FETCH_ASSOC);
        // foreach($results as $row)
        //     print_r($row);
        return $results;
    }

    public function close() {
        // Implement close connection logic
        static::$instance->close();
    }

    public static function lastInsertedId() {
        // Implement last inserted id logic
        return static::$instance->lastInsertId();
    }

}
