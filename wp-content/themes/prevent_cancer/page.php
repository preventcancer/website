<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: generic
 */
get_header();
?>

<div id="main" class="site-main">
    <div class="row generic-green-row"></div>   
    <div class="row row-block2 bg-2">
        <div class="generic-page-container">
            <div class="wrapper">
                <div class="col-md-11 column-centered">
                    <div class="row">
                        <div class="col-md-3 leftbar">
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <?php
                                if (!$post->post_parent) {
                                    $children = wp_list_pages("title_li=&child_of=" . $post->ID . "&echo=0&depth=3");
                                    $defaults = array(
                                        'theme_location' => 'Sidebar-Parent-page',
                                    );
                                } else {
                                    if ($post->ancestors) {
                                        $ancestors = end($post->ancestors);
                                        $children = wp_list_pages("title_li=&child_of=" . $ancestors . "&echo=0&depth=3&exclude=16007,16005,16003,16001,15999,15995,15889,15887,15885,15883,15880,15878,15875,15873,15871,1111");
                                    }
                                }
                                if ($children) {
                                    ?>
                                    <ul> <?php echo $children; ?></ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-9 generic-body">
                            <div class="col-md-10 column-centered">
                                <div class="title">
                                    <h2><?php
                                        if (get_field("large_header")) {
                                            the_field('large_header');
                                        } else {
                                            the_title();
                                        }
                                        ?>
                                    </h2>
                                </div>
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        the_post_thumbnail('full');
                                        the_content();
                                    }
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
</div>
<!--end row--> 
</div>
<?php get_footer(); ?>