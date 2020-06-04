<?php require('../base.php');?>
<section id="section-2">
    <div id="myPanoramix">
        <img src="./image/pic/background-min.png" class="panoramixImg" alt="Panorama" usemap="#Map"/>
    </div>

    <map name="Map" id="Map">
        <area class="noSelect" alt="123" title="man1" data-content="Ăn kem trong giờ làm việc nè." data-url="rs-1.jpg" coords="1501,193,1745,461" shape="rect" onclick="loadFrame5(this)">
        <area class="noSelect" alt="ABC" title="man2" data-url="rs-2.jpg" coords="1162,623,1474,1006" shape="rect" onclick="loadFrame4(this)">
        <area class="noSelect" alt="ABC" title="man3" data-url="rs-3.jpg" coords="799,1023,982,1403" shape="rect" onclick="loadFrame4(this)">
    </map>
    <div id="tutorial-wrapper">
        <!-- <button type="button" class="btnclose" onclick="closeTutorial()">
            <img src="./image/icon/btn-close.png" alt="">
        </button> -->
        <div class="tutorial-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <img class="pc-img" src="./image/pic/tutorial-1.jpg" alt="">
                            <img class="mb-img" src="./image/pic/mbtutorial-1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img class="pc-img" src="./image/pic/tutorial-2.jpg" alt="">
                            <img class="mb-img" src="./image/pic/mbtutorial-2.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                <ul class="tutorial-text">
                    <li>
                        <button type="button" onclick="closeTutorial()">Bỏ qua</button>
                    </li>
                    <li>
                        <button type="button" class="btn-next-slider" ">Tiếp theo</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="result-wrapper">
        <div class="result-img">
            <img src="" alt="">
        </div>
        <h3>Xem ai vừa bị bắt quả tang nào</h3>
        <div class="result-group">
            <ul>
                <?php foreach ( $arr as $key => $value ): ?>
                    <li data-content="<?= $value ?>" data-content-id="<?= $key ?>">
                        <?= $value ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>


</section>