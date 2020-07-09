<?php
session_start();
define('APP','jikeevideo');
require 'common/comment.dao.php';
header('Content-Type:text/html;charset=utf-8');
if(!isset($_SESSION['userInfo'])){
    $error[] = '请先登录然后再评论';
    require 'common/error.php';
    die();
}else{
    $uid = $_SESSION['userInfo']['uid'];
    $vid = (int)$_POST['vid'];
    $commentText = $_POST['commentText'];
    if(trim($commentText)==''){
        $error[] = '评论不能为空！';
        require 'common/error.php';
        die();
    }
    if(addComment($uid,$vid,$commentText)){
        echo "<script>alert('评论发表成功')</script>";
        echo "<script>location.href='../video.php?vid=$vid'</script>";
    }else{
        echo "<script>alert('评论发表失败')</script>";
    }
}
