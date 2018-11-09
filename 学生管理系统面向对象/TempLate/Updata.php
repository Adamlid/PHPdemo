<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 18:52
 *注释不存在的
 */


$id=(int)$_POST['id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=(int)$_POST['age'];
$edu=$_POST['edu'];
$city=$_POST['city'];
$sql="update student set name='{$name}',sex='{$sex}',age='{$age}',edu='{$edu}',city='{$city}' where id='{$id}' ";


if ($sqllink->update($sql)){
    echo "<script> alert('修改信息学生成功');location.href = './index.php'; </script>";
}else{
    echo "<script> alert('修改信息学生失败');location.href = './index.php?a=UpdataHandle&id={$id}';</script>";
}


?>