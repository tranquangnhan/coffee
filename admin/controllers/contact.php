<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllContact = showAllContact();
            require_once "views/contactindex.php";
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])){
                $id = $_GET['iddel'];
                xoaContact($id);
                header("location: index.php?ctrl=contact&act=index");
            }
            $showAllContact = showAllContact();
            require_once "views/contactindex.php";
        break;
            default:
                break;
    }
?>