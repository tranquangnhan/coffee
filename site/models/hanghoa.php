<?php
    function showspDm($iddm){
        $sql= "select * from sanpham where iddm = '{$iddm}' order by id desc";
        return result1(0,$sql);
    }
    function showSpMoi(){
        $sql= "select * from sanpham where noibat = 1 and anhien = 1 order by id desc limit 6";
        return result1(0,$sql);
    }
    function showSpLuotXem(){
        $sql= "select * from sanpham where anhien = 1 order by luotxem desc limit 6";
        return result1(0,$sql);
    }
    function showSingleProduct($id){
        $sql = "select * from sanpham where 1";
        if($id >0) $sql .= " AND id=".$id;  
        return result1(1,$sql);
    }
    function showDonViTien($id){
        $sql = "SELECT loai
        FROM danhmuc
        INNER JOIN sanpham
        ON danhmuc.id = sanpham.iddm";
       return result1(1,$sql)['loai'];
    }
?>  