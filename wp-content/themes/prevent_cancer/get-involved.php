<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: get-involved
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
                </div>
            </div>
        </div>      
        <!--end row-->    
        <div class="row">
            <div class="col-md-6"><?php echo get_the_post_thumbnail(187, 'full', array('class' => ' full-image')); ?></div>
            <div class="col-md-6"><?php echo get_the_post_thumbnail(189, 'full', array('class' => ' full-image')); ?></div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 187); ?></h2>
                <p> <?php echo get_post_field('post_content', 187); ?> </p>

            </div>
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 189); ?></h2>
                <p><?php echo get_post_field('post_content', 189); ?></p>
            </div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6"><?php echo get_the_post_thumbnail(191, 'full', array('class' => ' full-image')); ?></div>
            <div class="col-md-6"><?php echo get_the_post_thumbnail(193, 'full', array('class' => ' full-image')); ?></div>
        </div>
        <!--end row-->    
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 191); ?></h2>
                <p><?php echo get_post_field('post_content', 191); ?></p>
            </div>
            <div class="col-md-6 padding-col-1">
                <h2><?php echo get_post_field('post_title', 193); ?></h2>
                <p><?php echo get_post_field('post_content', 193); ?></p>
            </div>
        </div>
        <!--BANNER 2-->
        <div class="inner-banner"><?php echo get_the_post_thumbnail(196, 'full', array('class' => ' full-image')); ?>
            <div class="banner-text">
                <div class="wrapper">
                    <h1 class="title"><?php echo get_post_field('post_title', 196); ?></h1>
                    <p><?php echo get_post_field('post_content', 196); ?></p>
                </div>
            </div>
        </div>
        <div class="row row-block2 event">
            <div class="wrapper2 align-center">
                <h1><?php echo get_field('other_way_text'); ?></h1>
                <div class="row green-row bucket2">
                    <div class="col-md-4">
                        <a href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(200); ?>
                                <h4><?php echo get_post_field('post_title', 200); ?></h4>
                                <?php echo substr(get_post_field('post_content', 200), 0, 120); ?>..
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 border-left">
                        <a href="<?php home_url(); ?>donate/other-ways-to-give/#donatecar" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(202); ?>
                                <h4><?php echo get_post_field('post_title', 202); ?></h4>
                                <?php echo substr(get_post_field('post_content', 202), 0, 120); ?>..
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 border-left">
                        <a href="<?php home_url(); ?>volunteer/" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(204); ?>
                                <h4><?php echo get_post_field('post_title', 204); ?></h4>
                                <?php echo substr(get_post_field('post_content', 204), 0, 120); ?>..
                            </div>
                        </a>
                    </div>          
                </div>
                <div class="row green-row bucket2">
                    <div class="col-md-4">
                        <a href="<?php home_url(); ?>donate/other-ways-to-give/#honorarygift" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(206); ?>
                                <h4><?php echo get_post_field('post_title', 206); ?></h4>
                                <?php echo substr(get_post_field('post_content', 206), 0, 120); ?>..
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 border-left">
                        <a href="<?php home_url(); ?>donate/other-ways-to-give/#memorialgift" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(208); ?>
                                <h4><?php echo get_post_field('post_title', 208); ?></h4>
                                <?php echo substr(get_post_field('post_content', 208), 0, 120); ?>..
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 border-left">
                        <a href="<?php home_url(); ?>donate/other-ways-to-give/#workplacegiving" class="other_way_link">
                            <div><?php echo get_the_post_thumbnail(210); ?>
                                <h4><?php echo get_post_field('post_title', 210); ?></h4>
                                <?php echo substr(get_post_field('post_content', 210), 0, 120); ?>..
                            </div>
                        </a>
                    </div>          
                </div>
                <h2><?php the_field('stop_cancer'); ?></h2>
                <a class="btn-green" href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank">Donate Now</a>
            </div>
        </div>
    </div>
</div>
<!--END CONTENT-->
<?php get_footer(); ?>
