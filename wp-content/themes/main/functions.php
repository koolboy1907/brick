<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 10:00 AM
 */
define('THEME_URL', get_stylesheet_directory());
define('THEME_URI_PATH', trailingslashit(get_template_directory_uri()));
define('CORE', THEME_URL . '/core' );
define('MAX_LENGTH_TITLE', 15 );
require_once( CORE . '/init.php' );

function theme_setup() {
    $language_folder = THEME_URL . '/languages';
    load_theme_textdomain('td',$language_folder );
    /* Insert RSS Feed links in <head>*/
//    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('project-slide',411,270,true);
    add_theme_support('title-tag');
    add_theme_support('post-formats',
        array(
            'video',
            'image',
            'audio',
            'gallery'
        )
    );

    register_nav_menu ('primary-menu',__('Primary menu', 'td') );
}
add_action ('init','theme_setup');

function widgets_init() {
    /* Sidebar Banner Homepage */
    register_sidebar( array(
        'name'          => __('Sidebar Left', 'td'),
        'id'            => 'sidebar-left',
        'description'   => 'Sidebar left',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
/*Add stylesheet and Javascript*/
function load_stylesheet_and_scripts() {
    wp_enqueue_style('ie',THEME_URI_PATH . 'app/css/css/ie.css');
    wp_enqueue_style('flexnav',THEME_URI_PATH . 'app/css/flexnav/flexnav.css');
    wp_enqueue_style('bootstrap',THEME_URI_PATH . 'app/css/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('ui',THEME_URI_PATH . 'app/css/css/jquery-ui.css');
    wp_enqueue_style('font-awesome',THEME_URI_PATH . 'app/css/font-awesome.min.css');
    wp_enqueue_style('animate',THEME_URI_PATH . 'app/css/css/animate.css');
    wp_enqueue_style('wowslider',THEME_URI_PATH . 'app/css/js/slide/wowslider/wowslider.css');
    wp_enqueue_style('main',THEME_URI_PATH . 'app/css/css/style.css');
    wp_enqueue_style('fancybox',THEME_URI_PATH . 'publics/js/jquery.fancybox.css');
    wp_enqueue_style('custom',THEME_URI_PATH . 'app/css/restyle.css');
    wp_enqueue_script('jquery',THEME_URI_PATH . 'app/css/bootstrap/js/bootstrap.min.js','',false,true);
    wp_enqueue_script('fancybox',THEME_URI_PATH . 'publics/js/jquery.fancybox.js','',false,true);
    wp_enqueue_script('flexnav',THEME_URI_PATH . 'app/css/flexnav/jquery.flexnav.js','',false,true);
    wp_enqueue_script('amazingslider',THEME_URI_PATH . 'app/css/js/slide/sliderengine/amazingslider.js','',false,true);
    wp_enqueue_script('amazingcarousel',THEME_URI_PATH . 'app/css/js/slide/carouselengine/amazingcarousel.js','',false,true);
    wp_enqueue_script('initcarousel',THEME_URI_PATH . 'app/css/js/slide/carouselengine/initcarousel-2.js','',false,true);
}
add_action( 'wp_enqueue_scripts', 'load_stylesheet_and_scripts' );
/* Get thumbnail url*/
function getUrlPhoto($size){
    global $post;
    if( $size== '' ) {
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        return esc_url($url);
    } else {
        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size);
        return esc_url($url[0]);
    }
}

/* Show widget */
function displayWidget($sidebar){
    if (is_active_sidebar ($sidebar) ) {
        dynamic_sidebar( $sidebar);
    }
}

/*
 * Cut the title
 * <?php echo compactTitle((get_the_title()); ?>
 */
function compactTitle($text) {
    $simple_text = strip_tags($text);
    $arr_text = explode(' ', $simple_text);
    if(count($arr_text) > MAX_LENGTH_TITLE) {
        $k = MAX_LENGTH_TITLE;
        $use_dotdotdot = 1;
    }else{
        $k = count($arr_text);
        $use_dotdotdot = 0;
    }
    $summary = '';
    for($i=0; $i<$k; $i++) {
        $summary .= $arr_text[$i] . ' ';
    }
    $summary .= ($use_dotdotdot) ? '&hellip;' : '';
    return $summary;
}

function debug($text){
    echo "<pre>";
    print_r($text);
    echo "</pre>";
}
function show_pagination() {
    if(paginate_links()!='') {
     ?>
    <div class="quatrang">
        <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
            ));
        ?>
    </div>
    <?php
    }
}
/*Security for site*/
global $user_ID; if($user_ID) {
    if(!current_user_can('administrator')) {
        if (strlen($_SERVER['REQUEST_URI']) > 255 ||
            stripos($_SERVER['REQUEST_URI'], "eval(") ||
            stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
            stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
            stripos($_SERVER['REQUEST_URI'], "base64")) {
            @header("HTTP/1.1 414 Request-URI Too Long");
            @header("Status: 414 Request-URI Too Long");
            @header("Connection: Close");
            @exit;
        }
    }
}