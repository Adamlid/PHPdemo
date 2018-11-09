<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 11:26
 *注释不存在的
 */

        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $edu=$_POST['edu'];
        $city=$_POST['city'];
        $sql="insert into student (name,sex,age,edu,city) values ('{$name}','{$sex}','{$age}','{$edu}','{$city}')";
    if($sqllink->insert($sql)){
        echo "<script> alert('添加学生成功');location.href = './index.php'; </script>";
    }else{
         echo "<script> alert('添加学生失败');location.href = './index.php?a=ASHandle';</script>";
    }
