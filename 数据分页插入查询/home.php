<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/10/31
 * Time: 18:45
 */


?>



<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <div style="min-width: 800px; max-width: 1000px; height: auto; margin: 0 auto">
        <table align="center" cellpadding="0" cellspacing="0" border="1px" class="table-hover table-striped table-bordered table">
            <th colspan="7">商品信息修改</th>
            <tr>
                <td>商品序号</td>
                <td>商品名称</td>
                <td>商品分类</td>
                <td>商品价格</td>
                <td>商品品牌</td>
                <td>选择操作</td>
            </tr>
            <?php foreach ($goods as $k=>$v):?>
                <tr>
                    <td><?php echo $v['goods_id']?></td>
                    <td><?php echo $v['goods_cate']?></td>
                    <td><?php echo $v['goods_name']?></td>
                    <td><?php echo $v['goods_price']?></td>
                    <td><?php echo $v['brand_name']?></td>
                    <td>
                        <a href="./action.php?ac=del&id=<?php echo $v['goods_id']?>">删除</a>
                        <a href="./UpGoods.php?id=<?php  echo $v['goods_id']?>">修改</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="7">
                    <a href="./index.php?p=1">首页</a>
                    <a href="./index.php?p=<?php echo $page-1?>">上一页</a>
                    <?php for ($i=1;$i<=$pagelast;$i++): ?>
                        <?php
                        if ($i>2&&$i<5){
                            echo "...";
                            continue;
                        }
                        ?>
                        <a href="./index.php?p=<?php echo $i ?>">[<?php echo $i?>]</a>
                    <?php endfor;?>
                    <a href="./index.php?p=<?php echo $page+1?>">下一页</a>
                    <a href="./index.php?p=<?php  echo $pagelast?>">尾页</a>
                    <a href="AddGoods.php">添加商品</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>