<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: learn
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="video-container"><?php if (get_field('video_link') && get_field('video_link') != "") { ?>
            <iframe src="<?php echo the_field('video_link'); ?>?modestbranding=1&controls=0&showinfo=0&autohide=1&nologo=1" frameborder="0" allowfullscreen></iframe>
            <?php
        } else {
            if (has_post_thumbnail()) :
                the_post_thumbnail('full', array('class' => ' full-image'));
            endif;
        }
        ?>
    </div>
    <div class="row green-row intro-text">
        <div class="col-md-12">
            <div class="wrapper2">
                <h1><?php the_field('large_header') ?></h1>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        $content = get_the_content();
                        echo substr($content, 0, 800);
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!--end row-->
    <div class="row row-block learn">
        <div class="wrapper2 ">
            <div class="col-md-12 align-center">
                <h1><?php the_field('learn_list_title'); ?></h1>
                <p><?php the_field('learn_list_description'); ?></p>
            </div>
            <div class="col-md-12 col-2-grid">
                <!-- <div class="row"> -->
                <?php
                $children = get_pages(
                        array(
                            'sort_column' => 'post_title',
                            'sort_order' => 'ASC',
                            'hierarchical' => true,
                            'parent' => 1292,
                            'post_type' => 'page',
                ));
                foreach ($children as $post) {
                    setup_postdata($post);
                    ?>
                    <?php
                    $postid = get_the_ID();
                    if ($postid == 90) { //do noting
                    } else {
                        $article +=1;
                        if ($article % 2 == 1) {
                            echo '<div class="row">';
                        }
                        ?>
                        <div class="col-md-6">
                            <h2><?php the_title(); ?></h2>
                         <p><?php
                            $content = get_the_content();
                            echo substr($content, 0, 96) . "..";
                            ?></p>
                            <p><a href="<?php echo get_permalink(); ?>" class="btn-green">learn more</a> </p></div>
                        <?php
                    } if ($article % 2 == 0 || $loop->current_post + 1 == count($loop->posts)) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--BANNER 2-->
<div class="inner-banner"><?php echo get_the_post_thumbnail(15297, 'full', array('class' => ' full-image')); ?>
    <div class="banner-text">
        <div class="wrapper">
            <h1 class="title"><?php echo get_post_field('post_title', 15297); ?></h1>
            <?php echo get_post_field('post_content', 15297); ?>
        </div>
    </div>
</div>
<div class="row doctor-block">
    <div class="col-md-12">
        <div class="wrapper2">
            <div class="row">
                <div class="col-md-4"><div class="wrapper-inner" style="padding-top: 75px; padding-bottom: 75px"><div class="inner-content"><?php echo get_the_post_thumbnail(295, 'full', array('class' => ' full-image')); ?></div></div></div>
<div class="col-sm-3"></div>                
<div class="col-md-5">
                    <div class="wrapper-inner" style="padding-top: 75px; padding-bottom: 75px">
                        <div class="inner-content">
                            <h2><?php echo get_post_field('post_title', 295); ?></h2>
                            <?php echo get_post_field('post_content', 295); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </div>
</div>
<!--end row--> 
</div>
<!--END CONTENT-->
<?php get_footer(); ?>