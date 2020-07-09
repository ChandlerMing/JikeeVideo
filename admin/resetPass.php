<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <style>
        html {
            /*隐藏滚动条，当IE下溢出，仍然可以滚动*/
            -ms-overflow-style:none;
            /*火狐下隐藏滚动条*/
            overflow:-moz-scrollbars-none;
        }
        /*Chrome下隐藏滚动条，溢出可以透明滚动*/
        html::-webkit-scrollbar{
            width:0px
        }
    </style>
    <meta charset="UTF-8">
    <title>JikeeViedo</title>
    <!-- 引入Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!--引入自定义样式表-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- 移动设备优先 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
session_start();
require_once 'nav.php';
require_once '../common/user.dao.php';
if(!empty($_POST)){
    $uid = (int)$_POST['uid'];
    if(!updatePasswordByUid($uid,md5(123456))){
        echo '<script>alert("密码重置成功")</script>';
    }else{
        echo '<script>alert("密码重置失败")</script>';
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once 'left.php';
        ?>
        <div class="col-11 mt-3">
            <h5>重置用户密码：</h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#uid</th>
                    <th scope="col">用户名</th>
                    <th scope="col">邮箱</th>
                    <th scope="col">性别</th>
                    <th scope="col">注册时间</th>
                    <th scope="col">权限</th>
                    <th scope="col">重置</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $allUser = findAllUser();
                foreach ($allUser as $item){
                    echo '<tr>
                    <th scope="row">'.$item['uid'].'</th>
                    <td>'.$item['userName'].'</td>
                    <td>'.$item['email'].'</td>
                    <td>'.$item['avatar'].'</td>
                    <td>'.$item['regtime'].'</td>
                    <td>'.$item['power'].'</td>
                    <td>
                    <form action="resetPass.php" method="post" onsubmit="return makeSure()">
                    <input hidden name="uid" type="text" value="'.$item['uid'].'">
                    <button class="btn btn-danger" type="submit">重置密码</button>
                    </form>
                    </td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!--引入jQuery文件-->
<script src="../js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="../js/bootstrap.bundle.js"></script>
<script>
    function makeSure(){
        var flag = confirm("确定要重置?");
        if (flag==true){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>