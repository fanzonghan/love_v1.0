<div class="div_marb_7rem">
    <div class="footer-warp">
        <div class="footer">
            <p><a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank">
                    粤ICP备2021037776号
                </a></p>
        </div>
    </div>
</div>


<div class="toggleBar">
    <div class="tab_icon">
        <a class="tab_ic" href="dynamic.php">
            <span class="iconfont icon_sm mar_0"></span>
            <b>文章</b>
        </a>

        <a class="tab_ic" href="leave.php">
            <span class="iconfont icon_sm mar_0"></span>
            <b>留言</b>
        </a>

        <a class="tab_ic por" href="index.php">
            <span class="iconfont icon_sm mar_0 home"></span>
        </a>

        <a class="tab_ic" href="loveimg.php">
            <span class="iconfont icon_sm mar_0"></span>
            <b>相册</b>
        </a>

        <a class="tab_ic" href="schedule.php">
            <span class="iconfont icon_sm mar_0"></span>
            <b>事件</b>
        </a>

    </div>
</div>


<script>
    $(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "rtl": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    })
    $(document).ready(function () {
        $('.tab_icon a').on('click', function (e) {
            $('.tab_icon a').removeClass('factive');
            $(this).addClass('factive');
        });
    });
</script>

</body>