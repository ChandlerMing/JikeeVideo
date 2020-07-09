<?php
require_once 'pdo.php';

function findCommentByVid($vid){
    $sql = "select distinct * from tbl_comment where vid = ?";
    $params=array($vid);
    return execQuery($sql,$params);
}

function findAllComment(){
    $sql = "select distinct * from tbl_comment,tbl_user where (tbl_comment.uid = tbl_user.uid)";
    $params=array();
    return execQuery($sql,$params);
}

function addComment($uid,$vid,$commentText){
    $format="%Y-%m-%d %H:%M:%S";//设置时间格式
    $commentTime=strftime($format); //获取系统时间
    $sql = "insert into `tbl_comment` (`uid`,`vid`,`commentTime`,`commentText`) values (?,?,?,?);";
    $params = array($uid,$vid,$commentTime,$commentText);
    return execUpdate($sql,$params);
}

function coverComment($cid){
    $sql = "update tbl_comment set commentText = '该用户因为违规发言，评论已经被折叠' where cid = ?";
    $params=array($cid);
    return execUpdate($sql,$params);
}
