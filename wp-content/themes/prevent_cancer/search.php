<?php
/*
  Template Name: search-results
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1><?php printf(__('Search Results for: %s', 'twentyfifteen'), get_search_query()); ?></h1>           
                </div>
            </div>
        </div>
        <!--end row-->  
 <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div class="row row-block2 bg-2 search-result">        
                    <div class="wrapper">
                        <div class="col-md-8 column-centered">
                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                            <p><?php the_excerpt(); ?></p>
                            <span class="btn-holder"><a class="btn-green" href="<?php the_permalink(); ?>">read more</a></span>              
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="row row-block2">     <?php
                the_posts_pagination(array(
                    'prev_text' => __('Previous', 'twentyfifteen'),
                    'next_text' => __('Next', 'twentyfifteen'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
                ));
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
