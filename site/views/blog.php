    <!-- subheader -->
    <section id="subheader"  class="subheaderabout" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-shadow: 1px 1px 1px black">
                        <h1 style="font-family: 'Roboto', sans-serif;">Blog Cà Phê</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="blog-list">
                            <?php foreach ($ds as $motblog) {
                                $id = $motblog['id'];
                                $img = $pathimg.$motblog['img'];
                                if(is_file($img)){
                                    $img= $img;
                                }else{
                                    $img = $pathimg."logo-2.png";
                                }
                                $slug = $motblog['slug'];
                                $date = $motblog['date'];
                                $date = explode(" ",$date);
                                $date =  explode("-",$date[0]);
                                $time = explode(":",$date[1]);
                                $time = $time[0];
                                $linksp = ROOT_URL."/bai-viet/".$slug.'-'.$id.'.html';
                                ?>

                            <li>
                                <div class="post-content">
                                    <div class="post-image">
                                        <a href="<?=$linksp?>"><img src="<?=$img?>" alt="" /></a>
                                    </div>


                                    <div class="date-box">
                                        <div class="day"><?=$date[2]?></div>
                                        <div class="month">Th<?=$time?></div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="<?=$linksp?>"><?=$motblog['name']?></a></h3>
                                        <p><?=$motblog['mota']?></p>
                                    </div>

                                    <a href="<?=$linksp?>" class="btn-more">Tìm Hiểu Thêm</a>
                                </div>
                            </li>
                        <?php }?>


                        </ul>

                        <div class="text-center">
                            <ul class="pagination">
                                <?=$link?>
                            </ul>
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

                        <div class="widget widget-text">
                            <h4>Về Chúng Tôi</h4>
                            <div class="small-border"></div>
                                Cập những những thông tin về Cà Phê mới nhất ở Việt Nam và trên toàn thế giới. Những tin tức về rang xay cà phê, cà phê nhân hoặc máy pha chế cà phê.     
                        </div>

                    </div>
                </div>
            </div>
        </div>
