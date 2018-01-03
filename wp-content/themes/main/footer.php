<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 10:01 AM
 */
?>
<script type="text/javascript">/* <![CDATA[ */
    (function ($) {
        $(document).ready(function () {
            var $notify = $('.popup-with-move-anim');
            if ($notify.length >= 1) {
                if ((($($notify.attr('href') || '').html() || '').length >= 16) && (($.cookie('user-press-btn-ad-popup') || '') != 'on')) {
                    $notify.magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-slide-bottom'
                    }).trigger('click');

                }
                /* cookie log status: use click close popup */
                $('button.mfp-close').on('click', function () {
                    $.cookie('user-press-btn-ad-popup', 'on', {path: '/'});
                });
            }

        });
    })(jQuery);
    /* ]]> */</script>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="box-ft-1">
                    <address class="address-footer">
                        <div class="box-address-main">
                            <div class="north row-address fadeIn wow animated" data-wow-duration="1s"
                                 data-wow-delay="0.3s">
                                <img alt="59 Hàng Chuối, Quận Hai Bà Trưng, Hà Nội"
                                     src="<?php bloginfo('template_url'); ?>/publics/images/layout/icon-address.png">
                                <div class="address-right">
                                    59 Hàng Chuối, Quận Hai Bà Trưng, Hà Nội
                                </div>
                            </div>
                            <div class="middle row-address fadeIn wow animated" data-wow-duration="2s"
                                 data-wow-delay="0.3s">
                                <img alt="477 Điện Biên Phủ, Q.Thanh Khê, Đà Nẵng"
                                     src="<?php bloginfo('template_url'); ?>/publics/images/layout/icon-address.png">
                                <div class="address-right">
                                    477 Điện Biên Phủ, Q.Thanh Khê, Đà Nẵng
                                </div>
                            </div>
                            <div class="south row-address fadeIn wow animated" data-wow-duration="3s"
                                 data-wow-delay="0.3s">
                                <img alt="Số 9 đường D2 , Saigon Pearl, 92 Nguyễn Hữu Cảnh, Phường 22, Q. Bình Thạnh, TP. Hồ Chí Minh"
                                     src="<?php bloginfo('template_url'); ?>/publics/images/layout/icon-address.png">
                                <div class="address-right">
                                    Số 9 đường D2 , Saigon Pearl, 92 Nguyễn Hữu Cảnh, Phường 22, Q. Bình Thạnh, TP. Hồ
                                    Chí Minh
                                </div>
                            </div>
                        </div>
                    </address>
                    <div class="box-social-network">
                        <div class="box-main-social-main">
                            <a target="_blank" href="https://www.facebook.com/GachKhongNungSecoin" title="Facebook"
                               alt="Facebook" class="a-social facebook"></a>
                            <a target="_blank" href="https://plus.google.com/u/0/105550190923906358821" title="google"
                               alt="google" class="a-social glus"></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCTDmfj7gvNjm28wJHcL2cVQ"
                               title="youtube" alt="youtube" class="a-social youtube"></a>
                            <a target="_blank" href="https://twitter.com/secoinblock" title="twitter" alt="twitter"
                               class="a-social twitter"></a>
                            <a target="_blank" href="https://www.pinterest.com/secoinblock/" title="pinterest"
                               alt="pinterest" class="a-social skype"></a>
                            <a target="_blank"
                               href="https://www.linkedin.com/company/secoin-building-material-corporation"
                               title="Linkedin" alt="Linkedin" class="a-social yahoo"></a>
                            <a target="_blank" href="https://www.instagram.com/secoinblock/" title="instagram"
                               alt="instagram" class="a-social zalo"></a>
                            <a target="_blank" href="http://secointile.houzz.com/" title="houzz" alt="houzz"
                               class="a-social ttt"></a>
                        </div>
                    </div>
                    <p class="copy-right">Copyright © 2016 Công ty Cồ Phần Secoin</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="box-faq-footer">
                    <h3 class="title-4">Hỏi đáp</h3>
                    <ul>
                        <?php
                        global $post;
                        $args_question = array(
                            'post_type' => 'question',
                            'showposts' => 3,
                            'post_status' => 'publish',
                        );
                        $questions = get_posts($args_question);
                        $i = 0;
                        ?>
                        <?php foreach($questions as $post) :?>
                            <?php
                            $i++;
                            setup_postdata($post);
                            ?>
                            <li class="fadeIn wow animated" data-wow-duration="<?= $i+1;?>s" data-wow-delay="0.3s">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <img alt="<?php the_title();?>" src="<?= getUrlPhoto('');?>">
                                    </a>
                                </figure>
                                <h3><a href="<?php the_permalink();?>"><?= $i;?>. <?php the_title(); ?></a></h3>
                            </li>
                        <?php endforeach; wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-receive-email">
                    <h3 class="title-4 fadeIn wow animated" data-wow-duration="0.5s" data-wow-delay="0.3s">Hotline</h3>
                    <a class="number-phone-ft" href="tel:+(028) 6655 8888">(028) 6655 8888</a>
                    <a class="number-phone-ft" href="tel:+(024) 6655 8888">(024) 6655 8888</a>
                    <a class="number-phone-ft" href="tel:+(0236) 652 7777">(0236) 652 7777</a>
                    <p>Hỗ trợ trong giờ hành chánh</p>
                    <div class="box-input-receive-email fadeIn wow animated" data-wow-duration="3s"
                         data-wow-delay="0.3s">
                        <form action="/receive_messages" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Đăng ký nhận tin: </label>
                            </div>
                            <div class="form-group input-receive-email">
                                <input name="email_nhantin" class="input-text" type="text"
                                       placeholder="Nhập email của bạn">
                                <input name="dangkynhantin" class="input-submit" type="submit" value=" ">
                            </div>
                        </form>
                    </div>
                    <div class="link-website fadeIn wow animated" data-wow-duration="3s" data-wow-delay="0.3s">
                        <!--partnert-->
                        <div class="partner">
                            <div class="form-group">
                                <label>Liên kết website</label>
                            </div>
                            <div class="slide-amazingcarousel-2">
                                <!-- Insert to your webpage where you want to display the carousel -->
                                <div id="amazingcarousel-container-2">
                                    <div id="amazingcarousel-2">
                                        <div class="amazingcarousel-list-container">
                                            <ul class="amazingcarousel-list">
                                                <?php
                                                $args_partner = array(
                                                    'post_type' => 'partner',
                                                    'showposts' => -1,
                                                    'post_status' => 'publish',
                                                );
                                                $partners = new WP_Query($args_partner);
                                                ?>
                                                <?php while ($partners->have_posts()) : $partners->the_post(); ?>
                                                    <li class="amazingcarousel-item">
                                                        <div class="amazingcarousel-item-container">
                                                            <div class="amazingcarousel-image">
                                                                <?php $link_partner = get_field( "link_partner" ); ?>
                                                                <a target="_blank" href="<?= $link_partner;?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                                                                    <img src="<?= getUrlPhoto('');?>" alt="<?php the_title();?>"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endwhile; wp_reset_postdata(); ?>
                                            </ul>
                                            <div class="amazingcarousel-prev"></div>
                                            <div class="amazingcarousel-next"></div>
                                        </div>
                                        <div class="amazingcarousel-nav"></div>
                                    </div>
                                </div>
                                <!-- End of body section HTML codes -->
                            </div>
                        </div>
                        <!--end partner-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="certify">
                    <table border="1" cellpadding="1" cellspacing="1" style="width:800px">
                        <tbody>
                        <tr>
                            <td>
                                <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><a
                                                    href="/gioi-thieu/quy-dinh-va-chinh-sach-19.html">Điều khoản &amp; Điều kiện</a></span></span>
                                </p>

                                <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">ĐVCQ: CÔNG TY CỔ PHẦN SECOIN</span></span>
                                </p>

                                <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">MSDN: 0104260436 cấp 17/12/2009 bởi Sở KH&amp;ĐT HCM.</span></span>
                                </p>

                                <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Số 9 đường D2, Saigon Pearl, 92 Nguyễn Hữu Cảnh, P. 22, Q. Bình Thạnh, TP. HCM</span></span>
                                </p>

                                <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Tel: (84-28) 7301 0909 / Fax: (84-28) 6298 0909 /&nbsp;Email:&nbsp;contact(at)secoin.vn</span></span>
                                </p>
                            </td>
                            <td><a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=26735"
                                   style="line-height: 20.8px;" target="_blank"><img
                                            alt="secoinblock.com Đã thông báo Bộ Công Thương."
                                            src="<?php bloginfo('template_url'); ?>/upload/images/20150827110756-dathongbao.png"
                                            style="float:right; height:70px; width:185px"/></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <span class="gotop" id="back-top"><a href="#top"></a></span>
</footer>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/app/css/js/slide/carouselengine/initcarousel-2.css" type="text/css" />
<?php wp_footer(); ?>
<script type="text/javascript">
    $(".fancybox").fancybox();
    jQuery(document).ready(function ($) {
        // initialize video
        // initialize FlexNav
        $(".flexnav").flexNav();
    });
    $(document).ready(function () {
        // hide #back-top first
        $("#back-top").hide();
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });

    });
    $(document).ready(function (e) {
        $('#logo-menu').hide();
        $('.menu-icon-cart').hide();
        $('.toggle-search-fix').on('click', function () {
            $('.search-fixed').slideToggle(300);
        });
        $('.back-search-mobile').on('click', function () {
            $('.search-fixed').css({'display': 'none'});
        });
        $('#language').on('click', function () {
            $('.lang_active').css('display', 'none');
            $('ul.language li.lang').css('display', 'block');
        });
    });
    //Toggle answer faqs
    $('.box-faqs-title a').click(function () {
        box = $(this).parent().parent();
        content = box.find('.content-faqs-answer');
        content.slideToggle(200);
    });
    function fullScreen(theURL) {
        winWidth = 800; // sets a default width for browsers who do not understand screen.width below
        winheight = 800; // ditto for height
        if (screen) { // weeds out older browsers who do not understand screen.width/screen.height
            winWidth = screen.width;
            winHeight = screen.height;
        }
        newWindow = window.open(theURL, 'newWin', 'toolbar=no,location=no,scrollbars=no,resizable=yes,width=' + winWidth + ',height=' + winHeight + ',left=0,top=0');
        newWindow.focus();
        //window.open(theURL, '', 'fullscreen=no, scrollbars=auto');
    }
</script>
<script>
    $(document).ready(function (e) {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 550) {
                $('.header-bottom').addClass('header-fixed');
            }
            else {
                $('.header-bottom').removeClass('header-fixed');
            }
        });
    });
</script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB0mePBVRYd_hfBcDfbT-qZjEB65W5SfY&sensor=false"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-82495907-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>