<?php include_once("analyticstracking.php") ?>
<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
//die('here');
global $query_string;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($query_string . '&paged=' . $paged . '&posts_per_page=6');
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1><?php
                        $category = get_the_category();
                        $cat = $category[0]->cat_ID;
                        if ($cat == 10) {
                            echo "News Room";
                        } else {
                            echo "Blog";
                        }
                        if(!empty($category[0]->parent)) {
                            $cat_ID =  $category[0]->parent;
                        } else {
                            $cat_ID =  $category[0]->cat_ID;
                        }
                        ?></h1>
                </div>
            </div>
        </div>
        <div class="topics">
            <div class="wrapper"><strong>Topics:</strong>
                <?php
                $catgories = get_categories('child_of=' . $cat_ID . '&hide_empty=0');
                ?> 	
                <div class="owl-carousel">
                    <?php foreach ($catgories as $cat) { ?>
                        <div> <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?> </a></div>
                    <?php } ?>
                </div>       
            </div>
        </div>
        <div class="row row-block2 bg-2 newsroom"> 
            <div class="wrapper">
                <div class="col-md-10 column-centered">
                    <div class="row">
                        <h2><?php echo get_cat_name($category[0]->cat_ID); ?></h2>
                    </div>
                    <!--end row-->
                  <div class="row all-topics">
                        <?php
                        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                   
                        if (have_posts()) {
                            while (have_posts()) : the_post();
                                ?>
                                <div class="col-md-4 col-sm-4 col-xs-12 vcenter">
                                    <div class="content">
                                        <h4><a href="<?php the_permalink() ?>">
                                                <?php
                                                $content = get_the_title();
                                                echo substr($content, 0, 35) . '..';
                                                ?>
                                            </a></h4>
                                        <p><?php echo substr(get_the_excerpt(), 0, 140) . '..'; ?></p>
                                        <div class="writer-area"> <span class="writer-image"><?php echo get_avatar(get_the_author_email(), '64'); ?></span><span class="writer-name">by <strong>
                                                    <?php the_author(); ?>
                                                </strong></span> </div>
                                        <div class="block-image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            <?php
                            endwhile;
                        } else {
                            ?><p align="center">No post found</p> <?php } ?>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <div class="row row-block3 bg-2">
        <?php
        the_posts_pagination(array(
            'prev_text' => __('Previous', 'twentyfifteen'),
            'next_text' => __('Next', 'twentyfifteen'),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
        ));
        ?>
    </div>
<?php wp_reset_query(); ?>
</div>
<?php get_footer(); ?>