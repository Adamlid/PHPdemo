<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/31
 * Time: 21:15
 */


require_once "../functions.php";
require_once "../sqlconfig.php";
$Link=SqlLink($SqlConfig,"goods");
$good_id=$_GET['id'];
$find= "select * from tdb_goods where goods_id='$good_id';";
$res=mysqli_query($Link,$find);
$goods=mysqli_fetch_assoc($res);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改商品信息</title>
</head>
<body>
<div style="min-width: 800px; max-width: 1000px; height: auto; margin: 0 auto">
    <form action="./action.php?ac=upg&id=<?php echo "$good_id" ?>" method="post">
        <p>商品名称	<input type="text" name="goods_name" placeholder="<?php echo $goods['goods_name'] ?>" class="form-control"></p>
        <p>商品分类<input type="text" name="goods_cate" placeholder="<?php echo $goods['goods_cate'] ?>" class="form-control"></p>
        <p>商品价格<input type="text" name="goods_price" placeholder="<?php echo $goods['goods_price'] ?>" class="form-control"></p>
        <p>商品品牌	<input type="text" name="brand_name" placeholder="<?php echo $goods['brand_name'] ?>" class="form-control"></p>
        <p><input type="submit" value="点击提交" class="btn btn-default"></p>
    </form>
</div>
</body>
</html>

