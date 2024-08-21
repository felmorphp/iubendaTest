<?php

class db{

    private static $cnx = false;
    private $status = '';
    public function __construct()
    {
        $this->connect();
    }
    public function __destruct()
    {
        $this->disconnect();
    }

    function connect(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "test";

// Create connection
        self::$cnx= mysqli_connect($servername, $username, $password,$database);

// Check connection
        if (!self::$cnx ) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }
    function disconnect(){
        self::$cnx->close();
    }


     static function query($queryParams ){
        $result = mysqli_fetch_array(mysqli_query(self::$cnx,$queryParams));
        self::disconnect();
        return $result;
    }
    static function insert($table,$queryParams ){
        $result = mysqli_fetch_array(mysqli_query(self::$cnx,$queryParams));
        self::disconnect();
        return $result;
    }
    static function update($table,$queryParams ){
        $result = mysqli_fetch_array(mysqli_query(self::$cnx,$queryParams));
        self::disconnect();
        return $result;
    }
    static function delete($table,$queryParams ){
        $result = mysqli_fetch_array(mysqli_query(self::$cnx,$queryParams));
        self::disconnect();
        return $result;
    }

}
?>