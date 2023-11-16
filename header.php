<?php
$boyInfo = [
    'imgurl' => 'https://q4.qlogo.cn/headimg_dl?dst_uin=8726049&spec=100',
    'name' => '阿nb',
    'email' => '8726049@qq.com'
];
$girlInfo = [
    'imgurl' => 'https://q4.qlogo.cn/headimg_dl?dst_uin=1301214081&spec=100',
    'name' => '草莓欧尼🌸',
    'email' => '1301214081@qq.com'
];

?>
<script>
    function timekeeping() {
        window.setTimeout("timekeeping()", 1000);
        var birthDay = new Date("2023-08-21T00:00");
        var today = new Date();
        var timeOld = (today.getTime() - birthDay.getTime());
        var msPerDay = 24 * 60 * 60 * 1000;
        var elapsedDays = timeOld / msPerDay;
        var daysOld = Math.floor(elapsedDays);
        var elapsedHours = (elapsedDays - daysOld) * 24;
        var hoursOld = Math.floor(elapsedHours);
        var elapsedMinutes = (elapsedHours - hoursOld) * 60;
        var minutesOld = Math.floor((elapsedHours - hoursOld) * 60);
        var seconds = Math.floor((elapsedMinutes - minutesOld) * 60);
        var timeKi = document.getElementById('span_dt_dt');
        if (timeKi !== null) {
            span_dt_dt.innerHTML = "这是我们一起走过的";
            lovetime.innerHTML = '<b>' + daysOld + '</b>天<b>' + hoursOld + '</b>时<b>' + minutesOld + '</b>分<b>' + seconds + '</b>秒';
        }
    }

    timekeeping();
</script>

<!-- 定义视窗 -->
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<!-- 引入思源宋体 -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400&amp;display=swap" rel="stylesheet">
<!-- 引入字体 -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&amp;family=Pacifico&amp;display=swap">
<link rel="stylesheet" href="../style/css/leaving.css">
<link rel="stylesheet" href="../style/css/index.css">
<link rel="stylesheet" href="../style/css/little.css">
<link rel="stylesheet" href="../style/css/about.css">
<link rel="stylesheet" href="../style/botui/botui.min.css">
<link rel="stylesheet" href="../style/botui/botui-theme-default.css">
<script src="../style/botui/botui.min.js"></script>
<link rel="stylesheet" href="../style/css/loveImg.css">
<link rel="stylesheet" href="../style/css/list.css">
<link rel="stylesheet" href="../style/Font/font_list/iconfont.css">
<link rel="stylesheet" href="../style/toastr/toastr.css">
<link rel="stylesheet" href="../style/css/loadinglike.css">
<link rel="stylesheet" href="../style/static/css/aos.css">
<link rel="stylesheet" href="../style/icon/iconfont.css">
<link rel="stylesheet" href="../style/css/new.css">
<link rel="stylesheet" href="../style/css/main.css">
<script src="../style/Font/font_leav/iconfont.js"></script>
<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>
<script src="../style/js/jquery.min.js"></script>
<script src="../style/js/jquery.pjax.js" type="text/javascript"></script>
<script src="../style/js/lazyload.js"></script>
<script src="../style/js/lazyload.min.js"></script>
<script src="../style/static/js/aos.js"></script>
<script src="../style/js/highlight.min.js"></script>
<script src="../style/js/nprogress.js"></script>
<link href="../style/css/nprogress.css" rel="stylesheet" type="text/css">
<script src="../style/toastr/toastr.js"></script>
<script src="../style/js/view-image.min.js"></script>
<script src="../style/js/main.js"></script>
<body aos-easing="ease-in-sine" aos-duration="600" aos-delay="60">
<div class="header-wrap">
    <div class="header">
        <div class="logo">
            <h1><a class="alogo"> ❤ </a></h1>
        </div>
    </div>
</div>
<!-- 轮播图 -->
<div id="homePage" class="wrap" data-fullscreen="">
    <ul class="list ">
        <li class="item active"
            style="background: url(https://img.gejiba.com/images/ae9ba14a577ec8e367e4bab4b351c368.jpg) no-repeat center;background-size: cover;"></li>
        <li class="item "
            style="background: url(https://img.gejiba.com/images/47021e4863f21d29426bae3e1c037796.jpg) no-repeat center;background-size: cover;"></li>
        <li class="item "
            style="background: url(https://img.gejiba.com/images/85759e44bd6d199fb9d1a28e8719e5de.jpg) no-repeat center;background-size: cover;"></li>
        <li class="item "
            style="background: url(https://img.gejiba.com/images/c6a11c765546f7fef082e84c49a4c7cb.jpg) no-repeat center;background-size: cover;"></li>
    </ul>

    <div class="bg-wrap central limg">
        <div class="bg-img">
            <div class="middle Blurkg">
                <div class="img-male">
                    <img class="aiv_xf entered loaded"
                         data-src="<?php echo $girlInfo['imgurl'] ?>"
                         src="<?php echo $girlInfo['imgurl'] ?>" alt=""
                         data-ll-status="loaded">
                    <span><?php echo $girlInfo['name'] ?></span>
                </div>
                <div class="love-icon">
                    <img src="../style/img/like.svg" alt="">
                </div>
                <div class="img-female">
                    <img class="aiv_xf entered loaded"
                         data-src="<?php echo $boyInfo['imgurl'] ?>"
                         src="<?php echo $boyInfo['imgurl'] ?>" alt=""
                         data-ll-status="loaded">
                    <span><?php echo $boyInfo['name'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
        </g>
    </svg>
    <ul class="pointList">
        <li class="point active" data-index="0">
        </li>
        <li class="point " data-index="1">
        </li>
        <li class="point " data-index="2">
        </li>
        <li class="point " data-index="3">
        </li>
    </ul>
    <button id="leftBtn" class="slide-left-btn material-icons swiper-btn-prev" style=" opacity:0;"></button>
    <button id="rightBtn" class="slide-right-btn material-icons swiper-btn-next" style=" opacity:0;"></button>

</div>
<div class="music_info">
    <div class="music_info_btn">
        <span class="music_info_btn_play"
              data-music="https://love.xiaofan.ink/upload/20231016/e0752c378f3c0e.mp3"></span>
        <span class="music_info_btn_close"></span>
    </div>
</div>
<audio id="music"></audio>