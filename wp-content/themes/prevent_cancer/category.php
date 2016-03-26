<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: newsroom
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <h1><?php
                        $category = get_the_category();
                        $cat = $category[0]->cat_ID;
                        $cat_parent = $category[0]->parent;
                        if ($cat == 10 || $cat_parent == 10) {
                            echo "News Room";
                        } elseif ($cat == 11 || $cat_parent == 11) {
                            echo "Blog";
                        } else {
                            single_cat_title('', true);
                        }
                        ?></h1>
                </div>
            </div>
        </div>
        <?php
        if(empty($cat_parent)){
             $parent = $cat;
        } else {
            $parent = $cat_parent;
        }
        
        $cat_id = get_query_var('cat');
        $cat_name = get_cat_name($cat_id);
        $catgories = get_categories('child_of=' . $parent . '&hide_empty=0'); 
            ?> 
        <?php if ($cat == 11 || $cat_parent == 11)  { ?>
            <div class="topics">
                <div class="wrapper"><strong>Topics:</strong>
                    <div class="owl-carousel">
                        <?php foreach ($catgories as $topic) { ?>
                            <div> <a href="<?php echo get_category_link($topic->cat_ID); ?>"><?php echo $topic->name; ?> </a></div>
                        <?php } ?>
                    </div>       
                </div>
            </div> 
        <?php } ?>
        <div class="row row-block2 bg-2 newsroom"> 
            <div class="wrapper">
                <div class="col-md-10 column-centered">
                    <div class="row">
                        <h2><?php echo $cat_name; ?></h2>
                    </div>
                    <!--end row-->
                    <div class="row all-topics">
                        <?php
                        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts(array('category_name' => $cat_name, 'posts_per_page' => 6, 'paged' => $page));
                        if (have_posts()) {
                            while (have_posts()) : the_post();
                                ?>
                                <div class="col-md-4 col-sm-4 col-xs-12 vcenter">
                                    <div class="content">
                                        <h4><a href="<?php the_permalink() ?>">
                                                <?php
                                                $content = get_the_title();
                                                echo substr($content, 0, 35) . '..';
                                                ?>
                                            </a></h4>
                                        <p><?php echo substr(get_the_excerpt(), 0, 250) . '..'; ?></p>
                                          <div class="block-image" style="height:300px">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <?php
                            endwhile;
                        } else {
                            ?><p align="center">No post found</p> <?php } ?>
                    </div>
                    <!--end row-->
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
    <script type="text/javascript">
$(document).ready(function(){
   
$('#menu-item-56').addClass('current-menu-item'); 
$('#menu-item-56').addClass('current_page_item'); 

 
});

</script>
</div>

<?php get_footer(); ?>