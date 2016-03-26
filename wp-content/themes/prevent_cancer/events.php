<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: events
 */
get_header();
?>
<div id="main" class="site-main">
    <?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'Events', 'showposts' => 3, 'orderby' => 'id', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="inner-banner"><?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => ' full-image')); ?>
        <div class="banner-text">
            <div class="wrapper">
                <h1 class="title"><?php echo get_post_field('post_title', $post->ID); ?></h1>
                <?php echo get_post_field('post_content', $post->ID); ?>
            </div>
        </div>
    </div>
    <?php endwhile;
    wp_reset_query(); 
    ?>
    <div class="row row-block2 event">
        <div class="wrapper2 align-center">
            <h1><?php the_field('other_way_text'); ?></h1>
            <div class="row green-row bucket2">
                <div class="col-md-4">
                    <?php  $dialouge_custom_field = get_post_custom_values('post_link',345);
                            $url = $dialouge_custom_field[0]; ?>
                    <a href="<?php if(!empty($url)) { echo $url; } ?>" class="other_way_link">
                        <div><?php echo get_the_post_thumbnail(345); ?>
                            <h4><?php echo get_post_field('post_title', 345); ?></h4>
                            <?php echo substr(get_post_field('post_content', 345), 0, 170); ?>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 border-left">
                  <?php  $lung_custom_field = get_post_custom_values('post_link',347);
                            $lung_url = $lung_custom_field[0]; ?>
                    <a href="<?php if(!empty($lung_url)) { echo $lung_url; } ?>"  class="other_way_link">
                        <div><?php echo get_the_post_thumbnail(347); ?>
                            <h4><?php echo get_post_field('post_title', 347); ?></h4>
                            <?php echo substr(get_post_field('post_content', 347), 0, 180); ?>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 border-left">
                    <?php  $host_custom_field = get_post_custom_values('post_link',349);
                            $host_url = $host_custom_field[0]; ?>
                    <a href="<?php if(!empty($host_url)) { echo $host_url; }?>" class="other_way_link">
                        <div> <?php echo get_the_post_thumbnail(349); ?>
                            <h4><?php echo get_post_field('post_title', 349); ?></h4>
                            <?php echo substr(get_post_field('post_content', 349), 0, 185); ?>
                        </div>
                    </a>
                </div>
            </div>        
            <h2><?php the_field('stop_cancer_text'); ?></h2>
            <a class="btn-green" href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank">Donate</a>
        </div>
    </div>
    <!--end row-->
</div>
<!--END CONTENT-->
<?php get_footer(); ?>