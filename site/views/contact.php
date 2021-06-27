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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.278159243381!2d106.69737501480022!3d10.713015492364578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefcee9db3eee2a60!2zQ8O0bmcgVHkgVG5oaCBDw6AgUGjDqiBCdcO0biBI4buT!5e0!3m2!1svi!2s!4v1609905954858!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                                    23/2 Đào Sư Tích, Xã Phước Kiển, Huyện Nhà Bè, TP. Hồ Chí Minh
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_phone fontsize48 id-color mb30"></i>
                                                    <h3>Phone</h3>
                                                    (+84) 03.6862.1899
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_mail_alt fontsize48 id-color mb30"></i>
                                                    <h3>Email</h3>
                                                    <a href="mailto:caphechuan99@gmail.com">caphechuan99@gmail.com</a>
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
