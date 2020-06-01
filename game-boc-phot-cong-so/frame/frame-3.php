
<section id="section-2">
    <div id="myPanoramix">
        <img src="./image/pic/background.jpg" class="panoramixImg" alt="Panorama" usemap="#Map"/>
    </div>

    <map name="Map" id="Map">
        <area alt="123" data-url="rs-1.jpg" coords="1489,645,1082,408" shape="rect" onclick="loadFrame4(this)">
        <area alt="ABC" data-url="rs-2.jpg" coords="3124,408,3382,659" shape="rect" onclick="loadFrame4(this)">
        <area alt="ABC" data-url="rs-3.jpg" coords="5288,380,5058,625" shape="rect" onclick="loadFrame4(this)">
    </map>
    <div id="tutorial-wrapper">
        <button type="button" class="btnclose" onclick="closeTutorial()">
            <img src="./image/icon/btn-close.png" alt="">
        </button>
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


</section>