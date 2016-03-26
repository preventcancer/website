<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: In the news
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
</div>
</div>
<div class="col-md-12 generic-body">
<div class="row row-block thankyou-block">              
        <?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'In The News', 'showposts' => 3, 'orderby' => 'date', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h6>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h6>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
</div>
<div class="row row-block thankyou-block"> 
<?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'In The News 2', 'showposts' => 3, 'orderby' => 'date', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h6>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h6>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?> 
</div>
<div class="row row-block thankyou-block">              
<?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'In The News 3', 'showposts' => 3, 'orderby' => 'date', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h6>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h6>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
</div>
<div class="row row-block thankyou-block">   
<?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'In The News 4', 'showposts' => 3, 'orderby' => 'date', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h6>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h6>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
</div>
<div class="row row-block thankyou-block"> 
<?php
        $my_query = new WP_Query(array('post_type' => 'design-posts', 'category_name' => 'In The News 5', 'showposts' => 3, 'orderby' => 'date', 'order' => 'DESC'));
        while ($my_query->have_posts()) : $my_query->the_post();
            $custom_fields = get_post_custom_values('post_link');
            $url = $custom_fields[0];
            ?>
            <div class="col-md-4">
                <h6>
                    <?php if(!empty($url)) { ?>
                    <a href="<?php echo $url; ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </h6>	 
                <p><?php the_content() ?></p>
                <?php ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>  
</div>                     
      </div>
</div>
<!--end row-->
<?php get_footer(); ?>