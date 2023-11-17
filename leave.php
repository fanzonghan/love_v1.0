<?php
$leaveList = [
    ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日'],
    ['name' => '测试', 'imgurl' => 'https://q1.qlogo.cn/g?b=qq&amp;nk=2955137198&amp;s=640', 'details' => '幸福', 'city' => '郑州市', 'add_time' => '2023年11月16日'],
];
$total = 2;
?>

<meta charset="utf-8">
<head>
    <title>留言</title>
    <?php include("header.php"); ?>
</head>
<div id="pjax-container">
    <link href="../style/css/leav.css" rel="stylesheet" type="text/css">
    <div class="Width_limit_10rem leav">
        <div class="central mar_t0 aos-init aos-animate" aos="flip-up">
            <div class="nav_url shadow-blur" id="click_leav">
                <span class="iconfont icon_sm"></span>
                书写下你的留言祝福～
            </div>
        </div>
        <div class="central">
            <div class="ltps lyips shadow-blur" style="justify-content: center;align-items: baseline;">
                <!--            <span class="hen"></span>-->
                祝福留言共<b class="nub_con">
                    <?php echo $total ?> </b>条 当前显示 <b class="nub_con">
                    <?php echo $total ?> </b>条
            </div>
        </div>
        <!--留言列表-->
        <div class="row leav_card_">
            <?php
            foreach ($leaveList as $item) {
                echo '<div class="leav_card col-lg-4 col-md-6 col-sm-6 col-sm-x-12 aos-init aos-animate" aos="fade-up"
                             style="background-image: url(' . $item['imgurl'] . ');">
                            <!--                <div class="bg_leav" style="background-image: url(https://q1.qlogo.cn/g?b=qq&amp;nk=8726049&amp;s=640);"></div>-->
                            <div class="aiv_qq">
                                <img src="' . $item['imgurl'] . '" alt="">
                            </div>
                            <div class="row_flex_leav">
                                <div class="name_leav"><span>' . $item['name'] . '</span></div>
                                <div class="leav_text">' . $item['name'] . '：' . $item['details'] . '</div>
                                <div class="leav_footer">
                                    <div class="leav_city"><span class="iconfont"></span>' . $item['city'] . '</div>
                                    <div class="leav_time"><span class="iconfont icon-shijian"></span>' . $item['add_time'] . '</div>
                                </div>
                            </div>
                        </div>';
            }
            ?>
        </div>
        <!--留言提交-->
        <div class="central central-800 bg" id="show_mes" style="display: none">
            <div class="row liuyan_row">
                <div class="card leav_from col-lg-12 col-md-12 col-sm-12 col-sm-x-12">
                    <form action="#" method="post">
                        <div class="inputbox">
                            <img src="https://q1.qlogo.cn/g?b=qq&amp;nk=1234567&amp;s=100" alt="" class="avatar">
                            <input id="qq" type="text" name="qq" placeholder="QQ号码" class="rig">
                            <input id="nickname" type="text" name="nickname" placeholder="昵称（自动获取）" class="let" autocomplete="off">
                        </div>
                        <div class="see_city">
                                <span>
                                    <span class="see_btn"><span class="iconfont"></span>郑州市</span>
                                </span>
                        </div>
                        <textarea name="text" id="wenben" rows="6" placeholder="请输入您的留言内容..."></textarea>
                        <div class="input-sub">
                            <button type="button" id="leavingPost" class="tijiao shadow-blur">提交留言
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="message_btn" id="mes">
            <span class="iconfont icon-liuyanban-05 mesly"></span>
        </div>


        <script>
            $('#qq').blur(function () {
                let qq = $('#qq').val();
                $.ajax('https://api.qjqq.cn/api/qqinfo',{
                    type:'get',
                    data:{qq:qq},
                    success:function (res) {
                        $('#nickname').val(res.name)
                    }
                })
            });
            $('body').click(function(e){
                // 判断点击的元素是否在指定的div内
                if(!$(e.target).closest('#show_mes').length && !$(e.target).is('#show_mes')){
                    // 隐藏div
                    $("#show_mes").fadeOut(500);
                }
            });

            $(document).ready(function () {
                $(".close").click(function () {
                    $("#show_mes").slideUp();
                    $("#mask").slideUp();
                });
                $("#mes,#click_leav").click(function (e) {
                    e.stopPropagation();
                    $("#mask").fadeToggle();
                    $("#show_mes").fadeToggle(500);
                });
            });
            function stripHtmlTags(htmlString) {
                return htmlString.replace(/<[^>]+>/g, '');
            }
        </script>
    </div>
</div>
<?php include("footer.php"); ?>
