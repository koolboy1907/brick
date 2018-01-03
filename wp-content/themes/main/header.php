<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 10:01 AM
 */
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SECOIN - Gạch bê tông</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/wow.js"></script>
    <script>new WOW().init();</script>
</head>
<body>
<header class="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-left fadeIn wow animated" data-wow-duration="2s" data-wow-delay="0.3s">
                        <img alt="hotline" src="<?php bloginfo('template_url'); ?>/publics/images/layout/phone-top.png"/>
                        <span class="top-bar-text phone-three-area "><span class="pf-dt text-hotline-h">Hotline</span>
                               <a class="h-firt-hotline" href="tel:(028) 6655 8888">(028) 6655 8888 | </a>
                                    <a class="h-firt-hotline" href="tel:(024) 6655 8888">(024) 6655 8888 | </a>
                                    <a class="" href="tel:(0236) 652 7777">(0236) 652 7777 | </a>
          </span>
                        <span class="pf-dt ">  <i class="fa fa-envelope"></i>
		<span class="top-bar-text"><a href="mailTo:contact@secoin.vn">contact@secoin.vn</a></span>
	</span>
                    </div>
                    <div class="top-bar-right-main fadeIn wow animated" data-wow-duration="3s" data-wow-delay="0.3s">
                        <!-- start search -->
                        <div class="button-search">
                            <a href="javascript:void(0)" class="glyphicon glyphicon-search toggle-search-fix"></a>
                            <div class="search-fixed">
                                <div class="box-search">
                                    <i class="fa fa-arrow-circle-left back-search-mobile"></i>
                                    <form method="post" class="form-search" action="/tim-kiem"
                                          enctype="multipart/form-data">
                                        <input class="input-text" type="text" placeholder="Tìm kiếm"
                                               name="keywork_search" value="">
                                        <input name="searchsubmit" type="submit" class="input-search " value="Tìm kiếm">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end search -->
<!--                        <ul id="language" class="language list-inline">-->
<!--                            <li class="lang_active active">-->
<!--                                <a href="javascript:void(0)"><img src="publics/images/layout/vn.png"></a></li>-->
<!--                            <li class="lang"><a href="./lang/vi"><img src="publics/images/layout/vn.png" alt="vn"> </a>-->
<!--                            </li>-->
<!--                            <li class="lang"><a href="./lang/en"><img src="publics/images/layout/en.png" alt="en"></a>-->
<!--                            </li>-->
<!--                            <i class="fa fa-angle-down"></i>-->
<!--                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/app/css/js/slide/sliderengine/amazingslider-1.css" type="text/css" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/slide/sliderengine/initslider-1.js"></script>
    <div class="slider-top">
        <!-- Insert to your webpage where you want to display the slider -->
        <div id="amazingslider-wrapper-1">
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <?php
                    $args = array(
                        'post_type' => 'slider',
                        'showposts' => -1,
                        'post_status' => 'publish',
                    );
                    $slides = new WP_Query($args);
                    ?>
                    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                        <li>
                            <img src="<?= getUrlPhoto('');?>" alt="<?php the_title();?>" title="<?php the_title();?>" data-description="<?= wp_strip_all_tags(get_the_content());?>">
                            <a href="d"></a>
                        </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
        <!-- End of body section HTML codes -->
    </div>
    <div class="header-bottom">
        <div class="container bg-banner">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <h1><a href="/"><img style="z-index: 99;position: relative;" width="auto"
                                             src="<?php bloginfo('template_url'); ?>/upload/files/logo-secoinblock-tv-22_12_16.png"
                                             alt="SECOIN - Gạch bê tông"/></a></h1>
                    </div>
                    <nav id="nav-top" class="menu-main">
                        <div class="menu-button">
                            <a class="toggleMenu" href="#">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </div>
                        <ul data-breakpoint="800" class="flexnav">

                            <li class=" active"><a class=" active" href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class=""><a class="" href="gioi-thieu.html">Giới thiệu</a></li>
                            <li class=""><a class="" href="san-pham.html">Sản phẩm</a>
                                <ul>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a
                                                href="/danh-muc-san-pham/gach-block-rong-xay-tuong-128.html">Gạch block
                                            rỗng xây tường</a>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a
                                                href="/danh-muc-san-pham/gach-lo-gach-ong-truyen-thong-127.html">Gạch lỗ
                                            (gạch ống) truyền thống</a>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a
                                                href="/danh-muc-san-pham/gach-the-gach-dinh-truyen-thong-125.html">Gạch
                                            thẻ (gạch đinh) truyền thống</a>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a
                                                href="/danh-muc-san-pham/gach-lat-he-gach-bai-do-xe-154.html">Gạch lát
                                            hè & gạch bãi đỗ xe</a>
                                </ul>

                            </li>
                            <li><a class="" href="thong-tin-ky-thuat.html">Thông tin kỹ thuật</a></li>
                            <li><a class="" href="tai-lieu.html">Tài liệu</a></li>
                            <li class=""><a class="" href="du-an.html">Dự án</a>
                                <ul>
                                    <li><a href="/danh-muc-du-an/gach-xay-tuong-19.html">Gạch xây tường</a></li>
                                    <li><a href="/danh-muc-du-an/gach-lat-he-72.html">Gạch lát hè</a></li>
                                </ul>
                            <li>
                            <li><a class="" href="video.html">Video</a></li>
                            <li><a class="menu_first" href="faqs.html">Hỏi Đáp</a>
                                <ul>
                                    <li><a href="/faqs/gach-be-tong-cot-lieu-1.html">Gạch bê tông cốt liệu</a></li>
                                    <li><a href="/faqs/gach-lat-he-tu-chen-gach-bai-do-xe-2.html">Gạch lát hè tự chèn,
                                            Gạch bãi đỗ xe</a></li>
                                </ul>
                            </li>
                            <li class=""><a class="" href="lien-he.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /header -->
<?php if(is_home()): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/app/css/css/popup-home.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/jquery.popup.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/slide/sliderengine/initslider-4.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/app/css/js/jq-cookie.js"></script>
<?php endif; ?>


