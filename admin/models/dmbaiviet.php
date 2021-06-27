<?php
    function showAllDmBV(){
        $sql = "select * from dmbaiviet where 1 order by id desc ";
        return result1(0,$sql);
    }
    function xoaDanhMucBv($id){
        $sql = "DELETE FROM dmbaiviet WHERE id=".$id;
        exec1($sql);
    }
    function addCategoriesBv($name,$loai,$anhien){
        $sql = "INSERT INTO dmbaiviet(name,loai,anhien) values('{$name}','{$loai}','{$anhien}')";
        exec1($sql);
        echo $sql;
    }
    function updateCategoriesBv($id,$name,$loai,$anhien){
        $sql = "UPDATE dmbaiviet SET name='{$name}',loai='{$loai}',anhien='{$anhien}' WHERE id='{$id}'";
        execute1($sql);
    }
    function showDmEditBv($id){
        $sql = "select * from dmbaiviet where id= {$id}";
        return result1(1,$sql);
    }
?>