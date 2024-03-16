<style>
.new_footer_area {
    background: #ffffff;
}


.new_footer_top {
    padding: 50px 0px 100px;
    position: relative;
      overflow-x: hidden;
}

.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 100;
    line-height: 28px;
    color: #6a7695;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #0089A3;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 45px;
    color: #858da8;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.new_footer_top .f_social_icon a:hover {
    background: #0089A3;
    border-color: #0089A3;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #263b5e;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}
h1, h2, h3, h4, h5, h6 {
    color: #4b505e;
}
.new_footer_top .f_widget.about-widget .f_list li a {
    color: #6a7695;
}

</style>
<footer class="new_footer_area bg_color">
<hr style="border-top: 2px solid #e2e2eb; margin-top: 50px;">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="logo">
                            <img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="logo"
                                style="width: 180px; height: auto;">
                        </div>
                        <p style="font-size: 16px;" class="mt-3">Warabiz adalah platform yang menyediakan layanan lengkap untuk memfasilitasi transaksi jual beli waralaba secara online.</p>
                        <p  class="mt-3">© 2024 PT.Warabisnis All rights reserved.</p> 

                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s">
                        <h3 class="f-title f_600 t_color f_size_18">Fitur Utama</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="{{ route('home.index') }}">Waralaba</a></li>
                            <li><a href="{{ route('waraedu') }}">WaraEdu</a></li>
                            <li><a href="{{ route('waracareer') }}">WaraCareer</a></li>
                            <li><a href="{{ route('warapartner') }}">WaraPartner</a></li>
                            <li><a href="{{ route('bantuan') }}">Bantuan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s">
                        <h3 class="f-title f_600 t_color f_size_18">Lainnya</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Term &amp; Conditions</a></li>
                            <li><a href="#">Reporting</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>

                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s">
                        <h3 class="f-title f_600 t_color f_size_18">Media Sosial</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>