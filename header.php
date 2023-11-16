<script>
    function show_date_time() {
        window.setTimeout("show_date_time()", 1000);
        BirthDay = new Date("2023-07-19T00:00");
        today = new Date();
        timeold = (today.getTime() - BirthDay.getTime());
        sectimeold = timeold / 1000;
        secondsold = Math.floor(sectimeold);
        msPerDay = 24 * 60 * 60 * 1000;
        e_daysold = timeold / msPerDay;
        daysold = Math.floor(e_daysold);
        e_hrsold = (e_daysold - daysold) * 24;
        hrsold = Math.floor(e_hrsold);
        e_minsold = (e_hrsold - hrsold) * 60;
        minsold = Math.floor((e_hrsold - hrsold) * 60);
        seconds = Math.floor((e_minsold - minsold) * 60);
        var timeKi = document.getElementById('span_dt_dt');
        if (timeKi !== null) {
            span_dt_dt.innerHTML = "这是我们一起走过的";
            tian.innerHTML = daysold;
            shi.innerHTML = hrsold;
            fen.innerHTML = minsold;
            miao.innerHTML = seconds;
        }
    }

    show_date_time();
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
<link rel="stylesheet" href="../botui/botui.min.css">
<link rel="stylesheet" href="../botui/botui-theme-default.css">
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
<script src="../botui/botui.min.js"></script>
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
<script>
    $(document).pjax('a[target!=_blank]', '#pjax-container', {fragment: '#pjax-container', timeout: 15000});
    $(document).on('pjax:send', function () {
        NProgress.start();
    });
    $(document).on('pjax:complete', function () {
        hljs.initHighlightingOnLoad();
        window.ViewImage && ViewImage.init('.loveimg img, .img_list img, #md-view img, img.aiv_touxiang,.leav_card .aiv_qq img, img.photo_style');
        NProgress.done();

        $(".img_list ul").hide();
        $(".img_list li").bind("click", function () {
            $(this).next("ul").slideToggle(500).siblings("ul").slideUp(500);
        })
        AOS.init({
            offset: 100,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 60,
            // 是否重复
            once: true,
        });
        $("quote").addClass("shadow-blur");
        new LazyLoad({
            threshold: 0,
            elements_selector: ".photo_style, .aiv_touxiang"
        });
        getMusic();
    });
</script>
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
                    <img class="aiv_touxiang entered loaded"
                         data-src="https://img.gejiba.com/images/57bc92dc7b60fd50f1649bad2c6429e7.jpg"
                         src="https://img.gejiba.com/images/57bc92dc7b60fd50f1649bad2c6429e7.jpg" alt=""
                         data-ll-status="loaded">
                    <span>
                        Ki.                    </span>
                </div>
                <div class="love-icon">
                    <img src="../style/img/like.svg" alt="">
                </div>
                <div class="img-female">
                    <img class="aiv_touxiang entered loaded"
                         data-src="https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg"
                         src="https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg" alt=""
                         data-ll-status="loaded">
                    <span>
                        Really                    </span>
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

<script>
    var items = document.querySelectorAll(".item");
    var points = document.querySelectorAll(".point")
    var left = document.getElementById("leftBtn");
    var right = document.getElementById("rightBtn");
    var all = document.querySelector(".wrap")
    var index = 0;
    var time = 0;
    var clearActive = function () {
        for (i = 0; i < items.length; i++) {
            items[i].className = 'item';
        }
        for (j = 0; j < points.length; j++) {
            points[j].className = 'point';
        }
    }
    var goIndex = function () {
        clearActive();
        items[index].className = 'item active';
        points[index].className = 'point active'
    }
    var goLeft = function () {
        if (index == 0) {
            index = points.length - 1;
        } else {
            index--;
        }
        goIndex();
    }
    var goRight = function () {
        if (index < points.length - 1) {
            index++;
        } else {
            index = 0;
        }
        goIndex();
    }
    for (i = 0; i < points.length; i++) {
        points[i].addEventListener('click', function () {
            var pointIndex = this.getAttribute('data-index')
            index = pointIndex;
            goIndex();
            time = 0;
        })
    }
    var timer;

    function play() {
        timer = setInterval(() => {
            time++;
            if (time == 20) {
                goRight();
                time = 0;
            }
        }, 300)
    }

    play();
    all.onmousemove = function () {
        clearInterval(timer)
    }
    all.onmouseleave = function () {
        play();
    }

    window.onscroll = function () {
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollTop > 500) {
            $('.alogo').css({
                'color': '#181818'
            });

            $('.header-wrap').css({
                'backdropFilter': 'saturate(5) blur(20px)'
            });
        }

        if (scrollTop < 500) {

            $('.alogo').css({
                'color': '#777'
            });

            $('.header-wrap').css({
                'backdropFilter': 'blur(20px)'
            });
        }
    }

</script>
<div class="music_info">
    <div class="music_info_btn">
        <span class="music_info_btn_play" data-music="https://love.xiaofan.ink/upload/20231016/e0752c378f3c0e.mp3"></span>
        <span class="music_info_btn_close"></span>
    </div>
</div>
<audio id="music"></audio>