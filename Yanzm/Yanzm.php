<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/20
 * Time: 19:32
 */

session_start(); //1>session_start()必须置于最顶部,2>多服务器，要考虑集中管理session信息
 //phpinfo();//打印出php的信息
 //1.生成一张底图（width:100;height:30）
$image=imagecreatetruecolor(100,30);
$bgcolor=imagecolorallocate($image,255,255,255);//画笔着色
imagefill($image,0,0,$bgcolor);//将底图的着色

//随机生成四个数字
/*
for($i=0;$i<4;$i++){
    $fontcolor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $fontcontent=rand(0,9);//验证码的内容
    $fontsize=6;//字体大小
    $x=($i*100/4)+rand(5,10);//x轴
    $y=rand(5,10);//Y轴
    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);//使用imagestring()将文字写在画布上
}
*/
$captch_code="";
for($i=0;$i<4;$i++){
    $fontsize=10;
    $fontcolor=imagecolorallocate($image,rand(20,100),rand(30,100),rand(10,200));
    $str="qwertyuiopasdfghjklzxvbnm1234567890";//给出一个字符串，用于生成随机验证码
    $fontcontent=substr($str,rand(0,strlen($str)),1);//每次截取一个字符
    $captch_code.=$fontcontent;//拼接
    $x=($i*100/4)+rand(5,10);
    $y=rand(5,10);
    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
}
$_SESSION['authcode']=$captch_code;//保存在session中
//添加干扰点
for($i=0;$i<100;$i++){
    $pointcolor=imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
    imagesetpixel($image,rand(0,100),rand(0,30),$pointcolor);
}
//添加干扰线
for($i=0;$i<3;$i++){
    $linecolor=imagecolorallocate($image,rand(80,200),rand(80,200),rand(80,200));
    imageline($image,rand(5,95),rand(5,25),rand(5,95),rand(5,25),$linecolor);
}ob_clean();//清空缓存
header("content-type:".'image/png');//输出图片的头文件固定格式（可以是image/jpg、image/png、）
imagepng($image);//向浏览器输出一张图片
imagedestroy($image);//销毁内存中的底图