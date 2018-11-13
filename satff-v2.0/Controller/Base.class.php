<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/10
 * Time: 17:19
 *注释不存在的
 */



class Base{
    public $mysqli;
    public function __construct()
    {
        $this->mysqli=MysqlLink::GetMysql();
    }
}