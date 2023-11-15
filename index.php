<head>
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
    <link rel="stylesheet" href="../icon/iconfont.css">
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

    <!-- 引入字体 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&amp;family=Pacifico&amp;display=swap">
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

    <script src="../style/js/nprogress.js"></script>
    <link href="../style/css/nprogress.css" rel="stylesheet" type="text/css">
</head>
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
                    <img src="Style/img/like.svg" alt="">
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

<div class="Width_limit_10re lg_20rem">
    <!-- 导航卡片区域 -->
    <div class="row central nav_k">
        <a href="little.php" class="col-lg-3 col-md-6 col-sm-6 col-sm-x-12 nav_card shadow-blur">
            <div class="card_content">
                <div class="icon">
                    <span class="iconfont icon-a-wenzhang1x nav_icon"></span>
                </div>
                <div class="title">
                    <h1>
                        点点滴滴 </h1>
                </div>
                <div class="describe">
                    <span>
                        记录生活点点滴滴                    </span>
                </div>
            </div>
        </a>
        <a href="leaving.php" class="col-lg-3 col-md-6 col-sm-6 col-sm-x-12 nav_card shadow-blur">
            <div class="card_content">
                <div class="icon">
                    <span class="iconfont icon-liuyan1 nav_icon"></span>
                </div>
                <div class="title">
                    <h1>
                        祝福留言 </h1>
                </div>
                <div class="describe">
                    <span>
                        书写下你的留言祝福～                    </span>
                </div>
            </div>
        </a>
        <a href="loveImg.php" class="col-lg-3 col-md-6 col-sm-6 col-sm-x-12 nav_card shadow-blur">
            <div class="card_content">
                <div class="icon">
                    <span class="iconfont icon-tukuxiangce nav_icon"></span>
                </div>
                <div class="title">
                    <h1>
                        恋爱相册 </h1>
                </div>
                <div class="describe">
                    <span>
                        记录下美好瞬间～                    </span>
                </div>
            </div>
        </a>
        <a href="list.php" class="col-lg-3 col-md-6 col-sm-6 col-sm-x-12 nav_card shadow-blur">
            <div class="card_content">
                <div class="icon">
                    <span class="iconfont icon-liebiao1 nav_icon"></span>
                </div>
                <div class="title">
                    <h1>
                        恋爱事件 </h1>
                </div>
                <div class="describe">
                    <span>
                        总有些惊奇的际遇                    </span>
                </div>
            </div>
        </a>
    </div>

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
        <span class="music_info_btn_play" data-music=""></span>
        <span class="music_info_btn_close"></span>
    </div>
</div>
<audio id="music"></audio>
<meta charset="utf-8">
<title>
    LG_NewUi —— 小手一牵 岁岁年年～ </title>
<!-- 定义视窗 -->
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<!-- 引入思源宋体 -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="Style/css/index.css">


<div id="pjax-container">
    <link rel="stylesheet" href="Style/css/home.css">

    <div class="Width_limit_10rem">
        <div class="central aos-init aos-animate" style="margin: 0 auto;" aos="flip-up">
            <div class="nav_url shadow-blur">
                <span class="iconfont icon_sm"></span>
                小手一牵 岁岁年年～
            </div>
        </div>
        <!-- 时间区域 -->
        <div class="central">
            <div class="ltps shadow-blur">
                <span class="hen"></span>
                Love Day
            </div>
        </div>

        <div class="ios_page aos-init" aos="fade-down" aos-easing="linear" aos-duration="1000">
            <div class="time">
                <span id="span_dt_dt">这是我们一起走过的</span>
                <b id="tian">119</b>天
                <b id="shi">15</b>时
                <b id="fen">21</b>分
                <b id="miao">35</b>秒
            </div>
        </div>

        <div class="row central">
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">Our first 100days</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-10-27</b>
                        <i class="format">过了19天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">相见那天</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-08-29</b>
                        <i class="format">过了78天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">在一起咯</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-07-19</b>
                        <i class="format">过了119天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">第一次打电话</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-07-16</b>
                        <i class="format">过了122天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">距离下次见面</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-11-17</b>
                        <i class="format">还有2天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">第一次一起玩游戏</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-07-16</b>
                        <i class="format">过了122天</i>
                    </div>
                </div>
            </div>
            <div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                 aos-duration="500">
                <div class="day_cont">
                    <div class="left_info">
                        <span class="iconfont icon-fabiaowenzhang"></span>
                        <span class="day_title">我们相遇的那天</span>
                    </div>
                    <div class="time_m">
                        <b class="source">2023-06-10</b>
                        <i class="format">过了158天</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="central">
            <div class="ltps shadow-blur">
                <span class="hen"></span>
                最新留言
            </div>
        </div>
        <div class="ios_page">
            <div class="pad_1rem">
                <div class="package">
                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3210315934&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3192754568&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=1052340575&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=2041996029&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=2825478590&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3439780232&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=2742621805&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=897134410&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=172760565&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=5201314&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=66803665&amp;s=640);"
                          aos="fade-left"></span>

                    <span class="aiv aos-init"
                          style="background-image:url(https://q1.qlogo.cn/g?b=qq&amp;nk=318325669&amp;s=640);"
                          aos="fade-left"></span>

                </div>
            </div>
        </div>


        <div class="ios_page sm-x-block">
            <div class="pad_1rem mar_1rem">
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3210315934&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">&nbsp; <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">德阳市</span>
                            </b>
                            <p class="content">幸福</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>2天前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3192754568&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">驴踢脑 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">重庆市</span>
                            </b>
                            <p class="content">厉害厉害</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>4天前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=1052340575&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">速成妖怪 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">无锡市</span>
                            </b>
                            <p class="content">祝福！</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>27天前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">. <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">东莞市</span>
                            </b>
                            <p class="content">游泳奇，睡不着了，快打视频</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>1月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2041996029&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">华年 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">武汉市</span>
                            </b>
                            <p class="content">愿天下有情人终成眷属，前生注定，喜结良缘。</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>1月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2825478590&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">亐㔓 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">广州市</span>
                            </b>
                            <p class="content">不要为旧的悲伤浪费新的眼泪。</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>1月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3439780232&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">Ki. <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">广州市</span>
                            </b>
                            <p class="content">测试留言表情🐹</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>2月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">. <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">广州市</span>
                            </b>
                            <p class="content">游泳池你好，你在干森么，有没有喝热水</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>2月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2742621805&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">7 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">广州市</span>
                            </b>
                            <p class="content">好帅</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>2月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=897134410&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">朝阳热心市民 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">西安市</span>
                            </b>
                            <p class="content">1223</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=172760565&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">明明 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">重庆市</span>
                            </b>
                            <p class="content">大佬啥时候修复一下5.0版本的留言获取昵称呀</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">. <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">佛山市</span>
                            </b>
                            <p class="content">大神好厉害哦</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=5201314&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">5201314 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400"></span>
                            </b>
                            <p class="content">没看见IP定位</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=66803665&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">法国 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">东莞市</span>
                            </b>
                            <p class="content">测试</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
                <div class="leav_list aos-init" aos="fade-up">
                    <div class="headPortrait">
                        <span class="qqavi"
                              style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=318325669&amp;s=640);"></span>
                        <div class="list_info">
                            <b class="name">⛄吼吼吼你 <span
                                        style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.1rem 0.5rem;border-radius: 0.4rem;font-weight: 400">广州市</span>
                            </b>
                            <p class="content">v个v语音</p>
                        </div>
                    </div>
                    <div class="list_time">
                        <span>3月前</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row lg_card_block">
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3210315934&amp;s=640);"></span>
                </div>
                <b class="name">&nbsp;</b>
                <div class="list_info">
                    <p class="content">&nbsp;：幸福</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">德阳市</span>

                    <span class="list_time">2天前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3192754568&amp;s=640);"></span>
                </div>
                <b class="name">驴踢脑</b>
                <div class="list_info">
                    <p class="content">驴踢脑：厉害厉害</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">重庆市</span>

                    <span class="list_time">4天前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=1052340575&amp;s=640);"></span>
                </div>
                <b class="name">速成妖怪</b>
                <div class="list_info">
                    <p class="content">速成妖怪：祝福！</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">无锡市</span>

                    <span class="list_time">27天前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                </div>
                <b class="name">.</b>
                <div class="list_info">
                    <p class="content">.：游泳奇，睡不着了，快打视频</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">东莞市</span>

                    <span class="list_time">1月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2041996029&amp;s=640);"></span>
                </div>
                <b class="name">华年</b>
                <div class="list_info">
                    <p class="content">华年：愿天下有情人终成眷属，前生注定，喜结良缘。</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">武汉市</span>

                    <span class="list_time">1月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2825478590&amp;s=640);"></span>
                </div>
                <b class="name">亐㔓</b>
                <div class="list_info">
                    <p class="content">亐㔓：不要为旧的悲伤浪费新的眼泪。</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">广州市</span>

                    <span class="list_time">1月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3439780232&amp;s=640);"></span>
                </div>
                <b class="name">Ki.</b>
                <div class="list_info">
                    <p class="content">Ki.：测试留言表情🐹</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">广州市</span>

                    <span class="list_time">2月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                </div>
                <b class="name">.</b>
                <div class="list_info">
                    <p class="content">.：游泳池你好，你在干森么，有没有喝热水</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">广州市</span>

                    <span class="list_time">2月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=2742621805&amp;s=640);"></span>
                </div>
                <b class="name">7</b>
                <div class="list_info">
                    <p class="content">7：好帅</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">广州市</span>

                    <span class="list_time">2月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=897134410&amp;s=640);"></span>
                </div>
                <b class="name">朝阳热心市民</b>
                <div class="list_info">
                    <p class="content">朝阳热心市民：1223</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">西安市</span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=172760565&amp;s=640);"></span>
                </div>
                <b class="name">明明</b>
                <div class="list_info">
                    <p class="content">明明：大佬啥时候修复一下5.0版本的留言获取昵称呀</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">重庆市</span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=3345394033&amp;s=640);"></span>
                </div>
                <b class="name">.</b>
                <div class="list_info">
                    <p class="content">.：大神好厉害哦</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">佛山市</span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=5201314&amp;s=640);"></span>
                </div>
                <b class="name">5201314</b>
                <div class="list_info">
                    <p class="content">5201314：没看见IP定位</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;"></span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=66803665&amp;s=640);"></span>
                </div>
                <b class="name">法国</b>
                <div class="list_info">
                    <p class="content">法国：测试</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">东莞市</span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>
            <div class="leav_card lg_leav col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" aos="fade-up">
                <div class="headPortrait">
                    <span class="qqavi"
                          style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=318325669&amp;s=640);"></span>
                </div>
                <b class="name">⛄吼吼吼你</b>
                <div class="list_info">
                    <p class="content">⛄吼吼吼你：v个v语音</p>
                </div>
                <div class="footer_info">
                    <span style="font-size: 1rem;color: #8799a3;background: #e7ebed;padding: 0.3rem 0.5rem;border-radius: 0.4rem;font-weight: 400;margin:1rem 0;display:block;">广州市</span>

                    <span class="list_time">3月前</span>
                </div>
                <a href="leaving.php" class="leva_icon_svg">
                    <svg t="1682322548507" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="3422" width="200" height="200">
                        <path d="M941.34 466.656a63.508 63.508 0 0 0-2.914-2.719L685.134 210.656c-24.882-24.881-65.599-24.881-90.482 0-24.885 24.883-24.885 65.602 0 90.485l146.861 146.855H127.996c-35.2 0-64 28.8-64 64s28.8 64 64 64h613.517l-146.86 146.855c-24.885 24.883-24.885 65.602 0 90.485 24.882 24.881 65.599 24.881 90.482 0l253.292-253.281a64.641 64.641 0 0 0 2.914-2.719c12.467-12.466 18.686-28.907 18.661-45.34 0.024-16.433-6.195-32.873-18.662-45.34z"
                              p-id="3423"></path>
                    </svg>
                </a>
            </div>


        </div>

        <div class="central">
            <div class="ltps shadow-blur">
                <span class="hen"></span>
                最新动态
            </div>
        </div>
        <div class="ios_page article_card aos-init" aos="fade-up">
            <div class="pad_1rem mar_1rem">
                <div class="article_list">
                    <div class="flex_a">
                        <div class="article_list_head">
                            <span class="aiv"
                                  style="background-image: url(https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg);"></span>
                        </div>
                        <div class="article_list_info">
                            <span class="name_a">Really<span
                                        style="font-size: 1rem;font-weight: 400;color: #fbbd08;background: #fef2ce;padding: 0.3rem 0.6rem;border-radius: 1rem;margin: 0 0.5rem;display: inline-block;"><span
                                            class="iconfont icon-diqu" style="font-size: 1rem;color: #fbbd08"></span>东莞市</span>
                                    </span>
                            <i class="time_a">2023-10-26 09:40</i>
                        </div>
                    </div>
                    <div class="title_a">
                        干饭日记
                    </div>
                    <div class="content_a">
                        <p>这个蛙好吃

                            嘿嘿我吃鸡腿


                            这个是我们第二次一起吃披萨

                            吃蛙吃蛙
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ios_page article_card aos-init" aos="fade-up">
            <div class="pad_1rem mar_1rem">
                <div class="article_list">
                    <div class="flex_a">
                        <div class="article_list_head">
                            <span class="aiv"
                                  style="background-image: url(https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg);"></span>
                        </div>
                        <div class="article_list_info">
                            <span class="name_a">Really<span
                                        style="font-size: 1rem;font-weight: 400;color: #fbbd08;background: #fef2ce;padding: 0.3rem 0.6rem;border-radius: 1rem;margin: 0 0.5rem;display: inline-block;"><span
                                            class="iconfont icon-diqu" style="font-size: 1rem;color: #fbbd08"></span>东莞市</span>
                                    </span>
                            <i class="time_a">2023-09-17 23:44</i>
                        </div>
                    </div>
                    <div class="title_a">
                        6
                    </div>
                    <div class="content_a">
                        <p>

                            很多罪行</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ios_page article_card aos-init" aos="fade-up">
            <div class="pad_1rem mar_1rem">
                <div class="article_list">
                    <div class="flex_a">
                        <div class="article_list_head">
                            <span class="aiv"
                                  style="background-image: url(https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg);"></span>
                        </div>
                        <div class="article_list_info">
                            <span class="name_a">Really<span
                                        style="font-size: 1rem;font-weight: 400;color: #fbbd08;background: #fef2ce;padding: 0.3rem 0.6rem;border-radius: 1rem;margin: 0 0.5rem;display: inline-block;"><span
                                            class="iconfont icon-diqu" style="font-size: 1rem;color: #fbbd08"></span>佛山市</span>
                                    </span>
                            <i class="time_a">2023-08-07 01:19</i>
                        </div>
                    </div>
                    <div class="title_a">
                        不能反悔的
                    </div>
                    <div class="content_a">
                        <p>你答应了的，不能反悔。</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(".close_btn").click(function () {
                $(".alert").slideUp()
            });
        </script>

    </div>
</div>

<script src="../style/toastr/toastr.js"></script>
<script src="../style/js/view-image.min.js"></script>
<script src="../style/js/main.js"></script>
<div id="pjax-container">
    <script>
        $(function () {
            $("quote").addClass("shadow-blur")
        })
        AOS.init({
            offset: 100,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 60,
            once: true,
        });
        $(document).ready(function () {
            window.ViewImage && ViewImage.init('.loveimg img, .img_list img, #md-view img, img.aiv_touxiang,.leav_card .aiv_qq img, img.photo_style');
            $(document).ready(function () {
                new LazyLoad({
                    threshold: 0,
                    elements_selector: ".photo_style, .aiv_touxiang"
                });
            });
        });
    </script>
</div>
<?php include("footer.php"); ?>
</body>