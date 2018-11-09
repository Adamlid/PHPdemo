<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 10:03
 *注释不存在的
 */

spl_autoload_register(
        function ($class_name){
            $filename="./ClassFile/".$class_name.".class.php";
            if (file_exists($filename)){
                require_once $filename;
            }
        }
 );
$Stu=new Student();
$action=$_GET['a']??'home';
$Stu->$action();

?>


