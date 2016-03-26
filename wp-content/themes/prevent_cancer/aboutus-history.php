<?php include_once("analyticstracking.php") ?>
<?php
/*
  Template Name: aboutus-history
 */
get_header();
?>

<div id="main" class="site-main">    
    <div class="row green-row intro-text">
        <div class="col-md-12">
            <div class="wrapper">
                <h1><?php the_field('large_header'); ?></h1>         
            </div>
        </div>
    </div>
    <!--end row-->
    <div class="row-block history">
        <div class="wrapper2">
            <div class="align-center">
                <h1><?php echo get_post_field('post_title', 389); ?></h1>
                <?php echo get_post_field('post_content', 389); ?><hr>
                <h2><?php echo get_post_field('post_title', 390); ?></h2>
                <?php echo get_post_field('post_content', 390); ?>
                <h2><?php echo get_post_field('post_title', 391); ?></h2>
                <?php echo get_post_field('post_content', 391); ?>

            </div>
        </div>
        <div class=" row-block milestones">
            <div class="wrapper2">
                <h1><span>Milestones<span></h1>
                            <?php
                            query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '0', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <div class="row grid">
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <div class="col-md-4 content border-left">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>	   
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '1', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                            <!--end row-->
                            <div class="row grid">    
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '1', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	  
                                        <div class="col-md-4 content border-right">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                 echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '2', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	  
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <div class="col-md-4 content border-top">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                 echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>
                            <!--end row-->
                            <div class="row grid">  
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '3', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>		  
                                        <div class="col-md-4">
                                            <?php the_post_thumbnail('full', array('class' => ' full-image')); ?>
                                        </div>            
                                        <div class="col-md-8 content">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                               echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>        
                            <!--end row-->
                            <div class="row grid">
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '4', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>		
                                        <div class="col-md-4 content border-right">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '5', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	
                                        <div class="col-md-4 content">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>
                            <!--end row-->
                            <div class="row grid">
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '5', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '6', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	
                                        <div class="col-md-4 content border-left">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>
                            <!--end row-->          
                            <div class="row grid">   
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '7', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	
                                        <div class="col-md-4 content border-right">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                              echo get_the_content();
                                                ?></p>
                                        </div>
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '8', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>
                                        <div class="col-md-4 content border-top">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>                  
                            <!--end row-->
                            <div class="row grid">
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '9', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	  
                                        <div class="col-md-8 content">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                               echo get_the_content();
                                                ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <?php the_post_thumbnail('full', array('class' => ' full-image')); ?>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                            </div>
                            <!--end row-->
                            <div class="row grid">  
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>	 	  
                                        <div class="col-md-4 content border-right">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                        <div class="col-md-4"><?php the_post_thumbnail('full', array('class' => ' full-image')); ?></div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                                <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '11', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        ?>
                                        <div class="col-md-4 content border-top">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                               echo get_the_content();
                                                ?></p>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_query();
                                ?>
                 </div>

			      <?php
                                query_posts(array('post_type' => 'design-posts', 'category_name' => 'milestones', 'offset' => '12', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 12));
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                         $article +=1;
                        if ($article % 2 == 1) {
                            echo '<div class="row grid">';
                        }
                                        ?>
                         
                                        <div class="col-md-4 content border-right">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php
                                                echo get_the_content();
                                                ?></p>
                                        </div>
                                       
                               <?php
                     if ($article % 2 == 0 || $loop->current_post + 1 == count($loop->posts)) {
                        echo '</div>';
                    }
                             
                                    }
                                }
                                wp_reset_query();
                                ?>
                 


             </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>