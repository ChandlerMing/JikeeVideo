<?php
define('APP','jikeevideo');
require_once '../common/video.dao.php';

if(empty($_POST['videoName'])){
    $error[] = '视频名称不能为空！';
    require '../common/error.php';
    die();
}
if(empty($_POST['videoDesc'])){
    $error[] = '视频简介不能为空！';
    require '../common/error.php';
    die();
}
if(empty($_FILES['videoCover']['name'])){
    $error[] = '视频封面不能为空！';
    require '../common/error.php';
    die();
}
if(empty($_FILES['videoFile']['name'])){
    $error[] = '视频文件不能为空！';
    require '../common/error.php';
    die();
}

$videoName = $_POST['videoName'];
$videoDesc = $_POST['videoDesc'];
$videoArea = $_POST['videoArea'];
$videoCover = $_FILES['videoCover'];
$videoFile = $_FILES['videoFile'];

$coverUploadFlag = false;
$fileUploadFlag = false;
//检查封面是否上传成功
if ($videoCover['error'] > 0) {
    $coverErrorMsg = '上传错误:';
    switch ($videoCover['error']) {
        case 1:
        case 2:
            $coverErrorMsg = "文件大小超出系统限制";
            break;
        case 3:
            $coverErrorMsg .= '文件只有部分被上传';
            break;
        case 4:
            $coverErrorMsg .= '没有文件被上传';
            break;
        case 6:
            $coverErrorMsg .= '找不到临时文件夹';
            break;
        case 7:
            $coverErrorMsg .= '文件写入失败';
            break;
        default:
            $coverErrorMsg .= '未知错误';
            break;
    }
    $error['videoCover'] = $coverErrorMsg;
} else {
    if ($videoCover['size'] < 2000000) {
        $type = $videoCover['type'];
        $allowType = array('image/jpeg', 'image/png', 'image/gif');
        if (in_array($type, $allowType)) {
            $type = substr(strrchr($videoCover['name'], '.'), 1);
            $file = date("YmdHis") . rand(100, 999) . "." . $type;
            move_uploaded_file($videoCover['tmp_name'], "../img/" . $file);
            $coverUploadFlag = true;
        } else {
            $error['videoCover'] = '图像类型不符合要求,允许的类型为：' . implode(",", $allowType);
        }
    } else {
        $error['videoCover'] = '文件大小应小于 2M';
    }
}
//上传过程中没有错误发生
if (empty($error)) {
    //如果没有选择
    if(!$coverUploadFlag){
        $videoCoverUrl = '/img/'.'Logo.png';
    }else{
        $videoCoverUrl = '/img/'.$file;
    }
    echo "<script>alert('封面上传成功！')</script>";
} else {
    require '../common/error.php';
    die();
}

//检查视频是否上传成功
if ($videoFile['error'] > 0) {
    $fileErrorMsg = '上传错误:';
    switch ($videoFile['error']) {
        case 1:
        case 2:
            $fileErrorMsg = "文件大小超出系统限制";
            break;
        case 3:
            $fileErrorMsg .= '文件只有部分被上传';
            break;
        case 4:
            $fileErrorMsg .= '没有文件被上传';
            break;
        case 6:
            $fileErrorMsg .= '找不到临时文件夹';
            break;
        case 7:
            $fileErrorMsg .= '文件写入失败';
            break;
        default:
            $fileErrorMsg .= '未知错误';
            break;
    }
    $error['videoFile'] = $fileErrorMsg;
} else {
    if ($videoFile['size'] < 4000000000) {
        $type = $videoFile['type'];
        $allowType = array('video/mp4','video/webm');
        if (in_array($type, $allowType)) {
            $type = substr(strrchr($videoFile['name'], '.'), 1);
            $file = date("YmdHis") . rand(100, 999) . "." . $type;
            move_uploaded_file($videoFile['tmp_name'], "../videos/" . $file);
            $fileUploadFlag = true;
        } else {
            $error['videoFile'] = '视频类型不符合要求,允许的类型为：' . implode(",", $allowType);
        }
    } else {
        $error['videoFile'] = '文件大小应小于 4G';
    }
}
if (empty($error)) {
    //上传过程中没有错误发生
    if(!$fileUploadFlag){
        $videoFileUrl = '/videos/'.'1.mp4';
    }else{
        $videoFileUrl = '/videos/'.$file;
    }
    echo "<script>alert('视频上传成功！')</script>";
} else {
    require '../common/error.php';
    die();
}

//上述操作没有错误，下面将信息存入数据库
addVideo($videoName,$videoFileUrl);
$vid = findVidByName($videoName);
addVideoDesc($vid,$videoCoverUrl,$videoDesc);
addVideoArea($vid,$videoArea);

echo "<script>alert('上传视频成功，即将跳转到视频上传中心')</script>";
echo "<script>location.href='videoUpload.php'</script>";




