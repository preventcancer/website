<?php
/*
  Template Name: newsroom-article
 */
get_header();
?>

<?php
$cat = get_the_category($post->ID);
 $post->ID;
 $slug = $cat[0]->slug;
if ($slug == 'blog') {
    ?>
    <div class="topics">
        <div class="wrapper"><strong>Topics:</strong>
            <?php $catgories = get_categories('child_of=11&hide_empty=0'); ?> 	
            <div class="owl-carousel">
                <?php foreach ($catgories as $cat) { ?>
                    <div> <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?> </a></div>
                <?php } ?>
            </div>

        </div>
    </div> <?php } ?>
<div id="main" class="site-main">
    <div class="row row-block2 bg-2">
        <div class="wrapper">
            <div class="col-md-11 column-centered">
                <div class="row">
                    <div class="col-md-9 article">
                        <div class="col-md-10 column-centered">

                           <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

?>
     <div class="share">
                                <ul>
                                    <?php echo do_shortcode('[ssba]'); ?>
                                </ul>
                            </div>
                        </div>
    <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?> 

                    </div>
                    
                    
                    
                    <div class="col-md-3 article-aside">
                        <div>
                            <h4>Other Articles</h4>
                            <ul class="other-articles">
                                <?php
                                $categories = get_the_category();
                                $category_id = $categories[0]->cat_ID;
                                ?>
                                <?php
                                if ($category_id == '10') {
                                    if (is_single()) {
                                        $categories = get_the_category();
                                        if ($categories) {
                                            foreach ($categories as $category) {
                                                $cat = $category->cat_ID;
                                                $args = array(
                                                    'cat' => $cat,
                                                    'order' => DESC,
                                                    'orderby' => rand,
                                                    'post__not_in' => array($post->ID),
                                                    'posts_per_page' => 5,
                                                    'caller_get_posts' => 1
                                                );
                                                $my_query = null;
                                                $my_query = new WP_Query($args);
                                                if ($my_query->have_posts()) {
                                                    while ($my_query->have_posts()) : $my_query->the_post();
                                                        ?>
                                                        <li><a href="<?php echo get_permalink(); ?>"><?php
                                                                $title = get_the_title();
                                                                echo ucwords($title);
                                                                ?></a></li>
                                                        <?php
                                                    endwhile;
                                                }
                                            }
                                        } wp_reset_query();
                                    }
                                } else {
                                    query_posts(array('category_name' => 'news-releases', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 5));
                                    if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();
                                            ?>
                                            <li><a href="<?php echo get_permalink(); ?>"><?php
                                                    $title = get_the_title();
                                                    echo ucwords($title);
                                                    ?></a></li>
                                            <?php
                                        }
                                    } wp_reset_query();
                                }
                                ?>
                            </ul>
                        </div>
                        <div>

                              <?php
                        if (is_active_sidebar('blogroll-box')) {
                            dynamic_sidebar('blogroll-box');
                        }
                        ?>
                        </div> 
                    </div>
                </div>
            </div>
            <!--end row--> 
        </div>
    </div>
</div>
<!--end row-->
<div class="row stop-cancer-blocks">
    <?php
    query_posts(array('post_type' => 'design-posts', 'category_name' => 'news-room', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 30));
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div class="col-md-4 col-sm-4">
		<?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('full');
                endif;
                ?>
                <div class="image-text">
                    <?php
                    $content = get_the_content();
                    echo substr($content, 0, 80);
                    ?>
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
            <?php
        }
    } wp_reset_query();
    ?>
</div>
<!--end row--> 
    <script type="text/javascript">
$(document).ready(function(){
 $('#menu-item-56').addClass('current-menu-item'); 
$('#menu-item-56').addClass('current_page_item'); 
 
});

</script>
</div>

<?php get_footer(); ?>