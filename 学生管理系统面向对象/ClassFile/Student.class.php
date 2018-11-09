<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 12:02
 *注释不存在的
 */

class Student{
    public function AdStudent(){
        $sqllink=MysqlLink::GetMysql();
         include_once "./TempLate/AdStudent.html";
     }
     public function ASHandle(){
         $sqllink=MysqlLink::GetMysql();
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
     }
     public function Home(){
         $sqllink=MysqlLink::GetMysql();
         $sql="select * from student";
         $data=$sqllink->select($sql);
         include_once "./TempLate/home.html";
     }
     public function UpdataHandle(){
         $sqllink=MysqlLink::GetMysql();
         @$id=$_GET['id'];
         $sql=" select * from student where id='{$id}'";
         $res=mysqli_fetch_assoc($sqllink->select($sql));
         include_once "./TempLate/UpdataHandle.html";
     }
     public function Delete(){
         $sqllink=MysqlLink::GetMysql();
         $id=$_GET['id'];
         $sql="delete from student where id='{$id}'";
         if ($sqllink->delete($sql)){
             echo "<script> alert('删除学生成功');location.href = './index.php'; </script>";
         }else{
             echo "<script> alert('删除学生失败');location.href = './index.php?a=Delete';</script>";
         }
     }
     public function Updata(){
         $sqllink=MysqlLink::GetMysql();
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

     }
}