<?php
session_start();
ob_start();
require_once "../system/config.php";
require_once "../system/database.php";
require_once "models/hanghoa.php";
require_once "models/loaihang.php";
require_once "models/user.php";
require_once "models/blog.php";
require_once "models/contact.php";
require_once "../global.php";
include_once '../lib/myfunctions.php';

$showSpMoi = showSpMoi();
$showAllDm = showAllDm();
$showAllBlog = showAllBlog(3);

require_once "views/layouts/header.php";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            require_once "views/home.php";
            break;
        case 'singleproduct':  
            $showSpLuotXem = showSpLuotXem();
            if(isset($_GET['id'])&&$_GET['id']>0){
                $id = $_GET['id'];
                settype($id,"int");
                $single = showSingleProduct($_GET['id']);
            }
            require_once 'views/singleproduct.php';
            break;
        case 'cat':
            $showDmCoffee =  showDmCoffee();       
            $showDmMayCoffee = showDmMayCoffee();

            require_once 'views/shop.php';
            break;
        case 'about': 
            require_once "views/about.php";
        break;
        case 'blog': 
            $showBlogLuotXem = showBlogLuotXem();
            $pagenum=1;
            if(isset($_GET['pagenum'])==true) $pagenum = $_GET['pagenum'];

            settype($maloai,"int");
            settype($pagenum,"int");
            if($pagenum<=0) $pagenum = 1;
            $pagesize = PAGE_SIZE;
            $ds = getHangHoaTheoLoai($pagenum,$pagesize);
            $totalrows = demHangHoaTheoLoai();
            $baseurl = ROOT_URL."/bai-viet";
            $link = taolinks($baseurl,$pagenum,$pagesize,$totalrows);
            require_once "views/blog.php";
        break;
        case 'blogpost': 
            $showBlogLuotXem = showBlogLuotXem();
            if(isset($_GET['id'])&&($_GET['id'])>0){
                $id = $_GET['id'];
                $motbaiviet = motbaiviet($id);
            }
            require_once "views/blogdetail.php";
            break;
        case 'contact':   
            if(isset($_POST['send_message'])&&($_POST['send_message'])){
                $name = trim(stripTags(test_input($_POST['name'])));
                $email= trim(stripTags(test_input($_POST['email'])));
                $phone = trim(stripTags(test_input($_POST['phone'])));
                $message = trim(stripTags(test_input($_POST['message'])));
                $date = date("Y-m-d H:i:s");
                $thongbao = "";
                $thanhcong = FALSE;
                if($name == "") {
                    $thongbao = "Tên Chưa Nhập"; $thanhcong = FALSE;
                }
                elseif((strlen($name))<=2){
                    $thongbao ="Tên Quá Ngắn"; $thanhcong = FALSE;
                }
                elseif($email == "") {
                    $thongbao = "Email Chưa Nhập"; $thanhcong = FALSE;
                }
                elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $thongbao = "$email Nhập Không Hợp Lệ!"; $thanhcong = FALSE;
                }
                elseif($phone == ""){
                    $thongbao ="Điện Thoại Chưa Nhập"; $thanhcong = FALSE;
                }
                elseif($message== ""){
                    $thongbao ="Nội Dung Chưa Nhập"; $thanhcong = FALSE;
                }
                else{
                    $thanhcong = TRUE;
                    addContact($name,$email,$phone,$message,$date);
                    // end mail
                    $_SESSION['thongbao'] = "Nội dung liên hệ đã được gửi thành công! ";
                }
                if($thanhcong == FALSE){
                    $_SESSION['thongbao'] = $thongbao;
                }
            }
            require_once "views/contact.php";
            break;
        case 'thongbao':
            if(isset($_SESSION['thongbao'])){
                $thongbao = $_SESSION['thongbao'];
                unset($_SESSION['thongbao']);
            }else{
                $thongbao = "Không có gì để thông báo";
            }
            require_once "views/thongbao.php";
            break;
        default:
            require_once "views/home.php";
            break;
    }

}else{
    require_once "views/home.php";
}
require_once "views/layouts/footer.php";
?>