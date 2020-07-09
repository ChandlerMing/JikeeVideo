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
?>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once 'left.php';
        ?>
        <div class="col-11 mt-3">
            <form class="form-group" action="doVideoUpload.php"  enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="">视频名称</label>
                    <input name="videoName" class="form-control" type="text" value="<?php echo $userName?>">
                </div>
                <div class="form-group">
                    <label for="">视频简介</label>
                    <input name="videoDesc" class="form-control" type="text" value="<?php echo $userName?>">
                </div>
                <div class="form-group">
                    <label for="">视频分区</label>
                    <select name="videoArea" class="form-control">
                        <option value="movie">电影区</option>
                        <option value="serial">剧集区</option>
                        <option value="learn">学习区</option>
                        <option value="other">其他区</option>
                    </select>
                </div>
                <div class="form-group border-bottom">
                    <label for="">视频封面上传</label>
                    <input name="videoCover" class="form-control border-0 mb-1" type="file" value="">
                    <span>注：文件大小需要小于2M，且仅支持jpeg，jpg，png和gif格式</span>
                </div>
                <div class="form-group border-bottom"">
                    <label for="">视频文件上传</label>
                    <input name="videoFile" class="form-control border-0 mb-1" type="file" value="">
                    <span>注：文件大小需要小于4G，且仅支持MP4和Webm格式</span>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">提交</button>
                    <button class="btn btn-danger" type="button" onclick="location.href='main.php'">返回首页</button>
                </div>
            </form>
    </div>
</div>


<!--引入jQuery文件-->
<script src="../js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>