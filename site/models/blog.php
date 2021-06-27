<?php
    function showAllBlog($limit){
        $sql = "select * from baiviet where public=1 order by id desc limit {$limit}";
        return result1(0,$sql);
    }
    function showAllBlog2($limit){
        $sql = "select * from baiviet where public=1 order by id asc limit {$limit}";
        return result1(0,$sql);
    }
    function showBlogLuotXem(){
        $sql= "select * from baiviet where public = 1 order by luotxem desc limit 4";
        return result1(0,$sql);
    }
    // phân trang
    function getHangHoaTheoLoai($pagenum,$pagesize){
        $startrow= ($pagenum - 1) *$pagesize;
        $sql = "SELECT * FROM baiviet WHERE 1"
                ." ORDER BY id DESC LIMIT $startrow, $pagesize";
        return result1(0,$sql);
    }
    function demHangHoaTheoLoai(){
        $sql = "select count(*) as sodong from baiviet where 1";
        return result1(1,$sql)['sodong'];
    }
    function taolinks($baseurl,$pagenum,$pagesize,$totalrows){
        if($totalrows<=0) return "";
        $totalpage = ceil($totalrows/$pagesize);
        if($totalpage<=1) return "";
        $links = "";
        if ($pagenum>=0){
            $links.="<li><a href='{$baseurl}.html'><<</a></li>"; 
            $pr = $pagenum-1;
            $links.="<li><a href='{$baseurl}/page-{$pr}.html'> <</a></li>";
        }
        $links.= "<li class='active'><a href='#'>{$pagenum}</a></li>";
        if ($pagenum<$totalpage){
            $pn = $pagenum + 1;
            $links.="<li><a href='{$baseurl}/page-{$pn}.html'> ></a></li>";        
            $links.="<li><a href='{$baseurl}/page-{$totalpage}.html'>>></a></li>";
          }
        return $links;
    }
    //end  phân trang
    function motbaiviet($id){
        $sql = "select * from baiviet where public=1 and id=".$id;
        return result1(1,$sql);
    }
?>