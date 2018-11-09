<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 9:34
 *注释不存在的
 */



class MysqlLink{
    private $host="localhost";
    private $user="root";
    private $pwd="1998";
    private $dbname="test";
    private $charset="utf8";
    private $link;
    private static $mysql=null;

    private function __construct(){
        $this->connect();
    }
    private function __clone(){

    }
    public static function GetMysql(){
        if (self::$mysql===null){
            self::$mysql=new MysqlLink();
        }
        return self::$mysql;
    }
    private function connect(){
        $this->link=mysqli_connect($this->host,$this->user,$this->pwd);
        mysqli_set_charset($this->link,$this->charset);
        mysqli_select_db($this->link,$this->dbname);
    }
    public function select($sql){
        return mysqli_query($this->link,$sql);
    }
    public function insert($sql){
        return mysqli_query($this->link,$sql);
    }
    public function update($sql){
        return mysqli_query($this->link,$sql);
    }
    public function delete($sql){
        return mysqli_query($this->link,$sql);
    }
    public function __destruct()
    {
        mysqli_close($this->link);
    }
    public function __wakeup()
    {
        $this->connect();
    }
}

