<!DOCTYPE html>
<html lang="vi">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="../wp-content/themes/creativestudio/dist/images/favicon.png">
    <link rel="stylesheet" href="./css/detail.css">
    <title>Game bóc phốt công sở</title>
    <link rel="canonical" href="https://creativestudioa.admicro.vn/game-boc-phot-cong-so/">
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
    <meta name="twitter:title" content="Game bóc phốt công sở">
</head>
<body>
<?php require( 'base.php' ); ?>
<?php
if ( isset( $_GET['url'] ) ) {
	$url = "./image/pic/" . $_GET['url'];
} else {
	$url = "./image/pic/rs-1.jpg";
}
if ( isset( $_GET['title'] ) ) {
	$name = $_GET['title'];
} else {
	$name = 'Diệp Thu';
}
if ( isset( $_GET['content'] ) ) {
	$content = $arr[ $_GET['content'] ];
} else {
	$content = 'vừa bị “bóc phốt” vì uống trà sữa';
}
$actual_link = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$actual_link = "http://creativestudio.local/game-boc-phot-cong-so/detail.php?title=son&url=rs-1.jpg&content=9";
?>
<main id="detail-wrapper">
    <audio id="btnsound" src="./audio/button-sound.mp3"></audio>
    <section id="section-content">
        <div class="section-left">
            <div id="img2download" class="section-image">
                <img src="<?= $url; ?>" alt="">
                <h2>
                    "<?= $name ?>" vừa bị bóc phốt vì "<?= $content ?>"
                </h2>
            </div>
            <div class="section-btn">
                <a href="/game-boc-phot-cong-so?fr=3" onclick="continueBtn()">Bóc phốt tiếp</a>
            </div>
        </div>
        <div class="section-right">
            <h1>"Bóc phốt" công sở</h1>
            <h3>Share luôn với 500 anh em thôi chứ đợi gì nữa!</h3>
            <div class="section-social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $actual_link ?>" class="ico ico-fb"
                           target="_blank" title="Share Facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="ico ico-mess"></a>
                    </li>
                    <li>
                        <a href="#" class="ico ico-ins"></a>
                    </li>
                    <li>
                        <a href="" id="btn-download" onclick="downloadImg(this)" download="<?= $name ?>.jpg"
                           class="ico ico-download" title="Download"></a>
                    </li>
                </ul>
            </div>
            <h4><a href="https://creativestudioa.admicro.vn">Tham khảo các dịch vụ của Creative Studio
                    Athena</a></h4>
        </div>
    </section>

</main>

<!--Script-->
<script src="./plugin/jQuery/jquery.min.js"></script>
<script src="./plugin/html2canvas.min.js"></script>
<script>
    function continueBtn() {
        document.getElementById('btnsound').play();
    }

    html2canvas(document.getElementById('img2download')).then(function (canvas) {
        // document.body.appendChild(canvas);
        var image = canvas.toDataURL("image/png");
        $('#btn-download').attr('href',image);
    });


</script>
</body>
</html>