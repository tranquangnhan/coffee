<?php
include_once '../../global.php';
// show tên danh mục bài viết
function showAllDmBaiViet(){
    $sql = "select * from dmbaiviet where 1";
    return result1(0,$sql);
}
function showAllBlog($limit){
    $sql = "select * from baiviet order by id desc limit {$limit}";
    return result1(0,$sql);
}
function showTenDmBlog($iddm){
    $sql = "select * from dmbaiviet where id = ".$iddm;
    $res = result1(1,$sql);
    return $res;
}
function showBlogById($id){
    $sql = "select * from baiviet where iddm = {$id}";
    return result1(0,$sql);
}
function motbaiviet($id){
    $sql = "select * from baiviet where 1";
    if($id >0) $sql .= " AND id=".$id;  
    return result1(1,$sql);
}
function addBlog($name,$slug,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public){
    $name = addslashes($name);
    $mota = addslashes($mota);
    $sql = "INSERT INTO baiviet (name,slug,img,iddm,date,noidung,tacgia,tag,mota,public) VALUES ('{$name}','{$slug}', '{$imgupload}', '{$iddm}','{$date}','{$noidung}','{$tacgia}','{$tag}','{$mota}','{$public}')";
    exec1($sql);
}
//addblog
//delete blog
function xoaBlog($id){
    $sql = "DELETE FROM baiviet WHERE id=".$id;
    exec1($sql);
}
// update blog
function updateBlog($id,$name,$slug,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public){
    $name = addslashes($name);
    $mota = addslashes($mota);
    $tag = addslashes($tag);
    if(!$imgupload){
        $sql = "UPDATE baiviet SET name='{$name}',slug='{$slug}', iddm = '{$iddm}', date= '{$date}',noidung='{$noidung}',tacgia='{$tacgia}',tag='{$tag}', mota = '{$mota}', public ='{$public}'  WHERE id=".$id;
    }else{
        $sql = "UPDATE baiviet SET name='{$name}',slug='{$slug}', img = '{$imgupload}', iddm = '{$iddm}', date= '{$date}',noidung='{$noidung}',tacgia='{$tacgia}',tag='{$tag}', mota = '{$mota}', public ='{$public}'  WHERE id=".$id;
    }
    execute1($sql);
}
function showAllCountBlog(){
    $sql = "select count(*) as baiviet from baiviet";
    return result1(1,$sql);
}
?>