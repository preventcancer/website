<?php include_once("analyticstracking.php") ?>
<?php
/*
Template Name: contact-us
*/
get_header(); ?>

  <div id="main" class="site-main">
    <div class="lung bg-2">
      <div class="row green-row intro-text">
        <div class="col-md-12">
          <div class="wrapper">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
      <!--end row-->
      <div class="row row-block bg-2 contact-us">
        <div class="wrapper">
          <div class="col-md-9 column-centered align-center">
            <div class="row row-block">
              <div class="col-md-12">
             <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
         <?php the_content(); ?>
       <?php
           }
           }
           wp_reset_query();
        ?>
              </div>
            </div>
            <div class="row row-block border-top-gray">
              <div class="col-md-6"><?php  the_field('left_info'); ?></div>
              <div class="col-md-6"><?php  the_field('right_info'); ?></div>

            </div>
            <div class="row">
            	<div class="col-md-12"><?php  the_field('bottom_info'); ?></div>
            </div>
            <div class="row">
            	<div class="col-md-12 center">
                	<ul class="social-media">
                    	<li><a href="<?php the_field('chat_url'); ?>" target="_blank" ><img src="<?php the_field('chat_icon'); ?>"></a></li>
                        <li><a href="<?php the_field('facebook_url'); ?>" target="_blank" ><img src="<?php the_field('facebook_icon'); ?>"></a></li>
                        <li><a href="<?php the_field('twitter_url'); ?>" target="_blank" ><img src="<?php the_field('twitter_icon'); ?>"></a></li>
                        <li><a href="<?php the_field('linkedin_url'); ?>" target="_blank" ><img src="<?php the_field('linkedin_icon'); ?>"></a></li>
                        <li><a href="<?php the_field('pinterest_url'); ?>" target="_blank" ><img src="<?php the_field('pinterest_icon'); ?>"></a></li>
  			<li><a href="<?php the_field('instagram_url'); ?>" target="_blank" ><img src="<?php the_field('instagram_icon'); ?>"></a></li>
                    </ul>
                </div>
            </div>
                </div>
            </div>
          </div>
		  <div class="row">
		  <?php the_field('google_map'); ?>
              </div>
        </div>
      </div>
      <!--end row--> 
    </div>
  </div>
  
<?php get_footer(); ?>