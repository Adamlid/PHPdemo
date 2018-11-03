<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/31
 * Time: 20:24
 */
require_once "../functions.php";
require_once "../sqlconfig.php";
$Link=SqlLink($SqlConfig,"goods");
$action=$_GET['ac'];
switch ($action){
    case "add":
        $goods_name=$_POST['goods_name'];
        $goods_cate=$_POST['goods_cate'];
        $goods_price=$_POST['goods_price'];
        $brand_name=$_POST['brand_name'];
        $sql="insert into tdb_goods (goods_name,goods_cate,goods_price,brand_name) values ('{$goods_name}','{$goods_cate}','{$goods_price}','{$brand_name}');";
        if (mysqli_query($Link,$sql)){
            header("location:./index.php");
        }else{
            header("location:./AddGoods.php");
        }
    case "del":
        $goods_id=$_GET['id'];
        $sql="delete from tdb_goods where goods_id='{$goods_id}';";
        if(mysqli_query($Link,$sql)){
            header("location:./index.php");
        }else{
            header("location:./index.php");
        }
    case "upg":
        $goods_id=$_GET['id'];
        $goods_name=$_POST['goods_name'];
        $goods_cate=$_POST['goods_cate'];
        $goods_price=$_POST['goods_price'];
        $brand_name=$_POST['brand_name'];
        $sql="update tdb_goods set goods_name='{$goods_name}',goods_cate='{$goods_cate}',brand_name='{$brand_name}',goods_price='{$goods_price}' where goods_id='{$goods_id}';";
        if (mysqli_query($Link,$sql)){
            header("location:./index.php");
        }else{
            header("location:./UpGoods.php");
    }
}
