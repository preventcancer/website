<?php include_once("analyticstracking.php") ?>
<?php
/**
 * Template Name: home-page
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="home-banner"><img class="full-image" src="<?php the_field('home-banner'); ?>">
        <div class="banner-text">
            <div class="wrapper">
                <h1 class="title"><?php the_field('banner-heading'); ?></h1>
                <p><?php the_field('banner-text'); ?></p>
            </div>
        </div>
    </div>
    <div class="row green-row bucket">
        <div class="col-md-4">
            <div><?php echo get_the_post_thumbnail(140); ?>
                <h1><?php echo get_post_field('post_title', 140); ?></h1>
                <p><?php echo get_post_field('post_content', 140); ?></p>
            </div>
        </div>
        <div class="col-md-4 border-left">
            <div><?php echo get_the_post_thumbnail(145); ?>
                <h1><?php echo get_post_field('post_title', 145); ?></h1>
                <p><?php echo get_post_field('post_content', 145); ?></p>
            </div>
        </div>
        <div class="col-md-4 border-left">
            <div><?php echo get_the_post_thumbnail(153); ?>
                <h1><?php echo get_post_field('post_title', 153); ?></h1>
                <p><?php echo get_post_field('post_content', 153); ?></p>
            </div>
        </div>
    </div>
    <!--end row-->
   <div class="row news-blog-row">

        <div class="col-md-6 padding-60">
	  <h4><u>Latest News</u></h4>
            <?php
            $post_id = '';
           
            $my_query = new WP_Query(array( 'category_name' => 'news-releases', 'showposts' => 1, 'meta_key' => 'is_featured', 'meta_value' => 1, 'orderby' => 'is_featured', 'order' => 'DESC'));
           if(!$my_query->have_posts())  {
               $my_query = new WP_Query(array('category_name' => 'news-releases', 'showposts' => 1,  'orderby' => 'id', 'order' => 'DESC'));
           }
            while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                <div class="col-md-8">
                        <div class="fix-block">
                            <h3><?php echo substr(get_the_title(), 0, 200); ?></h3>
                            <p><?php echo substr(get_the_excerpt(), 0, 100); ?>...</p>
                            <span class="btn-holder"><a href="<?php the_permalink(); ?>" class="btn-green">read more</a></span>

                        </div>
                    </div>
                    <div class="col-md-4"><br /><?php the_post_thumbnail(); ?></div><?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        <div class="col-md-6 padding-60">
	<h4><u>Blog</u></h4>
            <div class="row">
                <?php
             
                $my_blog_query = new WP_Query(array('category_name' => 'blog', 'showposts' => 1, 'meta_key' => 'is_featured', 'meta_value' => 1, 'orderby' => 'is_featured', 'order' => 'DESC'));
                 if(!$my_blog_query->have_posts())  {
                 $my_blog_query = new WP_Query(array('category_name' => 'blog', 'showposts' => 1,  'orderby' => 'id', 'order' => 'DESC'));
              }
                while ($my_blog_query->have_posts()) : $my_blog_query->the_post();
                    ?>
                    <div class="col-md-8">
                        <div class="fix-block">
                            <h3><?php echo substr(get_the_title(), 0, 200); ?></h3>
                            <p><?php echo substr(get_the_excerpt(), 0, 100); ?>...</p>
                            <span class="btn-holder"><a href="<?php the_permalink(); ?>" class="btn-green">read more</a></span>

                        </div>
                    </div>
                    <div class="col-md-4"><br /><?php the_post_thumbnail(); ?></div><?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>

    </div>
    <div class="row row-block thankyou-block">   
        <?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'Home Page', 'showposts' => 3, 'orderby' => 'id', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h1>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h1>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>

    </div>

    <!--end row-->
</div>
<!--END CONTENT-->
<?php get_footer(); ?>