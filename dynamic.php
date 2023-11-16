<?php
    $articleList = [
        ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640', 'title' => '标题', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日']
    ];
?>
<meta charset="utf-8">
<head>
    <title>动态</title>
    <?php include("header.php"); ?>
</head>
<div id="pjax-container">
    <div class="Width_limit_10rem">
        <div class="central mar_t0">
            <div style="margin: 0 auto;" aos="flip-up" class="aos-init aos-animate">
                <div class="nav_url shadow-blur">
                    <span class="iconfont icon_sm"></span>
                    记录生活点点滴滴
                </div>
            </div>
            <div class="central">
                <div class="ltps shadow-blur">
                    <span class="hen"></span>
                    文章列表
                </div>
            </div>
            <?php
                foreach ($articleList as $item){
                    echo '<div class="ios_page aos-init aos-animate" aos="fade-up">
                            <div class="pad_1rem mar_1rem">
                                <div class="article_list">
                                    <div class="flex_a">
                                        <div class="article_list_head">
                                            <span class="aiv" style="background-image: url('.$item['imgurl'].');"></span>
                                        </div>
                                        <div class="article_list_info">
                                                <span class="name_a">'.$item['title'].'<i class="time_a">Really —记录于'.$item['add_time'].'</i></span>
                                        </div>
                                    </div>
                                    <div class="title_a"></div>
                                    <div class="content_a">'.$item['details'].'</div>
                                    <div class="see">
                                        <a href="#"><span class="see_btn shadow-blur">查看详情</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>

        </div>
    </div>
</div>
<?php include("footer.php"); ?>