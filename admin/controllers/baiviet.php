<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllBlog = showAllBlog(10);
            include_once "views/baivietindex.php";
        break;
        case 'add':
            $showdmsp = showAllDmBaiViet();
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];                
                $showspedit = motbaiviet($_SESSION['idedit']);
                include_once "views/baivietedit.php";
            }else{
                include_once "views/baivietadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $iddm = $_POST['iddanhmuc'];
                $allFile = $_FILES['avatar'];
                //upload nhiều ảnh
                $imgupload = checkUpLoadMany($allFile);
                $name = stripTags($_POST['title']);
                $slug = convert_name($name);
                $noidung = $_POST['content'];
                $tacgia = stripTags($_SESSION['suser']);
                $tag = stripTags($_POST['tag']);
                $mota = stripTags($_POST['mota']);
                $date = date("Y-m-d H:i:s");
                if(isset($_POST['is_public'])&&($_POST['is_public'])){
                    $public = 1;
                }else{
                    $public = 0;
                }             
                $allFile = stripTags($allFile);
                $public = settype($public,"int");
                if(isset($_POST['sua'])&&($_POST['sua'])){
                    $id = $_SESSION['idedit'];
                    updateBlog($id,$name,$slug,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public);
                    unset($_SESSION['idedit']);
                }
                if(isset($_POST['them'])&&($_POST['them'])){
                    addBlog($name,$slug,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public);
                }
                header("location: index.php?ctrl=baiviet&act=index");
            } 
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaBlog($id);
                header("location: index.php?ctrl=baiviet&act=index");
            }
        include_once "views/baivietindex.php";
        break;
            default:
                break;
    }
?>