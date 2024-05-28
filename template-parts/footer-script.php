<script>
    jQuery(function($){
        <?php if ( is_front_page() ): ?>
        {
            $(document).ready(function(){
                var angle = 0;
                var updateCircle = function() {
                    var radiusSm = $('.line.sm').width() / 2;
                    var radiusMd = $('.line.md').width() / 2;
                    var radiusLg = $('.line.lg').width() / 2;
                    $(".line.sm .circle").css({
                        transformOrigin: `0 ${radiusSm}px`
                    });
                    $(".line.md .circle").css({
                        transformOrigin: `0 ${radiusMd}px`
                    });
                    $(".line.lg .circle").css({
                        transformOrigin: `0 ${radiusLg}px`
                    });
                };
            
                setInterval(function(){
                    angle += .5;
                    $(".circle").css({
                        transform: `rotate(${angle}deg)`
                    });
                }, 20);

                updateCircle(); // 初期設定
                $(window).resize(updateCircle); // リサイズ時に更新
            });
        }
        {
            const swiper = new Swiper('#swiper', {
                spaceBetween: 20,
                slidesPerView: 1.1,
                loop: false,
                allowTouchMove: true,
                speed: 300,
                autoplay: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    421: {
                        slidesPerView: 1.3,
                        spaceBetween: 30
                    },
                    769: {
                        spaceBetween: 50,
                        slidesPerView: 2,
                    }
                }
            },false);
        }
        <?php elseif (is_page('research')):?>
        {
            const swiper = new Swiper('#swiper', {
                loop: true, // ループ有効
                spaceBetween: 40,
                slidesPerView: 2.5, // 一度に表示する枚数
                speed: 6000, // ループの時間
                allowTouchMove: false, // スワイプ無効
                autoplay: {
                    delay: 0, // 途切れなくループ
                },
                breakpoints: {
                    421: {
                        slidesPerView: 4, // 一度に表示する枚数
                        spaceBetween: 50,
                        speed: 10000, // ループの時間
                    },
                    769: {
                        slidesPerView: 5, // 一度に表示する枚数
                        spaceBetween: 80,
                        speed: 10000, // ループの時間
                    }
                }
            },false);
        }
        <?php elseif (is_page('recruit')):?>
        {
            const swiper = new Swiper('#swiper-recruit', {
                loop: true, // ループ有効
                spaceBetween: 20,
                slidesPerView: 1.5, // 一度に表示する枚数
                speed: 6000, // ループの時間
                allowTouchMove: false, // スワイプ無効
                autoplay: {
                    delay: 0, // 途切れなくループ
                },
                breakpoints: {
                    421: {
                        slidesPerView: 2.3, // 一度に表示する枚数
                        spaceBetween: 20,
                        speed: 10000, // ループの時間
                    },
                    769: {
                        slidesPerView: 3.6, // 一度に表示する枚数
                        spaceBetween: 20,
                        speed: 10000, // ループの時間
                    }
                }
            },false);
        }
        <?php endif; ?>
    });
</script>