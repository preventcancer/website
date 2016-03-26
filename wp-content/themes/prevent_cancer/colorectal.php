<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: colorectal
 */
get_header();
?>
<div id="main" class="site-main">
    <div class="lung bg-2">
        <div class="row green-row intro-text">
            <div class="col-md-12">
                <div class="wrapper">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?>  </p>
                            <?php
                        }
                    }
                    wp_reset_query();
                    ?>    
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-6"><img class="full-image" src="<?php the_field('left_top_image'); ?>"></div>
            <div class="col-md-6"><img class="full-image" src="<?php the_field('right_top_image'); ?>"></div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <?php the_field('left_top_content'); ?>
            </div>
            <div class="col-md-6 padding-col-1">
                <?php the_field('right_top_content'); ?> 
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-6"><img class="full-image" src="<?php the_field('left_bottom_image'); ?>"></div>
            <div class="col-md-6"><img class="full-image" src="<?php the_field('right_bottom_image'); ?>"></div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-6 padding-col-1">
                <?php the_field('left_bottom_content'); ?> 
            </div>
            <div class="col-md-6 padding-col-1">
                <?php the_field('right_bottom_content'); ?>
                <div class="row big-green-title">
                    <div class="col-md-12 col-2-grid">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><?php the_field('percentage'); ?></h1>
                                <p><?php the_field('about_percentage'); ?></p>
                            </div>
                            <div class="col-md-6">
                                <h1><?php the_field('total_number'); ?></h1>
                                <p><?php the_field('about_total_number'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <?php if (get_field("expert_name")) { ?>
            <div class="row row-block expert-section">
                <div class="col-md-12">
                    <div class="wrapper2">
                        <div class="expert-block">
                            <div class="col-md-6">
                                <div class="expert-image-holder">
                                    <?php $img = get_field('expert_profile_image'); ?>
                                    <img src="<?php echo $img['url']; ?>" class="full-image">
                                </div>
                                <h5>Ask the Expert</h5>
                                <h2><?php the_field('expert_name'); ?> </h2>

                                <?php the_field('expert_details'); ?>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-12 col-2-grid">
                                <div class="row">
                                    <?php
                                    query_posts(array('post_type' => 'doctor-profile', 'category_name' => 'colorectal-cancer-question', 'posts_per_page' => '6', 'orderby' => 'date', 'order' => 'DESC'));
                                    $q = 1;
                                    if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();
                                            if ($q % 2 == '1') {
                                                ?>
                                                <div class="col-md-6 col-xs-12 vcenter">
                                                    <h5><?php the_title(); ?></h5>
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } if ($q % 2 == '0') { ?>
                                                <div class="col-md-6 col-xs-12 vcenter pull-right">
                                                    <h5><?php the_title(); ?></h5>
                                                    <?php the_content(); ?>
                                                </div>
                                                <?php
                                            }
                                            $q++;
                                        }
                                    }
                                    wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--end row--> 
                    </div>
                </div>
            </div> 
        <!--end row-->
        <?php } if (get_field("speak_to_expert_visual")) { ?>
        <div class="row row-block green-row select-topic-section">
            <div class="col-md-12">
                <div class="wrapper2"> <img src="<?php echo bloginfo('template_directory') ?>/images/chat.png">
                    <h2>Speak to a cancer prevention specialist.</h2>
                    <p>Our representatives will help you get the right information.</p>
                    <div class="select-topic">            
                        <div class="select-option">
                            <span id="select-topic-value">Select department head name</span>
                            <select name="" id="select-topic">
                                <option value="">Select department head name</option>
                                <?php
                                query_posts(array('post_type' => 'post', 'category_name' => 'expert-question', 'orderby' => 'date', 'order' => 'DESC'));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>
                                        <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                        <?php
                                    }
                                } wp_reset_query();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" id="myModal" aria-labelledby="gridSystemModalLabel" style="display:none;">
            <div class="modal-dialog" role="document">
                <?php echo do_shortcode('[contact-form-7 id="1349" title="Speak to expert"]'); ?>
            </div>
        </div>
        <?php } ?>
        <!---------------- Treatment Options ---------------------->
        <div class="row row-block2 bg-2 treatment-option">
            <div class="wrapper">
                <div class="col-md-10 column-centered">
                    <h2><?php the_field('treatment_options_title'); ?></h2>
                    <div class="wrapper">
                        <div class="intro-p">
                            <?php the_field('treatment_options'); ?>
                        </div>
                    </div>
                </div>
                <!--TABS START-->
				<?php if (get_field("show_tabbed_box")) { ?>
                <div id="tabs" class="bg-1">
                    <ul>  <?php
                        query_posts(array('post_type' => 'doctor-profile', 'category_name' => 'colorectal-treatment-options', 'posts_per_page' => '3', 'orderby' => 'date', 'order' => 'DESC'));
                        $k = 1;
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                ?>
                                <li><a href="#tabs-<?php echo $k; ?>"><?php the_title(); ?></a></li>
                                <?php
                                $k++;
                            }
                        }
                        wp_reset_query();
                        ?>
                    </ul>
                    <?php
                    query_posts(array('post_type' => 'doctor-profile', 'category_name' => 'colorectal-treatment-options', 'posts_per_page' => '3', 'orderby' => 'date', 'order' => 'DESC'));
                    $j = 1;
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div id="tabs-<?php echo $j; ?>">
                                <div class="col-md-10 column-centered">
                                    <div class="row">
                                        <div class="col-md-6 vcenter">
                                            <div class="wrapper-inner">
                                                <div class="inner-content">
                                                    <?php the_content(); ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 vcenter"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $j++;
                        }
                    }
                    wp_reset_query();
                    ?> 
                </div>
				<?php } ?>
                <!--TABS END--> 
            </div>
            <!---------------- Lung Cancer Research Grants ------------------>
            <?php if (get_field("research_grants_title")): ?>
                <div class="wrapper">
                    <div class="col-md-10 column-centered">
                        <div class="wrapper">
                            <div class="row row-block2">
                                <h2><?php the_field('research_grants_title'); ?></h2>
                                <div class="intro-p">
                                    <?php the_field('research_grants'); ?>
                                </div>
                            </div>               
                        </div>
                        <!--end row-->   
                        <?php
                        query_posts(array('post_type' => 'doctor-profile', 'category_name' => 'colorectal-doctor', 'posts_per_page' => '4', 'orderby' => 'date', 'order' => 'DESC'));
                        $i = 2;
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                if ($i % 2 == 0) {
                                    ?>
                                    <div class="row bg-1">
                                        <div class="col-md-6 col-xs-12 vcenter"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <div class="col-md-6 col-xs-12 vcenter pull-left">
                                            <div class="wrapper-inner">
                                                <div class="inner-content">
                                                    <h4><?php the_title(); ?><br>
                                                        <em> <?php the_field('sub_title'); ?> </em></h4>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <a href="<?php the_permalink(); ?>">Learn More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } if ($i % 2 == 1) { ?>	 
                                    <!--end row-->
                                    <div class="row bg-1">
                                        <div class="col-md-6 col-xs-12 vcenter pull-right"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <div class="col-md-6 col-xs-12 vcenter">
                                            <div class="wrapper-inner">
                                                <div class="inner-content">
                                                    <h4><?php the_title(); ?><br>
                                                        <em><?php the_field('sub_title'); ?></em></h4>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <a href="<?php the_permalink(); ?>">Learn More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-------- Additional Resources ------------>
    <?php if (get_field("additional_resources_title")): ?>
        <div class="additional-resources">
            <div class="row row-block2 bg-3">
                <div class="wrapper">
                    <div class="col-md-10 column-centered align-center">
                        <h2><?php the_field('additional_resources_title'); ?></h2>
                        <div class="row psa-materials">
                            <div class="col-md-7 col-sm-7">
                                <?php the_field('additional_resources_description'); ?>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="col-md-8 col-sm-10 column-centered">
                                    <h5> <?php the_field('fact_sheet_title'); ?></h5>
                                    <h6> <?php the_field('lung_cancer_factsheet_title'); ?><br><a href="<?php the_field('lung_cancer_factsheet_pdf'); ?>" target="_blank">Download the PDF (157kb)</a></h6>                    
                                    <h6> <?php the_field('lung_cancer_factsheet_title_span'); ?><br><a href="<?php the_field('lung_cancer_factsheet_link'); ?>" target="_blank">Download the PDF (157kb)</a></h6>
<h6> Guide to Prevent Cancer <br><a target="_blank" href="http://preventcancer.org/guide-to-prevent-cancer/">Download the Guide</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--end row--> 
                        <div class="row row-block psa-materials">
                            <div class="col-md-3 col-sm-5">
                                <span class="video-icon"><img src="<?php echo bloginfo('template_directory') ?>/images/play-video.png"></span>
                                <h6><?php the_field('advertisement_title'); ?> <br><a href="<?php the_field('advertisement_link'); ?>" target="_blank">View the Ad</a></h6>                
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <span class="video-icon"><img src="<?php echo bloginfo('template_directory') ?>/images/play-video.png"></span>
                                <h6><?php the_field('psa_video_title'); ?><br><a href="<?php the_field('psa_video_link'); ?>" target="_blank">View the Video</a></h6>
                            </div>
                        </div>            
                        <!--end row-->            
                    </div>
                </div>         
            </div>
          
        </div>
    <?php endif; ?>
	  <div class="share">
                <ul>
                    <?php echo do_shortcode('[ssba]'); ?>
                </ul>
            </div>
    <!--end row-->
    <div class="row row-block2">
        <div class="col-md-12 align-center">
             <h2><?php the_field('stop_cancer'); ?></h2>
            <span class="btn-holder"><a href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank" class="btn-green">donate</a></span>
        </div>
    </div>
    <!--end row-->
    <?php if (get_field("bottom_section")): ?>
        <div class="row stop-cancer-blocks">
            <?php
            query_posts(array('post_type' => 'design-posts', 'category_name' => 'promotional-section', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 30));
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <a href="<?php the_field('promotional_link') ?>" target="_blank" class="other_way_link">
                        <div class="col-md-4 col-sm-4">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                            <div class="image-text">
                                <?php
                                $content = get_the_content();
                                echo substr($content, 0, 80);
                                ?>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            } wp_reset_query();
            ?>
        </div>
    <?php endif; ?>
    <!--end row--> 
</div>
<!--END CONTENT-->
<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>
<?php get_footer(); ?>