<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: about-us
 */
get_header();

// Getting posts to display
$leadership_post = get_page_by_title( 'Leadership & Staff', 'OBJECT', 'design-posts' );
$history_post    = get_page_by_title( 'Our History', 'OBJECT', 'design-posts' );
$finance_post    = get_page_by_title( 'Financials & Policies', 'OBJECT', 'design-posts' );
$employment_post = get_page_by_title( 'Employment Opportunities', 'OBJECT', 'design-posts' );
?>
<div id="main" class="site-main">
    <div class="home-banner"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?>
        <div class="banner-text">
            <div class="wrapper">
                <h1 class="title"><?php the_field('banner_text'); ?></h1>         
            </div>
        </div>
    </div>
    <div class="row green-row intro-text">
        <div class="col-md-12">
            <div class="wrapper">
                <?php
                if (have_posts()) {
                    while (have_posts()) : the_post();
                        ?>
                        <?php the_content(); ?>
                        <?php
                    endwhile;
                }
                ?> 
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="about-content">
        <div class="col-sm-1"></div>
	<div class="row">
            <div class="col-md-5">
               <div class="wrapper-inner">
                    <div class="inner-content" style="padding-top: 100px">
                        <h2><?php echo get_post_field('post_title', $leadership_post->ID); ?></h2>
                        <?php echo get_post_field('post_content', $leadership_post->ID); ?>
                    </div>
                </div>
            </div>
	    <div class="col-sm-1"></div>
            <div class="col-md-6"> <?php echo get_the_post_thumbnail($leadership_post->ID, 'full', array('class' => ' full-image')); ?> </div>
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-md-6"> <?php echo get_the_post_thumbnail($history_post->ID, 'full', array('class' => ' full-image')); ?> </div>

    <div class="col-sm-1"></div>
	<div class="col-md-4">
                <div class="wrapper-inner">
                    <div class="inner-content" style="padding-top: 100px">
                        <h2><?php echo get_post_field('post_title', $history_post->ID); ?></h2>
                        <?php echo get_post_field('post_content', $history_post->ID); ?>
                    </div>
		</div>
            </div>
        </div>
        <!--end row-->

        <div class="row">
	  <div class="col-sm-1"></div>
            <div class="col-md-4">
                <div class="wrapper-inner">
                    <div class="inner-content" style="padding-top: 100px">
                        <h2><?php echo get_post_field('post_title', $finance_post->ID); ?></h2>
                        <?php echo get_post_field('post_content', $finance_post->ID); ?>
                    </div></div>
            </div>
		<div class="col-sm-1"></div>
            <div class="col-md-6"> <?php echo get_the_post_thumbnail($finance_post->ID, 'full', array('class' => ' full-image')); ?> </div>
        </div>
        <!--end row-->

        <div class="row">
            
	<div class="col-md-6"> <?php echo get_the_post_thumbnail($employment_post->ID, 'full', array('class' => ' full-image')); ?> 
     </div>
	
	   <div class="col-sm-1"></div>
	      <div class="col-md-4">
                <div class="wrapper-inner">
                    <div class="inner-content" style="padding-top: 100px">
                        <h2><?php echo get_post_field('post_title', $employment_post->ID); ?></h2>
                        <?php echo get_post_field('post_content', $employment_post->ID); ?>
                    </div></div>
            </div>
            

        </div>
    </div>
</div>

<?php get_footer(); ?>