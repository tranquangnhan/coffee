<?php
if(!is_array($single)){
    echo 'Sản phẩm này không có';
}
else{
    $id = $single['id'];
    $name = $single['name'];
    $gia = forMatTien($single['gia']);
    $giaban = forMatTien($single['gia']);
	$iddm = $single['iddm'];
	$giamgia = $single['giamgia'];
    $mota = $single['mota'];
    $img = $pathimgsite. $single['img'];
    if(is_file($img)){
        $img = $img;
    }else{
        $img ='nothing..';
	}
	$donvitien = showDonViTien($id);
	if($donvitien == 0){
		$donvitien = "Đ/KG";
	}else{
		$donvitien = "TR";
	}
?>
    <!-- subheader -->
	<section id="subheader"  class="subheaderabout" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-shadow: 1px 1px 1px black">
                        <h1><?=$name?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="post-menu-view">
                        <div class="col-md-6">
                            <img src="<?=$img?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6 ">
                            <div class="price"><?=$giaban?> <?=$donvitien?></div>
                            
                            <div class="spacer-single"></div>
                           <?=$mota?>
                          
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="price mt-3 btnbuy" style="background:red"><a href="tel:0924698776">Đặt Ngay</a></div>
                        </div>
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>CÓ THỂ BẠN THÍCH<span class="small-border center"></span></h2>
                    </div>
					<?php foreach ($showSpLuotXem as $motsp) {
                    $id = $motsp['id'];
                    $img = $pathimg.$motsp['img'];
                    if(is_file($img)){
                        $img = $img;
                    }else{
                        $img = $pathimg.'logo-2.png';
                    }
                    $slug = $motsp['slug'];
                    $linksp = ROOT_URL."/".$slug.'-'.$id.'.html';
					$giaban = forMatTien($motsp['gia']);
                    $mota = substr(stripTags($motsp['mota']),0,100)."..";
                    ?>
                    
                <div class="col-sm-6 col-md-2 mb30 wow fadeInLeft animated" data-wow-delay=".3s" style="background-size: cover;">
                    <div class="post-menu s1" style="background-size: cover;">
                        <a href="<?=$linksp?>"><img src="<?=$img?>" class="img-responsive" alt=""></a>
                        <div class="sub-item-service meta" style="background-size: cover;">
                            <div class="c1" style="background-size: cover;"><a href="<?=$linksp?>"><?=$motsp['name']?></a> </div>
                            <div class="c3" style="background-size: cover;"><?=$giaban?> Đ/KG</div>
                        </div>
                        <div class="service-text meta-content" style="background-size: cover; text-shadow: 2px 2px black;"><?=$mota?></div>
                    </div>
                </div>
            <?php }?>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

<?php }?>