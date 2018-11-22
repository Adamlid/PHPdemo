<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/22
 * Time: 18:16
 ******注释不存在的******
 */



class Page{
    public static function OutJson(){
        header('Content-Type:application/json');
        $p=$_GET['page']??1;
        $num=$_GET['limit']??10;
        $page=($p-1)*$num;
        $mysqli=MysqlLink::GetMysql();
        $sumsql="select count(*) as count from article ";
        $sum=$mysqli->query($sumsql);
        $count=$sum->fetch(2);
//        $sql="select * from article limit $page,$num";
        $sql = "select a.id,a.title,c.name,a.author,a.ptime,a.hits,a.introduce from article a ";
        $sql .= "join category c on a.category_id=c.id limit $page,$num";
        $res=$mysqli->query($sql);
        $date=$res->fetchAll(2);
        $json['code']=0;
        $json['msg']='';
        $json['count']=$count['count'];
        $json['data']=$date;
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
}