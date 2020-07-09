<?php
require_once 'pdo.php';
//获取所有视频
function findAllVideos(){
    $sql = "select distinct * from tbl_video,tbl_video_desc where tbl_video.vid = tbl_video_desc.vid;";
    $params=array();
    return execQuery($sql,$params);
}

//获取时下流行视频,默认获取6条
function findHotVideos(){
    $sql = "select distinct * from tbl_video,tbl_video_desc where tbl_video.vid = tbl_video_desc.vid order by likeCount desc limit 6;";
    $params=array();
    return execQuery($sql,$params);
}

//获取时下流行视频,默认获取全部
function findAllHotVideos(){
    $sql = "select distinct * from tbl_video,tbl_video_desc where tbl_video.vid = tbl_video_desc.vid order by likeCount desc;";
    $params=array();
    return execQuery($sql,$params);
}

//获取最新上线视频,默认获取6条
function findLatestVideos(){
    $sql = "select distinct * from tbl_video,tbl_video_desc where tbl_video.vid = tbl_video_desc.vid order by tbl_video.videoTime desc limit 6;";
    $params=array();
    return execQuery($sql,$params);
}

//获取最新上线视频,默认获取6条
function findAllLatestVideos(){
    $sql = "select distinct * from tbl_video,tbl_video_desc where tbl_video.vid = tbl_video_desc.vid order by tbl_video.videoTime desc;";
    $params=array();
    return execQuery($sql,$params);
}

//根据vid来获取视频信息
function findVideoByViD($vid){
    $sql = "select distinct * from tbl_video,tbl_video_desc where (tbl_video.vid = ? and tbl_video.vid = tbl_video_desc.vid);";
    $params=array($vid);
    $rs = execQuery($sql,$params);
    if(count($rs)>0){
        return $rs[0];
    }
    return $rs;
}

//获取电影区的视频信息
function findVideoInMovie(){
    $sql = "select distinct * from tbl_video,tbl_video_desc,tbl_video_movie where (tbl_video.vid = tbl_video_desc.vid and tbl_video.vid = tbl_video_movie.vid) order by tbl_video.videoTime desc;";
    $params=array();
    return execQuery($sql,$params);
}

//获取剧集区的视频信息
function findVideoInSerial(){
    $sql = "select distinct * from tbl_video,tbl_video_desc,tbl_video_serial where (tbl_video.vid = tbl_video_desc.vid and tbl_video.vid = tbl_video_serial.vid) order by tbl_video.videoTime desc;";
    $params=array();
    return execQuery($sql,$params);
}

//获取学习区的视频信息
function findVideoInLearn(){
    $sql = "select distinct * from tbl_video,tbl_video_desc,tbl_video_learn where (tbl_video.vid = tbl_video_desc.vid and tbl_video.vid = tbl_video_learn.vid) order by tbl_video.videoTime desc;";
    $params=array();
    return execQuery($sql,$params);
}

//获取电影区的视频信息
function findVideoInOther(){
    $sql = "select distinct * from tbl_video,tbl_video_desc,tbl_video_other where (tbl_video.vid = tbl_video_desc.vid and tbl_video.vid = tbl_video_other.vid) order by tbl_video.videoTime desc;";
    $params=array();
    return execQuery($sql,$params);
}

//按照标题搜索相关视频
function findVideoByKey($key){
    $sql = "select distinct * from tbl_video,tbl_video_desc where (tbl_video.vid = tbl_video_desc.vid and tbl_video.videoName like ?) order by tbl_video.videoTime desc;";
    $key = '%'.$key.'%';
    $params=array($key);
    return execQuery($sql,$params);
}

//添加新的视频
function addVideo($videoName,$videoUrl){
    $sql = "insert into tbl_video (`videoName`,`videoUrl`) values (?,?);";
    $params=array($videoName,$videoUrl);
    return execUpdate($sql,$params);
}

//按照视频标题寻找vid
function findVidByName($videoName){
    $sql = "select distinct * from tbl_video where videoName = ? order by tbl_video.videoTime desc;";
    $params=array($videoName);
    $rs = execQuery($sql,$params);
    if(count($rs)>0){
        return $rs[0]['vid'];
    }
    return $rs;
}

//添加视频描述
function addVideoDesc($vid,$coverUrl,$videoDesc){
    $sql = "insert into tbl_video_desc (`coverUrl`,`videoDesc`) values (?,?) where vid = ?;";
    $params=array($coverUrl,$videoDesc,$vid);
    return execUpdate($sql,$params);
}

//修改视频描述内容
function updateVideoDesc($vid,$videoDesc){
    $sql = "update `tbl_video_desc` set videoDesc = ? where vid=?;";
    $params=array($videoDesc,$vid);
    return execUpdate($sql,$params);
}

//修改视频描述内容
function updateVideoName($vid,$videoName){
    $sql = "update `tbl_video` set videoName = ? where vid=?;";
    $params=array($videoName,$vid);
    return execUpdate($sql,$params);
}

//为视频添加分区信息
function addVideoArea($vid,$area){
    $sql = "insert into tbl_video_" .$area." (`vid`) values (?);";
    $params=array($vid);
    return execUpdate($sql,$params);
}

//更新点赞信息
function updateLikeCount($vid,$likeCount){
    $sql = "update tbl_video_desc set likeCount = ? where vid = ?;";
    $params=array($likeCount,$vid);
    return execUpdate($sql,$params);
}

//判断视频是否被用户收藏
function judgeFavourite($vid,$uid){
    $sql = "select * from tbl_user_favourite where (vid = ? and uid = ?);";
    $params=array($vid,$uid);
    return execQuery($sql,$params);
}

//为用户添加收藏视频
function addFavourite($vid,$uid){
    $sql = "insert into tbl_user_favourite (`uid`,`vid`) values (?,?);";
    $params=array($uid,$vid);
    return execUpdate($sql,$params);
}

//为用户取消收藏视频
function deleteFavourite($vid,$uid){
    $sql = "delete from tbl_user_favourite where (`uid`=? and `vid`=?);";
    $params=array($uid,$vid);
    return execUpdate($sql,$params);
}


//根据vid来删除视频
function deleteVideoByVid($vid){
    $flag = true;
    $tables = ['video','comment','video_desc','video_learn','video_movie','video_other','video_serial'];
    foreach($tables as $item){
       if(!deleteVideoByVidTool($vid,$item)){
           $flag = false;
       }
    }
    return $flag;
}

function deleteVideoByVidTool($vid,$item){
    $sql = "delete from tbl_".$item." where vid = ?;";
    $params=array($vid);
    return execUpdate($sql,$params);
}