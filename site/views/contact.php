  <!-- subheader -->
  <section id="subheader" data-speed="8" data-type="background"  class="subheaderabout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-shadow: 1px 1px 1px black">
                        <h1 style="font-family: 'Roboto', sans-serif;">Liên Hệ</h1>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section class="no-top no-bottom relative overflow-hidden">

                <div  class="map-container-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.555106260367!2d106.64861071428749!3d10.84531876088509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529983bf24ac5%3A0x64560471b489ad9f!2zNDIsIDI2IMSQxrDhu51uZyBz4buRIDMsIFBoxrDhu51uZyA5LCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1626489198910!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="color-overlay">



                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="de_tab tab_style_2">
                                    <ul class="de_nav">
                                        <li class="active"><span>Để Lại Lời Nhắn</span></li>
                                        <li><span>Liên Hệ Với Chúng Tôi</span></li>
                                        <li class="cust-map-toggle"><span>Xem Bản Đồ</span></li>
                                    </ul>

                                    <div class="de_tab_content">
                                        <div id="tab1">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <form name="reservationForm" id='contact_form' method="post" action=''>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id='name_error' class='error'>Please enter your name.</div>
                                                                <div>
                                                                    <?php if(isset($_SESSION['thongbao'])) echo $_SESSION['thongbao'];unset($_SESSION['thongbao']); ?>
                                                                </div>
                                                                <div>
                                                                    <input type='text' name='name' id='name' class="form-control" placeholder="Tên Của Bạn">
                                                                </div>

                                                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                                                <div>
                                                                    <input type='email' name='email' id='email' class="form-control" placeholder="Email Của Bạn">
                                                                </div>

                                                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                                                <div>
                                                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Số Điện Thoại Của Bạn">
                                                                </div>

                                                                <div id='message_error' class='error'>Please enter your message.</div>
                                                                <div>
                                                                    <textarea name='message' id='message' class="form-control" placeholder="Lời Nhắn"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <div id='submit'>
                                                                    <input type='submit' id='send_message' name="send_message" value='Gửi Lời Nhắn' class="btn-solid rounded">
                                                                </div>
                                                              
                                                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>

                                        <div id="tab2">

                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="icon_pin_alt fontsize48 id-color mb30"></i>
                                                    <h3>Địa Chỉ</h3>
                                                    42/26, Đường 3, Phường 9, Gò Vấp, TP. Hồ Chí Minh
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_phone fontsize48 id-color mb30"></i>
                                                    <h3>Phone</h3>
                                                    (+84) 0924.698.776
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_mail_alt fontsize48 id-color mb30"></i>
                                                    <h3>Email</h3>
                                                    <a href="mailto:caphechay@gmail.com">caphechay@gmail.com</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
