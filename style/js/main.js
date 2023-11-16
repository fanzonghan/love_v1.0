/*
 * @Author: Ki.
 * Copyright (c) 2022-2023 by Ki All Rights Reserved.
 * @Description: 花有重开日 人无再少年
 * link https://blog.kikiw.cn/index.php/archives/65/
 */



$(document).ready(function () {
    window.getMusic = function() {
        const neteaseAudios = document.querySelectorAll('audio[data-type]');
        neteaseAudios.forEach(neteaseAudios => {
            const id = neteaseAudios.getAttribute('data-id');
            const dataType = neteaseAudios.getAttribute('data-type');
            const amUrl = neteaseAudios.getAttribute('data-url');
            fetch(`../../music.php?type=song&media=${dataType}&id=${id}`)
                .then(response => response.json())
                .then(data => {
                    let dataurl = '';
                    if (amUrl) {
                        dataurl = amUrl;
                    }else{
                        dataurl = data.url;
                    }
                    const music_style = `<div class="mian_music" style="background: url('${data.cover}') no-repeat center">
                        <div class="music_card" data-url="${data.cover}">
                             <img class="cover" src="${data.cover}">
                            <div class="author">
                                <span class="music_name">${data.name}</span>
                                <span class="user">${data.author}</span>
                            </div>
                            <div class="music_play" data-music="${dataurl}"></div>
                        </div>
                    </div>
                    `
                    $(music_style).insertBefore(neteaseAudios);
                    neteaseAudios.src = data.url;
                    afterAjax();
                })
                .catch(error => {
                    console.error(`Failed to get music URL for ${id}: ${error.message}`);
                });
        });
    }
    getMusic();
    var audio = $('#music')[0];
    var currentUrl = ''; // 当前正在播放的音乐 URL
    var currentTime = 0; // 上一次暂停的位置
    var play_svg = "Style/img/pause.svg";
    var pause_svg = "Style/img/play.svg";
    var play_svg2 = "Style/img/pause2.svg";
    var pause_svg2 = "Style/img/play2.svg";

// 为播放按钮添加点击事件监听器

    $(".music_info_btn_play").click(function () {
        var musicUrl = $('.music_info_btn_play').attr('data-music');
        if (currentUrl !== musicUrl) {
            audio.pause();
            audio.currentTime = 0;
            currentUrl = musicUrl;
        }
        if (currentTime > 0 && audio.src === musicUrl) {
            audio.currentTime = currentTime;
        }

        // 将音乐的 URL 设置为 <audio> 元素的 src 属性
        if (audio.src !== musicUrl) {
            audio.src = musicUrl;
        }


        // 如果音乐已暂停，则调用 play() 方法播放音乐；否则调用 pause() 方法暂停音乐
        if (audio.paused) {
            audio.play().catch(error => {
                console.error("Error while playing audio:", error);
            });
            $(".music_info_btn_play").css('background-image', 'url(' + play_svg2 + ')');
        } else {
            audio.pause();
            $(".music_info_btn_play").css('background-image', 'url(' + pause_svg2 + ')');
        }

    })

    function afterAjax() {
        setTimeout(function () {
            $('.music_play').css('background-image', 'url(' + pause_svg + ')');
            $('.music_play').click(function () {
                $(".music_info").show();
                console.log("本页共"+$('.music_play').length +"首音乐")
                var musicUrl = $(this).attr('data-music'); // 获取音乐的 URL
                $('.music_info_btn_play').attr('data-music', musicUrl);
                var covUrl = $(this).parent().attr('data-url');
                $('.music_info').css('background-image', 'url(' + covUrl + ')');
                // 如果当前正在播放其他音乐，则先暂停当前音乐的播放

                if (currentUrl !== musicUrl) {
                    audio.pause();
                    audio.currentTime = 0;
                    currentTime = 0;
                    currentUrl = musicUrl;
                }

                // 如果音乐已经播放过，将音乐播放位置设置为上一次暂停的位置
                if (currentTime > 0 && audio.src === musicUrl) {
                    audio.currentTime = currentTime;
                }

                // 将音乐的 URL 设置为 <audio> 元素的 src 属性
                if (audio.src !== musicUrl) {
                    audio.src = musicUrl;
                }

                // 如果音乐已暂停，则调用 play() 方法播放音乐；否则调用 pause() 方法暂停音乐
                if (audio.paused) {
                    setTimeout(() => {
                        audio.play().catch(error => {
                            console.error("Error while playing audio:", error);
                        });
                    }, 10);
                    $('.music_play').css('background-image', 'url(' + pause_svg + ')');
                    $(".music_info_btn_play").css('background-image', 'url(' + play_svg2 + ')');
                    $(this).css('background-image', 'url(' + play_svg + ')');
                } else {
                    audio.pause();
                    $(".music_info_btn_play").css('background-image', 'url(' + pause_svg2 + ')');
                    $(this).css('background-image', 'url(' + pause_svg + ')');
                }
            });

            // 监听音乐的暂停事件，保存当前播放位置
            audio.addEventListener('timeupdate', function () {
                if (!audio.paused) {
                    currentTime = audio.currentTime;
                }
            });

            // 监听音乐播放完毕事件
            audio.addEventListener('ended', function () {
                // 在这里执行音乐播放完毕后需要执行的代码
                console.log('音乐播放完毕！');
                $(".music_info_btn_play").css('background-image', 'url(' + pause_svg2 + ')');
                $('.music_play').css('background-image', 'url(' + pause_svg + ')');
                audio.currentTime = 0; // 将当前播放时间设置为0
                audio.pause(); // 暂停音乐
                audio.src = ""; // 将音频的src属性设置为空
                audio.load(); // 重新加载音频
                currentTime = 0; // 重置当前播放时间为 0
            });
        }, 1000);

        $('.music_info_btn_close').click(function () {
            $(".music_info").slideUp();
            $('.music_play').css('background-image', 'url(' + pause_svg + ')');
            audio.currentTime = 0; // 将当前播放时间设置为0
            audio.pause(); // 暂停音乐
            audio.src = ""; // 将音频的src属性设置为空
            audio.load(); // 重新加载音频
            currentTime = 0; // 重置当前播放时间为 0
        });
    }

    var musicInfo = document.querySelector(".music_info");
    var isDragging = false;
    var touchX = 0;
    var touchY = 0;

    musicInfo.addEventListener("touchstart", function (event) {
        isDragging = true;
        touchX = event.touches[0].clientX - musicInfo.offsetLeft;
        touchY = event.touches[0].clientY - musicInfo.offsetTop;
        musicInfo.classList.add("music_info_dragging");

    });


    document.addEventListener("touchmove", function (event) {
        if (isDragging) {
            var x = event.touches[0].clientX - touchX;
            var y = event.touches[0].clientY - touchY;
            var maxX = window.innerWidth - musicInfo.offsetWidth;
            var maxY = window.innerHeight - musicInfo.offsetHeight;
            x = Math.max(0, Math.min(x, maxX));
            y = Math.max(0, Math.min(y, maxY));
            musicInfo.style.left = x + "px";
            musicInfo.style.top = y + "px";
        }
    });


    document.addEventListener("touchend", function (event) {
        isDragging = false;
        musicInfo.classList.remove("music_info_dragging");

    });

    musicInfo.addEventListener("mousedown", function (event) {
        isDragging = true;
        mouseX = event.clientX - musicInfo.offsetLeft;
        mouseY = event.clientY - musicInfo.offsetTop;
        musicInfo.classList.add("music_info_dragging");

    });

    document.addEventListener("mousemove", function (event) {
        if (isDragging) {
            var x = event.clientX - mouseX;
            var y = event.clientY - mouseY;
            var maxX = window.innerWidth - musicInfo.offsetWidth;
            var maxY = window.innerHeight - musicInfo.offsetHeight;
            x = Math.max(0, Math.min(x, maxX));
            y = Math.max(0, Math.min(y, maxY));
            musicInfo.style.left = x + "px";
            musicInfo.style.top = y + "px";
        }
    });

    document.addEventListener("mouseup", function (event) {
        isDragging = false;
        musicInfo.classList.remove("music_info_dragging");
    });


    //轮播图
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


    //pjax
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
});