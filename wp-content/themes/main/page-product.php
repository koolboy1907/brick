<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 10:03 AM
 */
get_header();
?>
<section class="wapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-9 col-left-big">
                <div class="content">
                    <div class="title-article-1"><h3>Sản phẩm</h3>
                    </div>
                    <div class="box-product-main">
                        <ul>
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args_product = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'paged' => $paged,
                                'post_status' => 'publish',
                            );
                            $products = new WP_Query($args_product);
                            ?>
                            <?php while ($products->have_posts()) : $products->the_post(); ?>
                                <li class="col-md-4 col-xs-6  wow animated animated" data-wow-duration="2s"
                                    data-wow-delay="0.3s"
                                    style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s;">
                                    <div class="project-item ">
                                        <a href="<?php the_permalink(); ?>">
                                            <img alt="<?php the_title(); ?>" src="<?= getUrlPhoto(''); ?>">
                                        </a>
                                        <div class="name-project">
                                            <a title="<?php the_title(); ?>" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; wp_reset_postdata();?>
                        </ul>
                    </div>
                    <div class="row pagination2 clearfix">
                        <div class="pagination">
                            <?php
                            $total_pages = $products->max_num_pages;
                            if ($total_pages > 1){
                                $current_page = max(1, get_query_var('paged'));
                                echo paginate_links(array(
                                    'base' => get_pagenum_link(1) . '%_%',
                                    'format' => '/page/%#%',
                                    'prev_text'    => '<',
                                    'next_text'    => '>',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                ));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
