<?php
// Enqueu the Style
function enqueue_styles()
{
    // wp_enqueue_style( 'font-family', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
    // wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', false );
    // wp_enqueue_style( 'font-arrow', 'https://fonts.googleapis.com/css2?family=Iceland&display=swap', false );
    // wp_enqueue_style( 'top-css', get_stylesheet_directory_uri() . '/assets/css/top.css', array(), null );
    // wp_enqueue_style( 'sp-css', get_stylesheet_directory_uri() . '/assets/css/sp.css', array(), null );
    // wp_enqueue_style( 'page-css', get_stylesheet_directory_uri() . '/assets/css/page.css', array(), null );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Remove Default Wordpress Jquery
function remove_jquery_enqueue()
{
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery_enqueue');

// Enqueu the Script
// function enqueue_scripts(){
//     wp_enqueue_script( 'jquery', get_template_directory_uri() . '/src/js/jquery-3.3.1.min.js', array(), null );
//     wp_enqueue_script( 'main-js', get_template_directory_uri() . '/src/js/main.min.js', array(), null );
// }
// add_action ('wp_enqueue_scripts', 'enqueue_scripts');


// post pagination
function your_themes_pagination()
{
    global $wp_query;
    echo paginate_links();
}

// Category
// function pro_catid_class($classes) {
//     global $post;

//     foreach((get_the_category($post->ID)) as $category)
//         $classes [] = 'cat-' . $category->cat_ID . '-id';
//     return $classes;
// }
// add_filter('post_class', 'pro_catid_class');
// add_filter('body_class', 'pro_catid_class');


// Menu
function wp_menu()
{

    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu'),
        )
    );
}
add_action('init', 'wp_menu');

// Menu Image
add_filter('menu_image_default_sizes', function ($sizes) {

    // remove the default 36x36 size
    unset($sizes['menu-36x36']);

    // add a new size
    $sizes['menu-50x50'] = array(50, 50);

    // return $sizes (required)
    return $sizes;
});

// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
// function my_css_attributes_filter($var) {
//   return is_array($var) ? array() : '';
// }

wp_link_pages(array(
    'before'           => '',
    'after'            => '',
    'link_before'      => '',
    'link_after'       => '',
    'next_or_number'   => 'next',
    'separator'        => ' ',
    'nextpagelink'     => 'Next page',
    'previouspagelink' => 'Previous page',
    'pagelink'         => '%',
    'echo'             => 1
));

// Add more-link text to excerpt 
function new_excerpt_more($excerpt)
{
    return $excerpt . '<a class="more-link" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'baskerville') . ' </a>';
}
add_filter('get_the_excerpt', 'new_excerpt_more');

// Add excerpt length

function new_excerpt_length($length)
{
    return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

function ourWidgetsInit()
{

    register_sidebar(array(
        'name' => 'Blog Category',
        'id' => 'blog-category',
        'before_widget' => '<div class="a-category-cont">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="category-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Recent Post',
        'id' => 'recent-post',
        'before_widget' => '<div class="sidebar-post-list">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="p-sidebar-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Category',
        'id' => 'category',
        'before_widget' => '<div class="category-side">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="p-category-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Archive',
        'id' => 'archive',
        'before_widget' => '<div class="archive-side">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="p-archive-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ourWidgetsInit');



add_theme_support('post-thumbnails');
// add_image_size('small-thumbnail', 100, 100, true);
the_post_thumbnail(array(100, 100));
