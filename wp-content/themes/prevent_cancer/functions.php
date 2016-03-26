<?php
 


add_action('after_setup_theme', 'prevent_cancer_theme_setup');

function prevent_cancer_theme_setup() {
    register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
    register_nav_menu('our-work', __('Footer Our Work', 'theme-slug'));
    register_nav_menu('get-involved', __('Footer Get Involved', 'theme-slug'));
    register_nav_menu('Learn', __('Footer Learn', 'theme-slug'));
    register_nav_menu('Prostate', __('Footer Prostate', 'theme-slug'));
    register_nav_menu('Advocate', __('Footer Advocate', 'theme-slug'));
    register_nav_menu('Sidebar-Parent-page', __('Sidebar Parent Page', 'theme-slug'));
    add_theme_support('post-thumbnails');
    add_post_type_support('design-posts', array('thumbnail'));
}

if(!function_exists('iuttu_wpcf7_form_response_output_filter')){
	function iuttu_wpcf7_form_response_output_filter($output, $class, $content, $this){
		return '<div class="' . $class . ' ">' . $content . '</div>';
	}
	add_filter( 'wpcf7_form_response_output', 'iuttu_wpcf7_form_response_output_filter', 10, 4);
}
add_theme_support('html5', array('search-form'));
add_action('init', 'create_post_type');

function create_post_type() {
    register_post_type('design-posts', array(
        'labels' => array(
            'name' => __('Design Posts'),
            'singular_name' => __('Design Post')
        ),
        'public' => true,
        'taxonomies' => array('category'),
            )
    );
}

class Child_Wrap extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"sub-menu-wrapper\"><ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

}

function prevent_cancer_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Box 1',
        'id' => 'footer-box-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer Box 2',
        'id' => 'footer-box-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer Subscriber Area',
        'id' => 'footer-subscriber',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Siderbar Blogroll',
        'id' => 'blogroll-box',
        'description' => 'Appears in the sidebar area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

function jp_search_filter( $query ) {
  if ( $query->is_search && $query->is_main_query() ) {
    $query->set( 'category__not_in', array( 632 ) );
    $query->set( 'post__not_in', array( 19196 ) ); 
  }
}
add_action( 'pre_get_posts', 'jp_search_filter' );

function the_breadcrumb() {
    $separator = '>';
    $id = 'breadcrumbs';
    $class = 'breadcrumbs';
    $home_title = 'Home';
    // Get the query & post information
    global $post, $wp_query;

    $category = get_the_category();
    // Build the breadcrums
    echo '<ul id="' . $id . '" class="' . $class . '">';
    // Do not display on the homepage
    if (!is_front_page()) {
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
        if (is_single()) {
            // Single post (Only display the first category)
            if ($category[0]->parent != 0) {
                echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->parent . ' bread-cat-' . get_cat_name($category[0]->parent) . '" href="' . get_category_link($category[0]->parent) . '" title="' . $category[0]->cat_name . '">' . get_cat_name($category[0]->parent) . '</a></li>';
                echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            }
            echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '" href="' . get_category_link($category[0]->term_id) . '" title="' . $category[0]->cat_name . '">' . $category[0]->cat_name . '</a></li>';
            echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
        } else if (is_category()) {

            if ($category[0]->parent != 0) {
                echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->parent . ' bread-cat-' . get_cat_name($category[0]->parent) . '" href="' . get_category_link($category[0]->parent) . '" title="' . $category[0]->cat_name . '">' . get_cat_name($category[0]->parent) . '</a></li>';
                echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            }
            echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</strong></li>';
        } else if (is_page()) {
            // Standard page
            if ($post->post_parent) {
                $anc = get_post_ancestors($post->ID);
                $anc = array_reverse($anc);
                foreach ($anc as $ancestor) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                echo $parents;
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
            } else {
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
            }
        } else if (is_tag()) {
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args = 'include=' . $term_id;
            $terms = get_terms($taxonomy, $args);
              if ($category[0]->parent != 0) {
                echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->parent . ' bread-cat-' . get_cat_name($category[0]->parent) . '" href="' . get_category_link($category[0]->parent) . '" title="' . $category[0]->cat_name . '">' . get_cat_name($category[0]->parent) . '</a></li>';
                echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            }
            echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</strong></li>';
             echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
        } elseif (is_day()) {
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
        } else if (is_month()) {
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
        } else if (is_year()) {
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
        } else if (is_author()) {
            global $author;

            $userdata = get_userdata($author);
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
        } else if (get_query_var('paged')) {
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">' . __('Page') . ' ' . get_query_var('paged') . '</strong></li>';
        } else if (is_search()) {
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
        } elseif (is_404()) {
            echo '<li>' . 'Error 404' . '</li>';
        }
    }
    echo '</ul>';
}

add_action('widgets_init', 'prevent_cancer_widgets_init');