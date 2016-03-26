<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: Advocacy Blog
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1>Advocacy</h1>
                </div>
            </div>
        </div>
        <div class="row row-block2 bg-2 newsroom"> 
            <div class="wrapper">
                <div class="col-md-10 column-centered">
                    <div class="row">
                        <h2>Advocacy News</h2>
                    </div>
                    <div class="row all-topics">
                        <?php
                        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts(array('category_name' => 'advocacy', 'posts_per_page' => 6, 'paged' => $page));
                        while (have_posts()) : the_post();
                            ?>
                          <div class="col-md-4 col-sm-4 col-xs-12" >
                                <div class="content">
                                    <h4><a href="<?php the_permalink() ?>">
                                            <?php
                                            $content = get_the_title();
                                            echo substr($content, 0, 35) . '..';
                                            ?>
                                        </a></h4>
                                    <p><?php echo substr(get_the_excerpt(), 0, 140) . '..'; ?></p>
                                    <div class="block-image" style="height: 250px">
                                        <?php the_post_thumbnail(); ?>
                                    </div>				    
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
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
