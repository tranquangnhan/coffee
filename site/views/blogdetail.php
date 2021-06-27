<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<?php
if(!is_array($motbaiviet)){
    echo 'Bài viết này không có';
}
else{
    $id = $motbaiviet['id'];
    $name = $motbaiviet['name'];
    $img = $pathimgsite. $motbaiviet['img'];
    $noidung = $motbaiviet['noidung'];
    if(is_file($img)){
        $img = $img;
    }else{
        $img ='nothing..';
	}
?>
 <!-- subheader -->
 <section id="subheader" data-speed="8" data-type="background"  class="subheaderabout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-shadow: 1px 1px 1px black">
                        <h1 style="font-family: 'Roboto', sans-serif;"><?= $name?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="section-custom3">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="post-content" style="background-size: cover; color:white">
                           <h2><?=$name?></h2>
                           <p><?=$noidung?></p>
                        </div>
                    </div>

                    <div id="sidebar" class="col-md-3">
                        <div class="widget widget-post">
                            <h4>Xem Nhiều Nhất</h4>
                            <div class="small-border"></div>
                            <ul>
                                <?php foreach ($showBlogLuotXem as $motblog) {
                                    $id = $motblog['id'];
                                    $slug = $motblog['slug'];
                                    $linksp = ROOT_URL."/bai-viet/".$slug.'-'.$id.'.html';
                                ?>
                                <li><span class="post-date">22 Tg2</span><a href="<?=$linksp?>"><?=$motblog['name']?></a></li>
                                <?php  }?>
                            </ul>
                        </div>

                        <div class="widget widget-text" style="color:white">
                            <h4>Về Chúng Tôi</h4>
                            <div class="small-border"></div>
                            Cập những những thông tin về Cà Phê mới nhất ở Việt Nam và trên toàn thế giới. Những tin tức
                            về rang xay cà phê, cà phê nhân hoặc máy pha chế cà phê.
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <?php }?>