<?php

/*
 * =========================
 * PDO - Connect to database
 * =========================
 */

class config {

    public static function connect() {
        //connection credentials
        $host = 'localhost';
        $dbname = 'akomplice'; //{change to use different database}
        $username = 'root';
        $password = 'AkomAViTAnCe'; //{change to use different database} 
        //test for a connection
        try {
            $connection = new PDO(
                    "mysql:host=$host;dbname=$dbname",
                    $username,
                    $password
            );

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $exception) {
            echo "Falied Connection: " . $exception->getMessage();
        }

        return $connection;
    }

}
