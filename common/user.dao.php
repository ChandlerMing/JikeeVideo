<?php
require_once 'pdo.php';

//新增用户
function addUser($userName,$password,$email,$power=0){
    $format = "%Y-%m-%d %H:%M:%S";
    $regTime = strftime($format);
    $sql = "insert into `tbl_user`
(`userName`,`password`,`email`,`regtime`,`power`) values 
(?,?,?,?,?);";
    $params=array($userName,$password,$email,$regTime,$power);
    return execUpdate($sql,$params);
}

//根据用户名查找用户
function findUserByName($userName){
    $sql = "select `uid`,`userName`,
        case
        when gender=0 then '女' 
        when gender=1 then '男' end as `gender`,`password`,`email`,`avatar`,`regtime`,
        case 
        when power=0 then '普通用户' 
        when power=1 then '系统管理员' end as `power` from `tbl_user` 
        where `userName`= ?;
        ";
    $params=array($userName);
    $rs = execQuery($sql,$params);
    if(count($rs)>0){
        return $rs[0];
    }
    return $rs;
}

//根据uid查找用户
function findUserByUid($uid){
    $sql = "select `uid`,`userName`,
        case
        when gender=0 then '女' 
        when gender=1 then '男' end as `gender`,`password`,`email`,`avatar`,`regtime`,
        case 
        when power=0 then '普通用户' 
        when power=1 then '系统管理员' end as `power` from `tbl_user` 
        where `uid`= ?;
        ";
    $params=array($uid);
    $rs = execQuery($sql,$params);
    if(count($rs)>0){
        return $rs[0];
    }
    return $rs;
}

//根据uid更改用户信息
function updateUserByUid($uid,$userName,$email,$avatar){
    $sql = "update `tbl_user` set `userName`=?,`email`=?,`avatar`=? where `uid`=?";
    $params=array($userName,$email,$avatar,$uid);
    return execUpdate($sql,$params);
}

//根据uid修改用户密码
function updatePasswordByUid($uid,$password){
    $sql = "update `tbl_user` set `password`=? where `uid`=?";
    $params=array($password,$uid);
    return execUpdate($sql,$params);
}

//找到所有用户
function findAllUser(){
    $sql = "select `uid`,`userName`,
        case
        when gender=0 then '女' 
        when gender=1 then '男' end as `gender`,`password`,`email`,`avatar`,`regtime`,
        case 
        when power=0 then '普通用户' 
        when power=1 then '系统管理员' end as `power` from `tbl_user` ;
        ";
    $params=array();
    return execQuery($sql,$params);
}

//查找用户收藏的所有视频
function findUserFavourite($uid){
    $sql = "select * from tbl_video,tbl_video_desc where tbl_video.vid=tbl_video_desc.vid and tbl_video.vid in (select vid from tbl_user_favourite where uid = ?)";
    $params=array($uid);
    return execQuery($sql,$params);
}

