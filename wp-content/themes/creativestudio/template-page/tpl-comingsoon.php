<?php
/**
 * Template Name: Coming Soon
 */
get_header(); ?>

<style>
    .comingSoon-box {
        position: relative;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff7d0;
        text-align: center;
    }
    .comingSoon-box-inner h1 {
        font-size: 70px;
        color: #da580c;
        margin: 50px 0 80px;
    }
    .comingSoon-box-inner .comingSoon-img {
        max-width: 100%;
        margin-bottom: 50px;
    }
    .comingSoon-box-inner h4 {
        font-size: 20px;
    }
</style>
<div class="comingSoon-box">
    <div class="container">
        <div class="comingSoon-box-inner">
            <h1>Coming Soon</h1>

            <img class="comingSoon-img" src="https://contentmarketing.admicro.vn/demo/assets/images/Comingsoon.gif" alt="comingSoon">

            <h4>Our website is under construction, <br>
                we are working very hard to give you the best experience with this one.
            </h4>
        </div>
    </div>
</div>

<?php wp_footer(); ?>





