<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/19
 * Time: 19:26
 ******注释不存在的******
 */


class Verify{
    //实现验证码类
    //输出验证码图片
    public function getVerify(){
        //设置heard头
        header("Content-Type:text/html; charset=utf-8");
        header('content-type:image/png;');
        //创建画布
        $img=imagecreatetruecolor(200,70);
        $bgcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
        imagefill($img,0,0,$bgcolor);
        $str='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuioplkjhgfdsazxcvbnm123456789';
        $str=str_shuffle($str);
        $str=substr($str,4,4);
        $_SESSION['yzm']=$str;
        for ($i=0;$i<4;$i++){
            $tcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
            imagettftext($img,50, mt_rand(-15, 15), 10+45*$i, 60, $tcolor,Zerin_PATH.'/libs/calibri.ttf',$str[$i]);
        }
        ob_clean();
        imagepng($img);
        imagedestroy($img);
    }
}

//$t=new Verify();
//$t->getVerify();