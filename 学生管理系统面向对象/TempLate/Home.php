<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 10:50
 *注释不存在的
 */

$sql="select * from student";
$data=$sqllink->select($sql);
include_once "./TempLate/Home.html";
?>

