<?php

function showAllDm(){
    $sql = "select * from danhmuc order by id desc";
    return result1(0,$sql);
}
function showDmCoffee(){
    $sql = "select * from danhmuc where loai = 0 order by id desc";
    return result1(0,$sql);
}
function showDmMayCoffee(){
    $sql = "select * from danhmuc where loai = 1 order by id desc";
    return result1(0,$sql);
}
?>