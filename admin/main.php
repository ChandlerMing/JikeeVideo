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
        <div class="col-11">
            <dl class="border p-2">
                <dt>欢迎访问</dt>
                <dd>欢迎进入 PHP 新闻管理系统后台！请从左侧选择一个操作。</dd>
            </dl>
            <dl class="border p-2">
                <dt>服务器信息</dt>
                <dd>系统环境：<?php echo $_SERVER['SERVER_SOFTWARE']?></dd>
                <dd>服务器时间：<?php echo  date('Y-m-d H:i:s', time());?></dd>
                <dd>文件上传限制：<?php echo ini_get('file_uploads') ?
                        ini_get('upload_max_filesize') : '已禁用';?></dd>
                <dd>脚本执行时限：<?php echo ini_get('max_execution_time').'秒';?></dd>
            </dl>
        </div>
    </div>
</div>


<!--引入jQuery文件-->
<script src="../js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>