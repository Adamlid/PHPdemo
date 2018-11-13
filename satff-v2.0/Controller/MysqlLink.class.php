<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 9:34
 *注释不存在的
 */



class MysqlLink{
    private $link;
    private static $mysql=null;
    private static $dsn="mysql:host=localhost;dbname=test;charset=utf8;port=3306";
    private static $user='root';
    private static $pwd='1998';
    private function __construct(){

    }

    private function __clone(){

    }
    public static function GetMysql(){
        if (self::$mysql===null){
            self::$mysql=new PDO(static::$dsn,static::$user,static::$pwd);
        }
        return self::$mysql;
    }
    public function __destruct()
    {
        mysqli_close($this->link);
    }
}

