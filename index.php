<?php
$scheduleList = [
    ['title' => '事件一', 'add_time' => '2023年11月16日', 'day' => 12],
    ['title' => '事件二', 'add_time' => '2023年11月15日', 'day' => 13]
];
$leaveList = [
    ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日'],
    ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日'],
];
$leaveAvatarList = [
    'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640',
];
$articleList = [
    ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640', 'title' => '标题', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日']
];
?>
    <meta charset="utf-8">
    <head>
        <title>首页</title>
        <?php include("header.php"); ?>
    </head>
    <div id="pjax-container">
        <link rel="stylesheet" href="style/css/home.css">
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
                    <span id="span_dt_dt"></span>
                    <p id="lovetime"></p>
                </div>
            </div>

            <div class="row central">
                <?php
                foreach ($scheduleList as $item) {
                    echo '<div class="time_card col-lg-6 col-md-6 col-sm-12 col-sm-x-12 shadow-blur aos-init" aos="flip-up"
                                 aos-duration="500">
                                <div class="day_cont">
                                    <div class="left_info">
                                        <span class="iconfont icon-fabiaowenzhang"></span>
                                        <span class="day_title">' . $item['title'] . '</span>
                                    </div>
                                    <div class="time_m">
                                        <b class="source">' . $item['add_time'] . '</b>
                                        <i class="format">过了' . $item['day'] . '天</i>
                                    </div>
                                </div>
                            </div>';
                }
                ?>
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
                        <?php
                        foreach ($leaveAvatarList as $item) {
                            echo '<span class="aiv aos-init" style="background-image:url(' . $item . ');" aos="fade-left"></span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="ios_page sm-x-block">
                <div class="pad_1rem mar_1rem">
                    <?php
                    foreach ($leaveList as $item) {
                        echo '<div class="leav_list aos-init" aos="fade-up">
                                    <div class="headPortrait">
                                    <span class="qqavi"
                                          style="background-image: url(' . $item['imgurl'] . ');"></span>
                                        <div class="list_info">
                                            <b class="name">' . $item['name'] . '<span class="xf_city">' . $item['city'] . '</span></b>
                                            <p class="content">' . $item['details'] . '</p>
                                        </div>
                                    </div>
                                    <div class="list_time">
                                        <span>' . $item['add_time'] . '</span>
                                    </div>
                                </div>';
                    }
                    ?>
                </div>
            </div>

            <div class="central">
                <div class="ltps shadow-blur">
                    <span class="hen"></span>
                    最新动态
                </div>
            </div>
            <?php
            foreach ($articleList as $item) {
                echo '<div class="ios_page article_card aos-init" aos="fade-up">
                            <div class="pad_1rem mar_1rem">
                                <div class="article_list">
                                    <div class="flex_a">
                                        <div class="article_list_head">
                                        <span class="aiv"
                                              style="background-image: url(' . $item['imgurl'] . ');"></span>
                                        </div>
                                        <div class="article_list_info">
                                        <span class="name_a">' . $item['name'] . '<span
                                                    style="font-size: 1rem;font-weight: 400;color: #fbbd08;background: #fef2ce;padding: 0.3rem 0.6rem;border-radius: 1rem;margin: 0 0.5rem;display: inline-block;"><span
                                                        class="iconfont icon-diqu" style="font-size: 1rem;color: #fbbd08"></span>' . $item['city'] . '</span>
                                                </span>
                                            <i class="time_a">' . $item['add_time'] . '</i>
                                        </div>
                                    </div>
                                    <div class="title_a">
                                        ' . $item['title'] . '
                                    </div>
                                    <div class="content_a">
                                        ' . $item['details'] . '
                                    </div>
                                </div>
                            </div>
                        </div>';
            }
            ?>

            <script>
                $(".close_btn").click(function () {
                    $(".alert").slideUp()
                });
            </script>

        </div>
    </div>
<?php include("footer.php"); ?>