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
require_once '../common/video.dao.php';
$vid = $_POST['vid'];
$video = findVideoByViD($vid);
?>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once 'left.php';
        if(empty($vid)){
            echo "<h4 class='m-3'>请从对应的入口进入！</h4>";
        }
        ?>
        <div class="col-11 mt-3">
            <h5>修改视频信息：</h5>
            <form class="form-group" action="doVideoUpdate.php"  enctype="multipart/form-data" method="post">
                <input name="vid" hidden value="<?php echo $vid?>">
                <div class="form-group">
                    <label for="">视频名称</label>
                    <input hidden name="oldVideoName" class="form-control" type="text" value="<?php echo $video['videoName']?>">
                    <input name="videoName" class="form-control" type="text" value="<?php echo $video['videoName']?>">
                </div>
                <div class="form-group">
                    <label for="">视频简介</label>
                    <input hidden name="readonly oldVideoDesc" class="form-control" type="text" value="<?php echo $video['videoDesc']?>">
                    <input name="videoDesc" class="form-control" type="text" value="<?php echo $video['videoDesc']?>">
                </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit">提交</button>
                <button class="btn btn-danger" type="button" onclick="window.history.go(-1);">返回</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!--引入jQuery文件-->
<script src="../js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>