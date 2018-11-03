<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/31
 * Time: 20:31
 */

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加商品</title>
</head>
<body>
<div style="min-width: 800px; max-width: 1000px; height: auto; margin: 0 auto">
    <form action="./action.php?ac=add" method="post">
        <p>商品名称	<input type="text" name="goods_name" class="form-control"></p>
        <p>商品分类<input type="text" name="goods_cate" class="form-control"></p>
        <p>商品价格<input type="text" name="goods_price" class="form-control"></p>
        <p>商品品牌	<input type="text" name="brand_name" class="form-control"></p>
        <p><input type="submit" value="点击提交" class="btn btn-default"></p>
    </form>
</div>

</body>
</html>
