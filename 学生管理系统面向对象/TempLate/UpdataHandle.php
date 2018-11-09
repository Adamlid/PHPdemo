<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 18:24
 *注释不存在的
 */
@$id=$_GET['id'];
$sql=" select * from student where id='{$id}'";
$res=mysqli_fetch_assoc($sqllink->select($sql));
include_once "./TempLate/UpdataHandle.html";
?>
