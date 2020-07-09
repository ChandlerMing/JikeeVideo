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
<?
session_start();
define('APP','jikeevideo');
require_once 'nav.php';
require_once 'common/user.dao.php';
if(!isset($_SESSION['userInfo'])){
    $error[] = '请先登录之后再进入用户中心';
    require 'common/error.php';
    die();
}
$uid = $_SESSION['userInfo']['uid'];
$user = findUserByUid($uid);
?>
<div class="container mt-5 min-vh-100">
    <div class="row border p-4 mb-3">
        <div class="col-12 col-lg-3 align-self-center">
            <img class="mr-5" src="img/<?php echo $user['avatar'] ?>" width="200" height="150">
        </div>
        <div class="col-12 col-lg-4 align-self-center">
            <h6>昵称：<?php echo $user['userName'] ?></h6>
            <h6>性别：<?php echo $user['gender'] ?></h6>
            <h6>邮箱：<?php echo $user['email'] ?></h6>
            <h6>注册时间：<?php echo $user['regtime'] ?></h6>
            <h6>级别：<?php echo $user['power'] ?></h6>
        </div>
        <div class="col-12 col-lg-5">
            <button class="btn btn-info" onclick="location.href='updateUser.php'">编辑资料</button>
            <button class="btn btn-info" onclick="location.href='updatePassword.php'">修改密码</button>
        </div>
    </div>
    <div class="row"><h4 class="ml-4">收藏：</h4></div>
    <div class="row border p-4">
        <?php
        $favouriteVideos = findUserFavourite($uid);
        for($i=0;$i<count($favouriteVideos);$i++){
            echo '<div class="item col-sm-12 col-md-4 col-xl-2 mb-4">
                <div class="itemBody d-flex flex-column mx-2 align-items-center">
                    <a href="video.php?vid='.$favouriteVideos[$i]['vid'].'">
                    <img style="border-radius: 10px;width: 180px;height: 120px;" src="'.$favouriteVideos[$i]['coverUrl'].'" alt=""></a>
                    <div class="text mx-auto pt-2">
                        '.$favouriteVideos[$i]['videoName'].'
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>
<?php
require_once 'footer.php';
?>


<!--引入jQuery文件-->
<script src="js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>