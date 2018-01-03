<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 10:00 AM
 */
get_header();
?>
<section class="wapper">
    <section class="box-section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-big">
                        <h2>Sản phẩm</h2>
                        <a href="./san-pham">Gạch bê tông cốt liệu secoin</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-product-h">
            <div class="container">
                <div class="row">
                    <?php
                    $args = array(
                        'type' => 'post',
                        'child_of' => 0,
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => 0,
                        'hierarchical' => 0,
                        'number' => 4,
                        'taxonomy' => 'category',
                        'pad_counts' => false
                    );
                    $categories = get_categories($args);
                    $i = 0;
                    foreach ($categories as $category) {
                        debug($image['url']);
                    }
                    ?>
                    <?php foreach ($categories as $category) : ?>
                        <?php
                        $i++;
                        $image = get_field('product_image', $category->taxonomy . '_' . $category->term_id);
                        ?>
                        <div class="col-md-3 col-xs-6 product-li fadeIn wow animated" data-wow-duration="<?= $i; ?>s"
                             data-wow-delay="0.3s">
                            <div class=" product-item">
                                <a href="<?= get_term_link($category->slug, 'category'); ?>">
                                    <img alt="<?= $category->name; ?>" src="<?= $image['url']; ?>">
                                    <div class="product_name"><?= $category->name; ?></div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="about-group">
        <div class="container">
            <div class="row">
                <?php
                $the_slug = 'gioi-thieu';
                $args_page = array(
                    'name' => $the_slug,
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'numberposts' => 1
                );
                $about_page = new WP_Query($args_page);
                ?>
                <?php while ($about_page->have_posts()) : $about_page->the_post(); ?>
                <div class="col-md-4 col-sm-4">
                    <figure class="img-ab-h fadeIn wow animated" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href="<?php the_permalink();?>">
                            <img alt=" Giới thiệu chung" src="<?= getUrlPhoto('');?>" class="fadeIn wow animated" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="bg-about"></div>
                        </a>
                    </figure>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="box-des-ab fadeIn wow animated" data-wow-duration="3s" data-wow-delay="0.3s">
                        <div class="title-big">
                            <h2>SECOIN - Gạch bê tông </h2>
                            <a href="<?php the_permalink();?>">Giới thiệu chung</a>
                        </div>
                        <div class="brief-ab-h">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="ab-others-h">
                        <ul class="list-inline">
                            <li>
                                <img alt="Sứ mệnh tầm nhìn"
                                     src="<?php bloginfo('template_url'); ?>/app/css/images/about/14705208002a1eadd2ece4ce14173c6f.png">
                                <a href="./gioi-thieu/su-menh-tam-nhin-9.html">Sứ mệnh tầm nhìn</a>
                            </li>
                            <li>
                                <img alt="Hình ảnh nhà máy"
                                     src="<?php bloginfo('template_url'); ?>/app/css/images/about/1470520800f751a706611729be5fec8a.png">
                                <a href="gioi-thieu/hinh-anh-nha-may">Hình ảnh nhà máy</a>
                            </li>
                            <li>
                                <img alt="Chứng nhận chất lượng"
                                     src="<?php bloginfo('template_url'); ?>/app/css/images/about/14705208007179f4ac8a34e65a5af281.png">
                                <a href="./gioi-thieu/chung-nhan-chat-luong-11.html">Chứng nhận chất lượng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
    </section>
    <section class="box-section-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="box-4 box-4-left fadeIn wow animated" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="title-big-2">
                            <h2>Dự án</h2>
                        </div>
                        <div id="amazingslider-wrapper-4">
                            <div class="box-main-4" id="amazingslider-4">
                                <ul class="amazingslider-slides amazingslider-slides-4">
                                    <?php
                                    $args_project = array(
                                        'post_type' => 'project',
                                        'showposts' => 5,
                                        'post_status' => 'publish',
                                    );
                                    $projects = new WP_Query($args_project);
                                    ?>
                                    <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                                        <li>
                                            <img src="<?= getUrlPhoto('project-slide');?>" alt="<?php the_title();?>" title="<?php the_title();?>"/>
                                            <div class="box-text-slide">
                                                <h3>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <button class="as-btn-blue-medium"><?php the_title(); ?></button>
                                                    </a>
                                                </h3>
                                            </div>
                                        </li>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 fadeIn wow animated" data-wow-duration="3s"
                     data-wow-delay="0.3s">
                    <div class="box-4 box-4-right">
                        <div class="title-big-2">
                            <h2>Download</h2>
                        </div>
                        <div class="box-main-4">
                            <figure>
                                <a href="./e-catalogue">
                                    <img alt="name" src="<?php bloginfo('template_url'); ?>/publics/images/1472058000catalogue.jpg">
                                </a>
                            </figure>
                            <h3><a href="./e-catalogue">Catalogue Gạch Bê tông</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- content popup -->
<?php get_footer(); ?>
