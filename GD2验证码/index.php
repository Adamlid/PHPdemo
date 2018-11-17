<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>验证码demo</title>
</head>
</html>
<body>
<form action="./retrun.php">
    <p>验证码图片：<br>
<!--        //点击验证码图片本身进行验证码的切换（需求一）-->
<!--        //生成随机数字，便于访问服务端，如果地址是相同的则浏览器不会刷新访问-->
        　　　　　　　　<img id="captCode" src="./Yanzm.php?=<?php echo rand();?>" width="100px;height:100px;" alt=""
                     onclick="this.src='Yanzm.php?+ Math.random()'">
<!--        //点击‘点击切换’,切换验证码（需求二）-->
<!--        <img id="captCode" src="./Yanzm.php?=-->
<!--        --><?php ////echo rand();?>
<!--        <!--" width="100px;height:100px;" alt="">-->
        <a href="javascript:void(0)" onclick="document.getElementById('captCode').src='Yanzm.php?=<?php echo rand();?>'">点击切换？</a>
    </p>
    <p>请输入验证码的内容：
        <input type="text" name="authcode" value=""/>
    </p>
    <P>
        <input type="submit" value="提交" style="padding:6px 20px;"/>
    </P>
</form>
</body>