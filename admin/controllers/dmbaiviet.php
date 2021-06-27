<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllDm = showAllDmBV();
            include_once "views/dmbaivietindex.php";
        break;
        case 'add':
            if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showDmedit = showDmEditBv($_SESSION['idedit']);
                include_once "views/dmbaivietedit.php";
            }else{
                include_once "views/dmbaivietadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $id = $_SESSION['idedit'];
                $name = stripTags($_POST['name']);
                $loai = $_POST['loai'];
                $anhien = $_POST['anhien'];
                settype($loai,"int");
                settype($anhien,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateCategoriesBv($id,$name,$loai,$anhien);
                }else{
                    addCategoriesBv($name,$loai,$anhien);
                }
                header("location: index.php?ctrl=dmbaiviet&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaDanhMucBv($id);
            }
            $showAllDm = showAllDmBV();
        include_once "views/dmbaivietindex.php";
        break;
            default:
                break;
    }
?>