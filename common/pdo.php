<?php
//建立与 MySQL 数据库的连接
function getConnect(){
    //数据库默认连接信息
    $config = array(
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'dbname' => 'jikeevideo',
        'port' => 3306
    );
    try{
        $dsn="mysql:host=".$config['host'].";dbname=".$config['dbname'];
        $link=new PDO($dsn,$config['user'],$config['password']);
        //禁用prepared statements的仿真效果
        //防止sql注入
        $link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $link->query("set names ".$config['charset']);
    }catch(PDOException $ex){
        die('数据库连接失败!') . $ex->getMessage();
    }
    return $link;
}

//执行查询操作
function execQuery($strQuery,$params){
    $link=getConnect();
    $stmt=$link->prepare($strQuery);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//执行增、删、改操作
function execUpdate($strUpdate,$params){
    $link= getConnect();
    $stmt=$link->prepare($strUpdate);
    return $stmt->execute($params);
}
