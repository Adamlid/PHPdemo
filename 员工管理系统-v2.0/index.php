<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 10:03
 *注释不存在的
 */

try {
    spl_autoload_register(
        function ($class_name) {
            $filename = "./Controller/" . $class_name . ".class.php";
            if (file_exists($filename)) {
                require_once $filename;
            }
            $filename = "./Model/" . $class_name . ".class.php";
            if (file_exists($filename)) {
                require_once $filename;
            }
        }
    );
} catch (Exception $e) {
}


$action=$_GET['a']??'home';
$obj=$_GET['o']??'Staff';
$Staff=new $obj();
$Staff->$action();

?>


