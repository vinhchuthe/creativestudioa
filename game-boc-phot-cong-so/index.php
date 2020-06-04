<!DOCTYPE html>
<html lang="vi">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="../wp-content/themes/creativestudio/dist/images/favicon.png">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link rel="stylesheet" href="./plugin/swiper/swiper.min.css">
    <link rel="stylesheet" href="./plugin/paranoma/panoramix.min.css">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Game Bóc phốt công sở">
    <meta property="og:description"
          content="Game Bóc phốt công sở được phát triển bởi Creative Studio Athena">
    <meta property="og:url" content="https://creativestudioa.admicro.vn/game-boc-phot-cong-so/">
    <meta property="og:site_name" content="Game Bóc phốt công sở">
    <meta property="og:image" content="https://creativestudioa.admicro.vn/game-boc-phot-cong-so/image/pic/cover-fb.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description"
          content="Game Bóc phốt công sở được phát triển bởi Creative Studio Athena">
    <meta name="twitter:title" content="Game Bóc phốt công sở">
    <title>Game bóc phốt công sở</title>
    <!--Script-->
    <script src="./plugin/jQuery/jquery.min.js"></script>
    <script src="./plugin/jQuery/Tweenmax.js"></script>
    <script src="./plugin/jQuery/jquery.rwdImageMaps.min.js"></script>
    <script src="./plugin/paranoma/panoramix.min.js"></script>
    <script src="./plugin/niceScroll/nicescroll.min.js"></script>
    <script src="./plugin/swiper/swiper.min.js"></script>
    <script>

        $(function () {
            $(document).keydown(function (objEvent) {
                if (objEvent.ctrlKey) {
                    if (objEvent.keyCode == 65) {

                        return false;
                    }
                }
            });
        });
        var url_img_global = "";
        var content_global = "";


        function panoramix() {
            $("#myPanoramix").panoramix({
                speed: 400, interval: 100
            });

            $(window).on("load",function() {
                $("img[usemap]").rwdImageMaps();
            })
            // $("img[usemap]").rwdImageMaps();
        }

        function ClickBtn() {
            document.getElementById('btnsound').play();
        }

        function loadFrame2() {
            ClickBtn();
            $.ajax({
                url: "frame/frame-2.php",
                success: function (data) {
                    $('#section-content-1').remove();
                    $('#section-1').append(data);
                },
                dataType: 'html'
            });
            // $("#section-1").append("frame/frame-2.php");
        }

        function loadFrame3() {
            ClickBtn();
            $.ajax({
                url: "frame/frame-3.php",
                success: function (data) {
                    $('#section-1').remove();
                    $('main').append(data);
                    panoramix();
                    var swiperTutorial = new Swiper('.tutorial-slider .swiper-container', {
                        pagination: {
                            el: '.swiper-pagination',
                        },
                        autoplay: {
                            speed: 1000
                        },
                        effect: 'fade',
                        navigation: {
                            nextEl: '.btn-next-slider',
                            // prevEl: '.swiper-button-prev',
                        },
                    });
                    $(".result-group").niceScroll({
                        cursorwidth: "5px",
                        cursorcolor: '#b0cb88',
                    });
                    TweenMax.staggerFrom($(".result-group ul li"),1,{opacity:0,autoAlpha:0,y:"+=20px"},1);

                },
                dataType: 'html'
            });
        }

        function loadFrame4(elm) {
            ClickBtn();
            var data_url = $(elm).attr('data-url');
            var url_image = "./image/pic/" + data_url;
            $('.result-img img').attr('src', url_image);

            url_img_global = data_url;
            // $.ajax({
            //     url: "frame/frame-4.php",
            //     success: function (data) {
            //         $('#section-2').append(data);
            //         $(".result-group").niceScroll({
            //             cursorwidth: "10px",
            //             cursorcolor: '#b0cb88',
            //         });
            //         $('.result-img img').attr('src', url_image);

            //     },
            //     dataType: 'html'
            // });
        }

        function loadFrame5(elm) {

            ClickBtn();
            var data_url = $(elm).attr('data-url');
            content_global = $(elm).attr('data-content-id');
            $.ajax({
                url: "frame/frame-5.php",
                success: function (data) {
                    $('#result-wrapper').remove();
                    $('#section-2').addClass("overllay").append(data);
                    $('.result-form-img img').attr('src', "./image/pic/" + data_url);
                    $('#image-url').val(data_url);
                    $('#image-content').val(content_global);
                },
                dataType: 'html'
            });
        }

        function closeTutorial() {
            $('#tutorial-wrapper').remove();
            ClickBtn();
        }

        function closeFrame5(elm) {
            // panoramix();
            ClickBtn();
            $('#section-2').removeClass('overllay');
            $('#result-form').remove();
            $('#result-container').remove();
            elm.remove();
            $("#section-2").remove();
            loadFrame3();
        }


    </script>
</head>
<body>

<main>
    <audio id="audiogame" src="./audio/audiogame.mp3" autoplay loop></audio>
    <audio id="btnsound" src="./audio/button-sound.mp3"></audio>
	<?php
	if ( isset( $_GET['fr'] ) ) :
		if ( $_GET['fr'] == 3 ) : ?>
			<?php require( 'frame/frame-3.php' ) ?>
        <script>
            panoramix();
            var swiperTutorial = new Swiper('.tutorial-slider .swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                },
                autoplay: {
                    speed: 1000
                },
                effect: 'fade',
                navigation: {
                    nextEl: '.btn-next-slider',
                    // prevEl: '.swiper-button-prev',
                },
            });

        </script>
		<?php endif; ?>
	<?php else: ?>
        <section id="section-1">
            <header>
                <div class="col-left">
                    <h1><a href="https://creativestudioa.admicro.vn">Creative <br>Studio <br>Athena</a></h1>
                </div>
                <div class="col-right">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://creativestudioa.admicro.vn/game-boc-phot-cong-so/">
                        <img src="./image/icon/icon-share.png" alt="">
                        <span>Share</span>
                    </a>
                </div>


            </header>
            <div id="section-content-1">
                <div class="section-content">
                    <div class="section-content-title">
                    <span>
                        "Bóc phốt"
                    </span>Công sở
                    </div>
                    <div class="section-content-subtitle">
                        Game được phát triển <br>
                        bởi <a href="https://creativestudioa.admicro.vn/" title="Creative Studio Athena">Creative
                            Studio
                            Athena</a>
                    </div>
                    <div class="section-content-btn">
                        <button type="button" onclick="loadFrame2()">Tham gia ngay</button>
                    </div>
                </div>
            </div>

            <button type="button" id="btn-mute">
                <img src="./image/icon/icon-volume.png" alt="">
            </button>
        </section>
	<?php endif; ?>

</main>



</body>
<script>
    $('#btn-mute').click(function () {
        $(this).toggleClass('disabled');
        $("#audiogame").prop('muted', !$("#audiogame").prop('muted'));
    });
</script>
</html>