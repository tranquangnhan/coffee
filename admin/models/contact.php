<?php
function showAllContact(){
    $sql = "select * from contact order by id desc";
    return result1(0,$sql);
}
function xoaContact($id){
    $sql = "DELETE FROM contact WHERE id=".$id;
    exec1($sql);
}
function showAllDonHang(){
    $sql = "select count(*) as donhang from contact";
    return result1(1,$sql);
}
?>