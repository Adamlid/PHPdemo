<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/31
 * Time: 17:04
 */



require_once "../sqlconfig.php";
require_once "../functions.php";
$page=$_GET['p']??1;
if ($page==0){
    $page=1;
}
//连接数据库
$Link=SqlLink($SqlConfig,"goods");
//每页显示的个数
$num=10;
//求出总页数
$sum=mysqli_query($Link,"select  count(*) as count from tdb_goods");
$count=mysqli_fetch_assoc($sum)['count'];
//求出分页
$page_mei=($page-1)*$num;
//求出最后一页
$pagelast=ceil($count/$num);
//查询数据
$sql="select * from tdb_goods limit $page_mei,$num;";
$res=mysqli_query($Link,$sql);
while ($arr=mysqli_fetch_assoc($res)){
    $goods[]=$arr;
}

require_once "./home.php";
?>









