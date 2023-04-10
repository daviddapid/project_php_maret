<?php

abstract class Model
{
    protected static $servername = "localhost";
    protected static $username_db = "root";
    protected static $password_db = "";
    protected static $dbname = "tugas_web_kls11";

    public static function startConnection()
    {
        $conn = new mysqli(self::$servername, self::$username_db, self::$password_db, self::$dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
