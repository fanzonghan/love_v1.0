<?php
    $scheduleList = [
        ['title' => '事件一', 'add_time' => '2023年11月16日', 'day' => 12],
        ['title' => '事件二', 'add_time' => '2023年11月15日', 'day' => 13]
    ];
?>
<meta charset="utf-8">
<head>
    <title>事件</title>
    <?php include("header.php"); ?>
</head>
<div id="pjax-container">

    <link rel="stylesheet" href="../style/css/schedule.css" />

    <div class="Width_limit_10rem">
        <div class="central mar_t0">
            <div class="nav_url shadow-blur marb_3rem aos-init" aos="flip-up">
                <span class="iconfont icon_sm"></span>
                总有些惊奇的际遇
            </div>

            <div class="Search_warp">
                <div class="screen">
                    <select class="form-control" id="whether">
                        <option value="1">全部</option>
                        <option value="2">已完成</option>
                        <option value="3">未完成</option>
                    </select>
                </div>

                <div class="position">
                    <input id="search" name="search" type="text" placeholder="请输入需查找的事件关键词">
                    <button id="search_btn" class="shadow-blur">
                        <svg t="1690375391067" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="23639" width="100" height="100">
                            <path d="M938.286 879.729 708.553 649.993c48.577-60.956 77.624-138.171 77.624-222.179C786.177 230.754 626.428 71 429.363 71 232.296 71 72.548 230.754 72.548 427.814c0 197.067 159.754 356.82 356.815 356.82 81.403 0 156.42-27.278 216.461-73.163l230.36 230.36c8.58 8.578 19.816 12.868 31.052 12.868 11.236 0 22.472-4.29 31.05-12.868C955.44 924.677 955.44 896.881 938.286 879.729L938.286 879.729zM154.575 427.814c0-151.758 123.029-274.783 274.788-274.783 151.762 0 274.787 123.025 274.787 274.783 0 151.764-123.025 274.794-274.787 274.794C277.604 702.608 154.575 579.578 154.575 427.814L154.575 427.814zM282.153 290.771c-9.172-4.961-20.621-1.543-25.578 7.628-20.646 38.193-33.226 79.643-37.392 123.209-0.995 10.375 6.614 19.591 16.989 20.586 0.612 0.055 1.219 0.085 1.822 0.085 9.614 0 17.83-7.311 18.764-17.079 3.683-38.505 14.795-75.128 33.021-108.857C294.737 307.178 291.318 295.728 282.153 290.771L282.153 290.771zM282.153 290.771"
                                  fill="#ffffff" p-id="23640"></path>
                        </svg>
                        查询
                    </button>
                </div>
            </div>


            <div class="query_data">
                <!-- 数据展示 -->
            </div>
            <div id="list_data">
                <div class="ios_page aos-init aos-animate" aos="fade-up">
                    <div class="ding_icon"></div>
                    <div class="pad_1rem mar_1rem">
                        <div class="img_list">
                            <div class="list_env">
                                 <span class="list_num">Event #1</span>
                            </div>
                            <div class="content_a">
                                <p></p>
                                <li class="cike">
                                    <i class="iconfont icon-chenggong2 com" style="font-size: 1.8rem;"></i>
                                    <span style="font-size: 1.3rem;margin-left: 0.5rem;color: #6c6c6c;">一起期待未来甜蜜小生活🍸</span>
                                </li>
                                <ul style="display: none;">
                                    <li style="border-top: 1px solid #fefefe;">
                                        <span class="weisc">暂未上传</span>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
