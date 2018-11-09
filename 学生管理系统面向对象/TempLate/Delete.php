<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 18:16
 *注释不存在的
 */

$id=$_GET['id'];
$sql="delete from student where id='{$id}'";
if ($sqllink->delete($sql)){
    echo "<script> alert('删除学生成功');location.href = './index.php'; </script>";
}else{
    echo "<script> alert('删除学生失败');location.href = './index.php?a=Delete';</script>";
}

