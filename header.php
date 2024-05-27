<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

    <?php if(is_front_page()) :?>
        <title>MECHANOCROSS | メカノケミカル有機合成で産業に変革を</title>
    <?php elseif(is_404()): ?>
        <title>ページが見つかりませんでした | MECHANOCROSS</title>
    <?php else: ?>
        <title><?php echo the_title(); ?> | MECHANOCROSS</title>
    <?php endif; ?>

    <?php wp_head(); ?>

    <!-- Adobe Fonts -->
    <script>
    (function(d) {
        var config = {
        kitId: 'gie1tmv',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>

</head>

<body <?php body_class(); ?>>

    <!-- Start header -->
    <header class="header">
        <div class="header__left flex">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-main-hor.svg" alt="ロゴ">
           </a>
        </div>
        <div class="header__right">
            <nav>
                <ul class="flex">
                    <li>
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <span>TOP</span>
                        </a>
                    </li>
                    <li class="drop-menu">
                        <a href="<?php echo esc_url( home_url('/') ); ?>about-us/" class="flex hide_tab">
                            <span>私たちについて</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bottom-arrow-main.svg" alt="下矢印のアイコン">
                        </a>
                        <span class="flex show_tab">
                            <a href="<?php echo esc_url( home_url('/') ); ?>about-us/">私たちについて</a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bottom-arrow-main.svg" alt="下矢印のアイコン">
                        </span>
                        <div class="drop-menu-item">
                            <ul class="grid">
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>about-us/#philosophy">
                                        <span>企業理念</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>about-us/#company">
                                        <span>会社概要</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>about-us/#history">
                                        <span>会社沿革</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-menu">
                        <span class="flex">
                            <span>事業紹介</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bottom-arrow-main.svg" alt="下矢印のアイコン">
                        </span>
                        <div class="drop-menu-item">
                            <ul class="grid">
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>what-we-do/">
                                        <span>製品・できること</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>business-model/">
                                        <span>ビジネスモデル</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>research/">
                                        <span>メカノケミカル<br class="hide_tab">有機合成実装研究会</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-menu">
                        <a href="<?php echo esc_url( home_url('/') ); ?>news/" class="flex hide_tab">
                            <span>お知らせ</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bottom-arrow-main.svg" alt="下矢印のアイコン">
                        </a>
                        <span class="flex show_tab">
                            <a href="<?php echo esc_url( home_url('/') ); ?>news/">お知らせ</a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/bottom-arrow-main.svg" alt="下矢印のアイコン">
                        </span>
                        <div class="drop-menu-item">
                            <ul class="grid">
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>news/category/notice/">
                                        <span>ニュース</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>news/category/press_release/">
                                        <span>プレスリリース</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印のアイコン">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url('/') ); ?>sustainability/">
                            <span>サステイナビリティ</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a href="<?php echo esc_url( home_url('/') ); ?>contact/" class="flex">
                            <span>お問い合わせ</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white.svg" alt="右矢印">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="menu__bar">
            <div class="menu__bar__trigger">
                <span></span>
                <span></span>
                <span></span>
            </div>        
        </div>
    </header>
    <!-- End header -->