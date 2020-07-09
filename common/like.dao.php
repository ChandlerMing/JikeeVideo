<?php
/**新闻点赞信息操作文件**/
require_once 'pdo.php';
//添加点赞记录
function addVideoLike($vid,$userIP){
    $sql = "insert into `tbl_like` (`vid`,`userIP`) values (?,?)";
    $params=array($vid,$userIP);
    return execUpdate($sql,$params);
}

//按视频编号和 ip 查找点赞记录
function findVideoLike($vid,$userIP){
    $sql = "select * from `tbl_like` where `vid`=? and `userIP`= ?";
    $params=array($vid,$userIP);
    $rs = execQuery($sql,$params);
    if(count($rs)>0){return $rs[0];}
    return $rs;
}

//获取客户端 ip 地址
function getIP(){
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $cip = $_SERVER["HTTP_CLIENT_IP"];
    }elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }elseif(!empty($_SERVER["REMOTE_ADDR"])){
        $cip = $_SERVER["REMOTE_ADDR"];
    }else{
        $cip = "无法获取！";
    }
    return $cip;
}