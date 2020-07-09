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
        #tb {
            table-layout:fixed;
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
require_once '../common/comment.dao.php';
?>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once 'left.php';
        ?>
        <div class="col-11 mt-3">
            <h5>用户评论管理：</h5>
            <table id="tb" class="table table-dark" style="word-break:break-all; word-wrap:break-word;">
                <thead>
                <tr>
                    <th scope="col">#cid</th>
                    <th scope="col">uid</th>
                    <th scope="col">用户名称</th>
                    <th scope="col">评论时间</th>
                    <th scope="col">评论内容</th>
                    <th scope="col">和谐评论</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $allVideos = findAllComment();
                foreach ($allVideos as $item){
                    echo '<tr>
                    <th scope="row">'.$item['cid'].'</th>
                    <td>'.$item['uid'].'</td>
                    <td>'.$item['userName'].'</td>
                    <td>'.$item['commentTime'].'</td>
                    <td>'.$item['commentText'].'</td>
                    <td>
                    <form action="commentFilter.php" method="post" onsubmit="return makeSure()">
                    <input hidden name="cid" type="text" value="'.$item['cid'].'">
                    <button class="btn btn-danger w-50" type="submit">和谐评论</button>
                    </form>
                    </td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>


    <!--引入jQuery文件-->
    <script src="../js/jquery-3.5.1.js"></script>
    <!--引入bootstrap文件-->
    <script src="../js/bootstrap.bundle.js"></script>
    <script>
        function makeSure(){
            var flag = confirm("确定和谐这条评论?");
            if (flag==true){
                return true;
            }else{
                return false;
            }
        }
    </script>
</body>
</html>