<?php
define('APP','jikeevideo');
require '../common/video.dao.php';

$vid = (int)$_POST['vid'];
$video = findVideoByViD($vid);
$videoFileUrl = ".".$video['videoUrl'];
$videoCoverUrl = ".".$video['coverUrl'];

$dbRes = deleteVideoByVid($vid);

if($dbRes){
    echo "<script>alert('数据库中记录删除成功')</script>";
}else{
    echo "<script>alert('数据库中记录删除失败')</script>";
}

$coverDel = unlink($videoCoverUrl);
$fileDel = unlink($videoFileUrl);

if($coverDel&&$fileDel){
    echo "<script>alert('文件删除成功')</script>";
    echo "<script>alert('所有操作成功，即将跳转到视频管理中心')</script>";
    echo "<script>location.href='videoManage.php'</script>";
}else{
    echo "<script>alert('文件删除失败')</script>";
}




