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
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!--引入自定义样式表-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- 移动设备优先 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
session_start();
require_once 'common/user.dao.php';
require_once 'nav.php';
if(!isset($_SESSION['userInfo'])){
    $error[] = '请先登录之后再进入用户中心';
    require 'common/error.php';
    die();
}
$uid = $_SESSION['userInfo']['uid'];
$userName = $_SESSION['userInfo']['userName'];
$user = findUserByUid($uid);
$email = $user['email'];
?>

<div class="container mt-3 mb-5">
    <h5 class="mb-5">修改用户信息：</h5>
    <form class="form-group" action="doUpdateUser.php"  enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="">用户名</label>
            <input name="userName" class="form-control" type="text" value="<?php echo $userName?>">
        </div>
        <div class="form-group">
            <label for="">邮箱</label>
            <input name="email" class="form-control" type="email" placeholder="例如:123@123.com" value="<?php echo $email?>">
        </div>
        <div class="form-group">
            <label for="">头像</label>
            <input name="avatar" class="form-control border-0 mb-1" type="file" value="">
            <span>注：文件大小需要小于2M，且仅支持jpeg，jpg，png和gif格式</span>
        </div>
        <div class="text-right">
            <button class="btn btn-primary" type="submit">提交</button>
            <button class="btn btn-danger" type="button" onclick="location.href='userCenter.php'">返回个人中心</button>
        </div>
    </form>
</div>


<!--引入jQuery文件-->
<script src="js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>