<?php
define('HOST_DB','localhost');
define('NAME_DB','coffee');
define('USER_DB','root');
define('PASS_DB','');
define('ROOT_URL','/coffee');
define('ADMIN_URL',ROOT_URL.'/admin');
define('SITE_URL',ROOT_URL.'/site/');
define('SYSTEM_PATH',ROOT_URL.'/system');
define('PAGE_SIZE',3);

function connect(){
    try {

        $ConnectionOption = array
            (
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
            );

        $conn = new PDO ('mysql:host='.HOST_DB.';dbname=' . NAME_DB . ';charset=utf8', USER_DB, PASS_DB, $ConnectionOption);

        //$conn = new PDO("mysql:host=".HOST_DB.";dbname=".NAME_DB.";charset=utf8;",USER_DB, PASS_DB, $ConnectionOption);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
      echo "Lỗi Kết Nối database: " . $e->getMessage();
    }
}




function result1($fe,$sql){ // 0 là show tất cả
    $conn = connect();  // 1 là show 1
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch();
}
function exec1($sql){//thêm, xoá ....
    $conn = connect();
    $result = $conn->exec($sql);
    return $result;
}
function execute1($sql){ //update
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} 
?>