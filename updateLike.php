<?php
header('Content-Type:text/html;charset=utf-8');
require_once 'common/like.dao.php';
require_once 'common/video.dao.php';
$vid=isset($_POST['vid'])?$_POST['vid']:'';
$likeCount= isset($_POST['likeCount'])?$_POST['likeCount']:'';
$userIP=getIP();
$result=findVideoLike($vid,$userIP);
if(!$result){
    addVideoLike($vid,$userIP);
    $likeCount+=1;
    $result=updateLikeCount($vid,$likeCount);
    echo $likeCount;
}else{
    return false;
}