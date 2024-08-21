<?php
include '../db.php';

class Api {
    private static $db ;
    public function __construct()
    {
        //get connection
        self::$db = new db();

    }

    function getAllCompanies(){
       $db = self::$db;
       $result = $db::query('select * from companies');
       return $result;
    }
}
$apiTest = new Api();
$r = $apiTest->getAllCompanies();
var_dump($r);
?>