<?php
/**
 * Template Name: TPL Services Photography
 */
get_header(); ?>

<!--Style Services-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/service.min.css">

<!--End Style Services-->


<?php
$service_array = [
	"Chụp ảnh <br> sản phẩm"                 => "img1.jpg",
	"Chụp ảnh <br> Portfolio/Brochure"       => "img2.jpg",
	"Chụp ảnh <br> báo chí"                  => "img3.jpg",
	"Chụp ảnh <br> sự kiện"                  => "img4.jpg",
	"Chụp ảnh <br> Bất động sản"             => "img5.jpg",
	"Chụp ảnh <br> Fashion (BST Thời trang)" => "img6.jpg",
]
?>
<div id="wrapper-master">
    <div id="service-detail" class="photography-wrapper">
        <!--Include Header-->
		<?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->
        <!-- Slider main container -->
		<?php include "sidebar-service.php"; ?>

        <div id="fullpage">

            <div id="section-1" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> sản phẩm
                            </h3>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img1.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-2" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> Portfolio/Brochure
                            </h3>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img2.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-3" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> báo chí
                            </h3>
                            <ul>
                                <li>
                                    Chụp ảnh theo phong cách báo chí
                                </li>
                                <li>
                                    Chụp ảnh phục vụ các bài viết
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img3.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-4" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> sự kiện
                            </h3>
                            <ul>
                                <li>
                                    Sự kiện lễ hội, âm nhạc
                                </li>
                                <li>
                                    Sự kiện thể thao
                                </li>
                                <li>
                                    Họp báo
                                </li>
                                <li>
                                    Khai trương, ra mắt sản phẩm
                                </li>
                                <li>
                                    Ra mắt nhà mẫu, KOL chụp tại nhà mẫu & dự án
                                </li>
                                <li>
                                    Các sự kiện khác của doanh nghiệp
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img4.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-5" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> Bất động sản
                            </h3>
                            <ul>
                                <li>
                                    Flycam toàn cảnh dự án
                                </li>
                                <li>
                                    Gói về chụp tiện ích, cảnh quan, mảng xanh…
                                </li>
                                <li>
                                    Gói ảnh cập nhập theo từng giai đoạn tiến độ dự án (đặt móng, xây dựng phần thô, hoàn thiện dự án…)
                                </li>
                                <li>
                                    Gói ảnh chụp về môi trường sống, cộng đồng dân cư đang sinh sống tại các dự án đã và đang đi vào hoạt động (thể hiện sức sống dự án)
                                </li>
                                <li>
                                    Chụp ảnh 360 độ trải nghiệm nhà mẫu
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img5.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-6" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Chụp ảnh <br> Fashion (BST Thời trang)
                            </h3>
                            <ul>
                                <li>
                                    Chụp ảnh theo phong cách báo chí
                                </li>
                                <li>
                                    Chụp ảnh phục vụ các bài viết
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img6.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>


<!--Include Script-->
<?php get_footer(); ?>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.extensions.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/gsap/Tweenmax.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/service-type-1.min.js"></script>



