<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/13
 * Time: 17:15
 ******注释不存在的******
 */


class StaffM extends Base{
    public function Home(){
        $sql="select * from Staff";
        $data=$this->mysqli->query($sql);
        include_once "./View/Home.tpl";
    }
    public function AdStaff(){
        include_once "./View/AdStaff.tpl";
    }
    public function ASHandle(){
        foreach ($_POST as $key=>$val){
            $$key=$val;
        }
        $sql="insert into Staff (name,sex,age,edu,city,salary,bonus) values ('{$name}','{$sex}','{$age}','{$edu}','{$city}','{$salary}','{$bonus}')";
        if($this->mysqli->exec($sql)){
            echo "<script> alert('添加员工成功');location.href = './index.php'; </script>";
        }else{
            echo "<script> alert('添加员工失败');location.href = './index.php?a=ASHandle';</script>";
        }
    }
    public function UpdateHandle(){
        @$id=$_GET['id'];
        $sql=" select * from Staff where id='{$id}'";
        $date=$this->mysqli->query($sql);
        $res=$date->fetch(PDO::FETCH_ASSOC);
        include_once "./View/UpdateHandle.tpl";
    }
    public function Delete(){
        $id=$_GET['id'];
        $sql="delete from Staff where id='{$id}'";
        if ($this->mysqli->exec($sql)){
            echo "<script> alert('删除员工成功');location.href = './index.php'; </script>";
        }else{
            echo "<script> alert('删除员工失败');location.href = './index.php?a=Delete';</script>";
        }
    }
    public function Update(){
        foreach ($_POST as $key=>$val){
            $$key=$val;
        }
        $sql="update Staff set name='{$name}',sex='{$sex}',age='{$age}',edu='{$edu}',city='{$city}',salary='{$salary}',bonus='{$bonus}' where id='{$id}' ";
        if ($this->mysqli->update($sql)){
            echo "<script> alert('修改信息员工成功');location.href = './index.php'; </script>";
        }else{
            echo "<script> alert('修改信息员工失败');location.href = './index.php?a=UpdateHandle&id={$id}';</script>";
        }
    }
}