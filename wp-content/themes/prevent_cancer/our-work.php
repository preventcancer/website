<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: our-work
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="inner-banner"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?>
        <div class="banner-text">
            <div class="wrapper">
                <h1 class="title"><?php the_field('banner_text'); ?></h1>
            </div>
        </div>
    </div>
    <div class="get-involved">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1><?php the_field('head_text_two'); ?></h1>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) : the_post();
                            ?>
                            <?php the_content(); ?>
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?> 
                </div>
            </div>
        </div>      
        <!--end row-->    
        <div class="row">
            <div class="col-md-6"><?php echo get_the_post_thumbnail(173, 'full', array('class' => ' full-image')); ?></div>
            <div class="col-md-6"><?php echo get_the_post_thumbnail(179, 'full', array('class' => ' full-image')); ?></div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 173); ?></h2>
                <?php echo get_post_field('post_content', 173); ?> 
            </div>
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 179); ?></h2>
                <?php echo get_post_field('post_content', 179); ?>
            </div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6"><?php echo get_the_post_thumbnail(175, 'full', array('class' => ' full-image')); ?></div>
            <div class="col-md-6"><?php echo get_the_post_thumbnail(177, 'full', array('class' => ' full-image')); ?></div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 175); ?></h2>
                <?php echo get_post_field('post_content', 175); ?>
            </div>
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 177); ?></h2>
                <?php echo get_post_field('post_content', 177); ?>
            </div>
        </div>
        <!--BANNER 2-->
        <div class="inner-banner"><?php echo get_the_post_thumbnail(196, 'full', array('class' => ' full-image')); ?>
            <div class="banner-text">
                <div class="wrapper">
                    <h1 class="title"><?php echo get_post_field('post_title', 196); ?></h1>
                    <p> <?php echo get_post_field('post_content', 196); ?></p>
                </div>
            </div>
        </div>
        <div class="row row-block2 event">
		<div class="wrapper2">
            <div class="col-md-12 align-center">
                <h1><?php the_field('large_header'); ?></h1>
                <?php if (get_field("our_program_desc")) { ?>
					<p><?php the_field('our_program_desc'); ?></p> 
				<?php } ?>
				</div>
                <div class="col-md-12 col-2-grid">
                    <!-- <div class="row"> -->
                    <?php
                    $children = get_posts(
                            array(
                                'sort_column' => 'menu_order',
                                'order' => 'ASC',
                                'hierarchical' => true,
                                'post_type' => 'design-posts',
                                'posts_per_page' => 13,
                                'offset' => 0,
                                'category_name' => 'programs',
                    ));
                    foreach ($children as $post) {
                        setup_postdata($post);
                        $postid = get_the_ID();
                        if ($postid == 90) { // do nothing
                        } else {
                            $article +=1;
                            if ($article % 2 == 1) {
                                echo '<div class="row">';
                            }
                            ?>
                            <div class="col-md-6">
                                <h2><?php the_title(); ?></h2>
                                <?php echo get_the_content(); ?>
                            </div>
                            <?php
                        } if ($article % 2 == 0 || $loop->current_post + 1 == count($loop->posts))
                            echo '</div>';
                    }
                    wp_reset_query();
                    ?>
                </div>
               
            </div>
			<div class="col-md-12 align-center paddingT-50">
			 <h2><?php the_field('stop_cancer'); ?></h2>
                <a class="btn-green" href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank">Donate Now</a>
				</div>
        </div>
    </div>
</div>
</div>
<!--END CONTENT-->
<?php get_footer(); ?>
