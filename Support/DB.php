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
        $uri = "mysql://avnadmin:AVNS_bgwmUUeglySS6hYNwEs@mysql-251a5251-sherifhamdy-09b8.f.aivencloud.com:14471/defaultdb?ssl-mode=REQUIRED";

        $fields = parse_url($uri);
        
        // build the DSN including SSL settings
        $conn = "mysql:";
        $conn .= "host=" . $fields["host"];
        $conn .= ";port=" . $fields["port"];;
        $conn .= ";dbname=defaultdb";
        $conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

        try {
            // Create a PDO instance
            $db = new \PDO($conn, $fields["user"], $fields["pass"]);
            static::$instance = $db;
            
            // Set PDO to throw exceptions on errors
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            
            // echo "Connected successfully";
        } catch (\PDOException $e) {
            // If connection fails, handle the exception
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function query($query, $params = []) {
        $db = static::getInstance();
        $stmt = $db->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
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
