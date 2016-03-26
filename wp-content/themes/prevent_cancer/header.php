<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en-US">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?><?php bloginfo('description'); ?></title>
        <link href="<?php echo bloginfo('template_directory') ?>/css/custom.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/css/editor-style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/css/grid.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/main.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/css/ie.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo bloginfo('template_directory') ?>/assets/owl.carousel.css" rel="stylesheet" type="text/css">
        <!--<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
        <!--<script src="js/functions.js" language="javascript"></script>
        <script src="js/theme-customizer.js" language="javascript"></script>-->
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head();?>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/functions.js"></script>  
        <script src="<?php echo bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/owl.carousel.min.js"></script>

    </head>
<?php  header('X-Frame-Options: GOFORIT'); ?>
    <body>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17136014-2', 'auto');
  ga('send', 'pageview');

</script>
<p style="position:absolute; display:none;">
        <div class="hfeed site" id="page">
            <header>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-2"><a href="<?php echo get_home_url(); ?>"><img src="http://preventcancer.org/wp-content/uploads/2015/12/BoldLogo_PCF2015_30thAnniversary_Crop.jpg"></a><span class="mobile-search pull-right"><img src="<?php echo bloginfo('template_directory') ?>/images/search-icon.png" width="24" height="24"></span></div>
                        <div class="col-md-3 col-xs-12 pull-right mobile-search-field">
                          <!-- <input name="" placeholder="Search" type="search"> -->
                            <?php if (is_page('newsroom')) { ?> 
                                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/category/news/">
                                    <div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search..." required="required" />
                                        <input type="submit" id="searchsubmit" value="" class="btn" />
                                    </div>
                                </form> <?php } else { ?>
                                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
                                    <div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search..." required="required" />
                                        <input type="submit" id="searchsubmit" value="" class="btn" />
                                    </div>
                                </form> <?php } ?>
                        </div>
                    </div>
                    <div class="main-navigation-area">
                        <nav role="navigation" class="navigation main-navigation" id="site-navigation">
                            <!--<button class="menu-toggle"> Menu </button>-->
                            <button class="menu-toggle hamburger"><span></span></button>
                            <a title="Skip to content" href="#content" class="screen-reader-text skip-link"> Skip to content </a>            
                            <?php
                            $defaults = array(
                                'theme_location' => 'primary',
                                'menu_id' => 'primary-menu',
                                'container' => 'div',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'nav-menu',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 0,
                                'walker' => new Child_Wrap()
                            );
                            wp_nav_menu($defaults);
                            ?>
                        </nav>
                    </div>
                    <div class="donation-button-area"><a href="https://secure3.convio.net/pcf/site/Donation2?df_id=2540&2540.donation=form1&s_src=web&s_subsrc=main_donate" target="_blank" class="btn">donate now</a></div>
                </div>
            </header>
            <?php if (!is_front_page()) { ?>
                <div class="breadcrum-area hidden-mobile">
                    <div class="wrapper">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
            <?php } ?>
            <!--END HEADER-->