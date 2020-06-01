<div id="result-container">
    <button type="button" class="btnclose" onclick="closeFrame5(this)">
        <img src="./image/icon/btn-close.png" alt="">
    </button>
    <div id="result-form">
        <div class="result-form-img">
            <img src="./image/pic/rs-1.jpg" alt="">
        </div>
        <div class="result-form-content">
            <h3>"Nạn nhân" của bạn cần một cái tên</h3>
            <h4>* tối đa 20 ký tự</h4>
        </div>
        <form action="detail.php" method="get" id="form-submit">
            <input type="text"  name="title" required >
            <input type="hidden" value="" name="url" id="image-url">
            <input type="hidden" value="" name="content" id="image-content">
            <button type="submit" class="form-btn-submit" onclick="ClickBtn()">Xác nhận</button>
        </form>
    </div>

</div>