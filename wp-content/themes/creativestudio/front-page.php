<?php
get_header();
?>
<!--Style HomePage-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/homepage.min.css">
<!--End Style HomePage-->
<div id="wrapper-master"> <!--Start Wraper Master-->
    <div id="homepage">

        <!--Include Header-->
		<?php include 'header-ctn.php' ?>
        <!--End Include Header-->
        <div class="box-container">
            <div class="box1">

                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div id="section-1">
                                <div class="ss1-banner">
                                    <div class="ss1-banner-img ss1-banner-img-1" id="parallax-1"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss1-img-1.png"
                                             alt="" data-depth="0.1">
                                    </div>
                                    <div class="ss1-banner-img ss1-banner-img-2" id="parallax-2"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss1-img-2.png"
                                             alt="" data-depth="0.1">
                                    </div>
                                </div>
                                <div class="ss1-main">
                                    <div class="container-master">
                                        <div class="ss1-main-content">
                                            <h1>Creative <br> Studio Athena</h1>
                                            <p>
                                                “Everything you can imagine is real.”
                                                <span>- Pablo Picasso</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ss1-footer">
                                    <div class="container-master">
                                        Scroll
                                        <div class="arrow">
                                        <span>
                                           →
                                        </span>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div id="section-2">
                                <div class="ss2-banner">
                                    <div class="ss2-banner-img ss2-banner-img-1">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss2-bg.jpg"
                                             alt="">
                                    </div>
                                    <div class="ss2-banner-img ss2-banner-img-2">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss2-img.jpg"
                                             alt="">
                                    </div>
                                </div>
                                <div class="ss2-main">
                                    <div class="ss2-main-content">
                                        <div class="ss2-main-content-header">
                                            <h2>Creative <br> Studio Athena</h2>
                                        </div>
                                        <div class="ss2-main-content-body">
                                            <p class="title">
                                                Chúng tôi là ai?
                                            </p>
                                            <p>
                                                Creative Studio Athena là đơn vị Studio trực thuộc Admicro, VCCorp chuyên sâu
                                                về
                                                sáng tạo và sản xuất các sản phẩm thuộc lĩnh vực nhiếp ảnh, video, thiết
                                                kế
                                                và coding giao diện dành cho cả Online & Offline Marketing.
                                            </p>
                                        </div>
                                        <div class="ss2-main-content-footer">
                                            <div class="arrow">
                                        <span>
                                           →
                                        </span>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="section-3">
                                <div class="ss3-banner">
                                    <div class="ss3-banner-img ss3-banner-img-2" id="parallax-3"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss3-img-1.jpg"
                                             alt="" data-depth="0.075">
                                    </div>
                                    <div class="ss3-banner-img ss3-banner-img-3" id="parallax-4"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss3-img-2.jpg"
                                             alt="" data-depth="0.075">
                                    </div>
                                    <div class="ss3-banner-img ss3-banner-img-4" id="parallax-5"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss3-img-3.jpg"
                                             alt="" data-depth="0.1">
                                    </div>
                                </div>
                                <div class="ss3-main">
                                    <div class="ss3-main-content">
                                        <div class="ss3-main-content-header">
                                            <h2>Sáng tạo</h2>
                                        </div>
                                        <div class="ss3-main-content-body">

                                            <p>
                                                Trực thuộc Admicro - VCCorp, Creative Studio Athena đã có hơn 5 năm kinh nghiệm
                                                làm
                                                việc cùng nhiều nhãn hàng lớn với hàng nghìn case study về visual từ tác
                                                phẩm báo chí, hình ảnh sự kiện, video, website…
                                            </p>
                                            <p>
                                                Các tác phẩm thiết kế đã đạt giải đặc biệt tại đấu trường sáng tạo
                                                Halography Việt Nam 2018, cùng nhiều sản phẩm video và social media nhận
                                                được đánh giá cao từ khán giả và nhãn hàng.
                                            </p>
                                        </div>
                                        <div class="ss3-main-content-footer">
                                            <div class="arrow">
                                        <span>
                                           →
                                        </span>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="last">
                            <div id="section-4">
                                <div class="ss4-banner">
                                    <div class="ss4-banner-img ss4-banner-img-2" id="parallax-6"
                                         data-relative-input="true">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss4-img-1.jpg"
                                             alt="" data-depth="0.1">
                                    </div>

                                    <div class="ss4-banner-img ss4-banner-img-3">
                                        <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss4-img-2.jpg"
                                             alt="">
                                    </div>


                                </div>
                                <div class="ss4-main">
                                    <div class="ss4-main-content">
                                        <div class="ss4-main-content-header">
                                            <h2>Thấu hiểu thị hiếu
                                                công chúng</h2>
                                        </div>
                                        <div class="ss4-main-content-body">

                                            <p>
                                                Chúng tôi luôn lấy người dùng làm trung tâm.
                                            </p>
                                            <p>
                                                Production house phát triển trong lòng các tòa soạn báo & trang tin lớn,
                                                chúng tôi thấu hiểu tâm lý người dùng (độc giả, khán giả, followers…)
                                                Các
                                                tác phẩm của chúng tôi đánh trúng thị hiếu và trào lưu mà các nhóm công
                                                chúng trong xã hội đang quan tâm nhất.
                                            </p>
                                        </div>
                                        <div class="ss4-main-content-footer">
                                            <div class="arrow arrow-down">
                                        <span class="show-desktop">
                                           ↓
                                        </span>
                                                <span class="show-mobile">
                                            →
                                        </span>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="mb-1" class="swiper-slide">
                            <div id="section-5">
                                <div class="ss5-main">
                                    <div class="container-master">
                                        <div class="ss5-main-content">
                                            <ul>
                                                <li>
                                                    <a href="<?= home_url(); ?>/services">
                                                        Dịch vụ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= home_url(); ?>/projects">
                                                        Dự án
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ss5-main-footer">

                                            Liên hệ ngay với chúng tôi!
                                            <div class="arrow">
                                                    <span>
                                                    →
                                                    </span>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="mb-2" class="swiper-slide">
                            <div id="section-6">

                                <div class="ss6-main">
                                    <div class="container-master">
                                        <div class="ss6-main-content">
                                            <div class="ss6-main-content-img">
                                                <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss6-img.jpg"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cb"></div>
                                    <div class="ss6-main-content-address">
                                        <div class="container-master">
                                            <div class="ss6-main-content-address-body">
                                                <div class="line1">
                                                    <a href="mailto:creativestudioa@admicro.vn">
                                                        creativestudioa@admicro.vn
                                                    </a>
                                                </div>
                                                <div class="line2">
                                                    <div class="line2-col">
                                                        <ul>
                                                            <li>Hotline: <a href="tel:+84834246209">(84) 834 246 209</a></li>
                                                            <li>Tel: <a href="tel:0473077979">(04) 7307 7979 (#62935)</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="line2-col">
                                                        © 2020 Admicro <br>
                                                        All Rights Reserved

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
            <div id="pc-2" class="box2">
                <div id="section-5">
                    <div class="ss5-main">
                        <div class="container-master">
                            <div class="ss5-main-content">
                                <ul>
                                    <li>
                                        <a href="<?= home_url(); ?>/services">
                                            Dịch vụ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url(); ?>/projects">
                                            Dự án
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ss5-main-footer">

                                Liên hệ ngay với chúng tôi!
                                <div class="arrow">
                                        <span>
                                           →
                                        </span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div id="pc-3" class="box3">
                <div id="section-6">
                    <div class="container-master">
                        <div class="ss6-main-content">
                            <div class="ss6-main-content-img">
                                <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/homepage/ss6-img.jpg"
                                     alt="">
                            </div>

                        </div>
                    </div>
                    <div class="cb"></div>
                    <div class="ss6-main-content-address">
                        <div class="container-master">
                            <div class="ss6-main-content-address-body">
                                <div class="line1">
                                    <a href="mailto:creativestudioa@admicro.vn">
                                        creativestudioa@admicro.vn
                                    </a>
                                </div>
                                <div class="line2">
                                    <div class="line2-col">
                                        <ul>
                                            <li>Hotline: <a href="tel:+84834246209">(84) 834 246 209</a></li>
                                            <li>Tel: <a href="tel:0473077979">(04) 7307 7979 (#62935)</a></li>
                                        </ul>
                                    </div>
                                    <div class="line2-col">
                                        © 2020 Admicro <br>
                                        All Rights Reserved

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div><!--End Wraper Master-->
<?php get_footer(); ?>

<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/lodash/lodash.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/gsap/Tweenmax.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/gsap/scrollToplugin.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/nicescroll/nicescroll.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/parallax/parallax.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/homepage.min.js"></script>



