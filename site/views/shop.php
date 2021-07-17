  <!-- subheader -->
  <section id="subheader" data-speed="8"  class="subheaderabout" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-shadow: 1px 1px 1px black">
                        <h1 style="font-family: 'Roboto', sans-serif;">Sản Phẩm</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->
<div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <section id="sub-menu-3" class="side-bg" data-bgcolor="#18181d">
                <div class="col-md-4 image-container wow fadeInLeft">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">

                            <div class="text-center">
                                <h2>Dịch Vụ Rang Xay<span class="teaser"></span><span class="small-border center"></span></h2>
                            </div>

                            <p>

Cà Phê Chạy là công ty chuyên cung cấp cà phê bột rang xay tại gia.<br>

Ngoài ra chúng tôi còn cung cấp các máy pha cà phê, cà phê của chúng tôi có đa dạng loại: Robusta, Abrabica, Culi, Cherry, … từ nhiều vùng nông trại nổi tiếng của Việt Nam (Buôn Hồ, ĐakLak, ĐakNông, Gia Lai, Xuân Trường, Trạm Hành, Cầu Đất, Lâm Đồng, Sơn La, Khe Sanh, …) trong nước. <br>

Kinh nghiệm rang gia công sản xuất cà phê của chúng tôi lên đến 10 năm, đảm bảo mang đến chất lượng cùng sự tiện lợi và hài lòng cho quý khách.<br>

Hiện nay nhu cầu cà phê chất lượng cao đang tăng mạnh và xu hướng đổi mới trong sản phẩm. Bạn không nên bỏ lỡ cơ hội đầu tư cho chính mình ngay hôm nay. Đừng ngần ngại hãy liên hệ với chúng tôi để được tư vấn và tìm hiểu quy trình rang gia công cà phê ngay bây giờ. 

</p>
        

                        </div>


                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="sub-menu-2" class="side-bg" data-bgcolor="#111111">
                <div class="col-md-4 col-md-offset-9 image-container pull-right wow fadeInRight">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="text-center">
                                <h2>Máy Pha Cà Phê<span class="teaser"></span><span class="small-border center"></span></h2>
                            </div>


                            <div class="de_tab tab_style_1">
                                <ul class="de_nav">
								<?php for ($i=0; $i < count($showDmMayCoffee); $i++) {?>
										<?php if($i == 0) {?>
										<li class="active" data-link="#section-services-tab"><span><?=$showDmMayCoffee[$i][1]?></span><div class="v-border"></div>
										</li>
										<?php }else{ ?>
										<li data-link="#section-services-tab"><span><?=$showDmMayCoffee[$i][1]?></span><div class="v-border"></div>
										</li>
										<?php }?>
									<?php 	} ?>
                                </ul>
        
								<div class="de_tab_content wow fadeInUp">
                                    
										<?php 
											$tab = 1;
										for ($i=0; $i < count($showDmMayCoffee); $i++) {?>
											<div id="tab<?=$tab++?>" class="tab_single_content">
                                                <div class="row flex-tl">
													<?php foreach (showspDm($showDmMayCoffee[$i][0]) as $motsp) {
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
                                                        $mota = substr($motsp['mota'],0,100)."..";
                                                        ?>
													
														<div class="col-md-6 mb30">
															<div class="post-menu">
																<a href="<?=$linksp?>"><img src="<?=$img?>" class="img-responsive" alt=""></a>
																<div class="sub-item-service meta">
																	<div class="c1"><a href="<?=$linksp?>"><?=$motsp['name']?></a></div>
																	<div class="c2"></div>
																	<div class="c3"><?=$giaban?> Đ/KG</div>
																</div>
																<div class="service-text meta-content"><?=$mota?></div>
															</div>
														</div>			
														<div class="clearfix"></div>										
													<?php }?>
                                                </div>
											</div>
										<?php 	} ?>
                                       
									</div>
        
                            </div>

                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->

            <!-- section close -->
            <section id="sub-menu-1" class="side-bg" data-bgcolor="#18181d">
                <div class="col-md-4 image-container wow fadeInLeft">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">

                            <div class="text-center">
                                <h2>Cà Phê BỘT<span class="teaser"></span><span class="small-border center"></span></h2>
                            </div>

                            <div class="de_tab tab_style_1">
								<ul class="de_nav">
									<?php for ($i=0; $i < count($showDmCoffee); $i++) {?>
										<?php if($i == 0) {?>
										<li class="active" data-link="#section-services-tab"><span><?=$showDmCoffee[$i][1]?></span><div class="v-border"></div>
										</li>
										<?php }else{ ?>
										<li data-link="#section-services-tab"><span><?=$showDmCoffee[$i][1]?></span><div class="v-border"></div>
										</li>
										<?php }?>
									<?php 	} ?>
								</ul>
									<div class="de_tab_content wow fadeInUp">
                                   
										<?php 
											$tab = 1;
										for ($i=0; $i < count($showDmCoffee); $i++) {?>
											<div id="tab<?=$tab++?>" class="tab_single_content">
                                                <div class="row flex-tl">										
													<?php foreach (showspDm($showDmCoffee[$i][0]) as $motsp) {
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
												
													<div class="col-md-6 mb30">
														<div class="post-menu">
															<a href="<?=$linksp?>"><img src="<?=$img?>" class="img-responsive" alt=""></a>
															<div class="sub-item-service meta">
																<div class="c1"><a href="<?=$linksp?>"><?=$motsp['name']?></a></div>
																<div class="c2"></div>
																<div class="c3"><?=$giaban?> Đ/KG</div>
															</div>
															<div class="service-text meta-content"><?=$mota?></div>
														</div>
													</div>			
													<div class="clearfix"></div>
												<?php }?>
                                                </div>
											</div>
										<?php 	} ?>
                                     
									</div>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->
            <!-- section begin -->
            <!--
                <section class="call-to-action bg-color dark pt40 pb40" data-speed="5" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="mt10">Bạn có thắc mắc? Hãy để lại cho chúng tôi lời nhắn!!</h3>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="contact.html" class="btn btn-slider rounded">Liên Hệ</a>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- section close -->


        </div>