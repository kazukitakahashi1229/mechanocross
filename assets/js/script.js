jQuery(function($) {


    // ======================================================
    // header scroll
    // ======================================================
    {
        $(window).scroll(function() {
            var headerScroll = $('.header');
            var scrollPos = $(window).scrollTop();
            if (window.matchMedia('(min-width: 769px)').matches) {
                if(scrollPos > 0) {
                    headerScroll.addClass('scrolled');
                } else {
                    headerScroll.removeClass('scrolled');
                }
            }
        });
    }

    // ======================================================
    // Menu - Hamburger
    // ======================================================
    {
        // ハンバーガーメニュー
        var menuBar = $('.menu__bar');
        var menuTrigger = $('.menu__bar__trigger');
        // グローバルナビコンテンツはここ
        var header = $('.header');
        var headerNav = $('.header__right');
        var dropMenuItem = $(".drop-menu > span > span, .drop-menu > span > img");

        menuBar.click(function() {
            if(menuTrigger.hasClass('active')) {
                // メニューを閉じる
                menuTrigger.removeClass('active');

                header.removeClass('active');

                // メニュー閉じたらグロナビをfadeOut
                headerNav.slideUp();

                if(dropMenuItem.hasClass('open')) {
                    dropMenuItem.removeClass('open');
                    $('.drop-menu-item').slideUp(300);
                }

                // メニュー閉じたらbody固定解除
                bodyFixReset()

            } else {

                // メニューを開く
                menuTrigger.addClass('active');

                header.addClass('active');

                // メニュー開いたらグロナビをfadeIn
                headerNav.slideDown();

                // メニュー開いたらbodyスクロール無効
                bodyFix();

            }
        });

        // グローバルナビの要素がクリックされた時の処理
        if (window.matchMedia('(max-width: 768px)').matches) {
            $('.drop-menu-item a').click(function() {

                // メニューを閉じる
                menuTrigger.removeClass('active');
                header.removeClass('active');
    
                // メニュー閉じたらグロナビをfadeOut
                headerNav.slideUp();
                
                // メニュー閉じたらbody固定解除
                bodyFixReset()

                if(dropMenuItem.hasClass('open')) {
                    dropMenuItem.removeClass('open');
                    $('.drop-menu-item').slideUp(300);
                }
    
            });
        } 

        //以下、bodyを固定する関数
        var bodyElm = $('body');
        var scrollPosi;
        function bodyFix() {
        scrollPosi = $(window).scrollTop();
        bodyElm.css({
            'position': 'fixed',
            'width': '100%',
            'z-index': '1',
            'top': -scrollPosi
        });
        }

        //以下、body固定を解除する関数
        function bodyFixReset() {
        bodyElm.css({
            'position': 'relative',
            'width': 'auto',
            'top': 'auto'
        });

        //scroll位置を調整
        $('html, body').scrollTop(scrollPosi);
        }
    }
    
    // ======================================================
    // header drop-menu
    // ======================================================
    {
        var dropMenu = $(".header__right nav ul li.drop-menu");
        var dropMenuItemImg = $(".drop-menu > span > img");
        var dropMenuItemSpan = $(".drop-menu > span > span");

        if (window.matchMedia('(min-width: 769px)').matches) {
            dropMenu.hover(
                function() {
                  $(".drop-menu-item:not(:animated)", this).fadeIn(300);
                  $(this).find('img').addClass('open');
                },
                function() {
                  $(".drop-menu-item", this).fadeOut(300);
                  $(this).find('img').removeClass('open');
                }
            );
        } else {
            dropMenuItemImg.click(function() {
                if($(this).hasClass('open') || $(this).siblings(dropMenuItemSpan).hasClass('open') ) {
                    $(this).removeClass('open');
                    $(this).siblings(dropMenuItemSpan).removeClass('open');
                    $(this).parents('.drop-menu').find('.drop-menu-item').slideUp(300);
                } else {
                    $(this).addClass('open');
                    $(this).siblings(dropMenuItemSpan).addClass('open');
                    $(this).parents('.drop-menu').find('.drop-menu-item').slideDown(300);
                }
            });
            dropMenuItemSpan.click(function() {
                if($(this).hasClass('open') || $(this).siblings(dropMenuItemImg).hasClass('open') ) {
                    $(this).removeClass('open');
                    $(this).siblings(dropMenuItemImg).removeClass('open');
                    $(this).parents('.drop-menu').find('.drop-menu-item').slideUp(300);
                } else {
                    $(this).addClass('open');
                    $(this).siblings(dropMenuItemImg).addClass('open');
                    $(this).parents('.drop-menu').find('.drop-menu-item').slideDown(300);
                }
            });
        }
    }

    
   
    // ======================================================
    // Smooth Scroll
    // ======================================================
    {
        $(document).ready(function(){
            // ページ外アンカーリンク
            var urlHash = location.hash;
            if( urlHash ) {
                setTimeout(function () {
                    $('body,html').stop().scrollTop(0);
                }, 0);
                setTimeout(function () {
                    scrollToAnkerEx(urlHash);
                }, 100);
            }
            // 関数：スムーススクロール ページ外
            function scrollToAnkerEx(hash) {
                var target = $(hash);
                var headerScrolled = $('.header.scrolled').height();
                var header = $('.header').height();
                // var position = target.offset().top - header;
                if (window.matchMedia('(max-width: 768px)').matches) {
                    var position = target.offset().top - header;
                } else {
                    var position = target.offset().top - 80;
                }
                $('body,html').stop().animate({ scrollTop:position }, 1000);
            }
            //ページ内アンカーリンク
            $('a[href*="#"]').click(function() {
                var target = $(this.hash === '#' || '' ? 'html' : this.hash);
                if (!target.length) return;
                var header = $('header').height();
                // var position = target.offset().top - header;
                if (window.matchMedia('(max-width: 768px)').matches) {
                var position = target.offset().top - 60;
                } else {
                var position = target.offset().top - 80;
                }
                $('html, body').animate({ scrollTop: position }, 1000, 'swing');
                return false;
            });
        });
    }

    

    // ======================================================
    // fade-in animation
    // ======================================================
    {
        $.fn.acs = function (options) {
            const elements = this;
            const defaults = {
                screenPos: 0.8,
                className: 'js-anime-active'
            };
            const setting = $.extend(defaults, options);

            $(window).on('load scroll', function () {
                add_class_in_scrolling() 
            });

            function add_class_in_scrolling() {
                const winScroll = $(window).scrollTop();
                const winHeight = $(window).height();
                const scrollPos = winScroll + (winHeight * setting.screenPos);
        
                if (elements.offset().top < scrollPos) {
                    elements.addClass(setting.className);
                }
            }
        }
        $('.js-anime').each(function () {
            $(this).acs();
        });

        $(document).ready(function() {
            var animeCont = $('.js-anime');

            animeCont.each(function() {
                
                var cont = $(this);
                setTimeout(function() { // 3秒後に実行
                    if (!cont.hasClass('js-anime-active') && cont.hasClass('fv-cont')) {
                        animeForceActive();
                    }
                }, 1000); // 3000ミリ秒 = 3秒
            })
            function animeForceActive() {
                animeCont.addClass('js-anime-active');
            }
        });

    }


});

