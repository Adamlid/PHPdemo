<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/20
 * Time: 19:34
 */


header("Content-type:text/html;charset=utf-8");//避免出现乱码的情况
if(isset($_REQUEST['authcode'])){
    session_start();//使用$_SESSION之前必须使用session_start()
    if(strtolower($_REQUEST['authcode'])==$_SESSION["authcode"]){//$_SESSION['authcode']是服务器端存储的验证码，$_REQUEST['authcode']获取客户端输入的信息
        echo "<font color='#000cc'>输入正确</font>";
    }
    else{
        echo "<font color='#0000cc'>输入错误</font>";
    }
    exit();
}
?>


