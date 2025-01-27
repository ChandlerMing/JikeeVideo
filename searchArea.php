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
require 'nav.php';
?>
<div class="container-fluid  min-vh-100">
    <h4 class="my-5">Jikee Video 搜索结果（关键字““<?php echo $_POST['key']; ?>””）：</h4>
    <div class="row">
        <?php
        require 'common/video.dao.php';
        $key = $_POST['key'];
        $videos = findVideoByKey($key);
        if(count($videos)==0){
            echo "<h5 class='mx-5'>没有搜索到相关视频</h5>";
        }else{
            for($i=0;$i<count($videos);$i++){
                echo '<div class="item col-sm-12 col-md-4 col-xl-2 mb-4">
                    <div class="itemBody d-flex flex-column mx-2 align-items-center">
                        <a href="video.php?vid='.$videos[$i]['vid'].'">
                        <img src="'.$videos[$i]['coverUrl'].'" alt=""></a>
                        <div class="text mx-auto pt-2">
                            '.$videos[$i]['videoName'].'
                        </div>
                    </div>
                </div>';
            }
        }
        ?>
    </div>
</div>
<!--底部-->
<?php
require 'footer.php'
?>

<!--引入jQuery文件-->
<script src="js/jquery-3.5.1.js"></script>
<!--引入bootstrap文件-->
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>
