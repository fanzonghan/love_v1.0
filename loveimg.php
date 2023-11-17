<meta charset="utf-8">
<head>
    <title>照片墙</title>
    <?php include("header.php"); ?>
</head>
<div id="pjax-container">
    <div class="Width_limit_10rem">
        <div class="central mar_t0 aos-init aos-animate" aos="flip-up">
            <div class="nav_url shadow-blur">
                <span class="iconfont icon_sm"></span>
                记录下美好瞬间～
            </div>
        </div>

        <div class="ios_page aos-init" aos="fade-up">
            <div class="pad_1rem mar_1rem">
                <div class="img_list">
                    <div class="flex_a po_rid">
                        <div class="img_list_head">
                            <span class="aiv" style="background-image: url(https://img.gejiba.com/images/9575cb9cb22a30fe70795792431f2a96.jpg);"></span>
                        </div>
                        <div class="img_list_info">
                           <span class="name_a">Reall<i class="time_a">上传于2023-09-29</i></span>
                        </div>
                        <div class="nub_1"><b>#1</b></div>
                    </div>
                    <div class="content_a">
                        <p><b class="img_title">Title：</b>国庆游</p>
                    </div>
                    <div class="loveimg row">
                        <img class="lazy img_img col-lg-4 col-md-4 col-sm-4 col-sm-x-4"
                             data-original="https://lguiy.kikiw.cn/uploads/20231012002848_1.jpeg"
                             src="https://lguiy.kikiw.cn/uploads/20231012002848_1.jpeg" style="display: block;">
                        <img class="lazy img_img col-lg-4 col-md-4 col-sm-4 col-sm-x-4"
                             data-original="https://lguiy.kikiw.cn/uploads/20231012002848_2.jpeg"
                             src="https://lguiy.kikiw.cn/uploads/20231012002848_2.jpeg" style="display: block;">
                    </div>
                    <div class="see">
                            <span class="see_btn">
                                <span class="iconfont"></span>2023-09-29
                            </span>
                        <a class="svg_hover" href="#">
                            <svg class="click_svg" viewBox="0 0 1024 1024" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" p-id="3579" width="200" height="200">
                                <path d="M873.505128 150.494862c-200.242816-200.241816-524.422519-200.719816-724.076335-1.065999s-199.176817 523.833519 1.065999 724.076335 524.422519 200.719816 724.076335 1.065999 199.176817-523.834519-1.065999-724.076335zM739.474251 536.662507L610.780369 665.355389c-13.222988 13.222988-34.859968 13.222988-48.082956 0-13.222988-13.222988-13.222988-34.859968 0-48.082956L633.970348 545.999499H308.609647c-18.699983 0-33.999969-15.299986-33.999969-33.999969s15.299986-33.999969 33.999969-33.999969H633.970348l-71.272935-71.272934c-13.222988-13.222988-13.222988-34.859968 0-48.082956 13.222988-13.222988 34.859968-13.222988 48.082956 0l128.692882 128.692882c6.768994 6.768994 10.062991 15.741986 9.901991 24.662977 0.162 8.920992-3.132997 17.893984-9.900991 24.662977z"
                                      fill="#4C4C4C" p-id="3580"></path>
                            </svg>
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $(".lazy").lazyload({
                    threshold: 300,
                    placeholder_data_img: "https://img.gejiba.com/images/fe42086d4fb326caa11c6c323e8f18d5.gif",
                    effect: "fadeIn",
                    check_appear_throttle_time: 2000,
                });
            });
        </script>
    </div>
</div>
<?php include("footer.php"); ?>
