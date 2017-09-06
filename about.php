<?php
/*
 Template Name: About
 */
?>
<?php get_header(); ?>

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">About Us</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>About Us</h1>
                <div class="content-page">
                    <div class="row margin-bottom-30">
                        <!-- BEGIN INFO BLOCK -->
                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'category_name'=>'about',
                            'posts_per_page'=>'1'

                        );
                        $about1 = new WP_Query( $args ); ?>

                        <?php if ( $about1->have_posts() ) {
                            while ( $about1->have_posts() ){
                                $about1->the_post();
                                ?>

                                <div class="col-md-7">
                                    <h2 class="no-top-space"><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <!-- BEGIN LISTS -->
                                    <div class="row front-lists-v1">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled margin-bottom-20">
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Officia deserunt molliti</li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Consectetur adipiscing </li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Deserunt fpicia</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Officia deserunt molliti</li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Consectetur adipiscing </li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Deserunt fpicia</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END LISTS -->
                                </div>
                                <?php
                                wp_reset_postdata();
                            }
                        } else{
                            ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                        }?>
                        <!-- END INFO BLOCK -->

                        <!-- BEGIN CAROUSEL -->
                        <div class="col-md-5 front-carousel">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <?php
                                    $args = array(
                                        'post_type' => 'services',
                                        'category_name'=>'slider_about'


                                    );
                                    $sliderabout = new WP_Query( $args ); ?>

                                    <?php if ( $sliderabout->have_posts() ) {
                                        while ( $sliderabout->have_posts() ){
                                            $sliderabout->the_post();
                                            ?>


                                            <div class="item
                                    <?php if($sliderabout->current_post  == 0 ){?> active <?php } ?>">
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>">
                                                <div class="carousel-caption">
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>

                                            <?php
                                            wp_reset_postdata();
                                        }
                                    } else{
                                        ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                                    }?>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->
                    </div>

                    <div class="row margin-bottom-40">
                        <!-- BEGIN TESTIMONIALS -->
                        <div class="col-md-7 testimonials-v1">
                            <h2>Clients Testimonials</h2>
                            <div id="myCarousel1" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <?php
                                    $args = array(
                                        'post_type' => 'services',
                                        'category_name'=>'percent',
                                        'posts_per_page'=>'3'
                                    );
                                    $teamind = new WP_Query( $args ); ?>

                                    <?php if ( $teamind->have_posts() ) {
                                        while ( $teamind->have_posts() ){
                                            $teamind->the_post();
                                            ?>

                                            <div class="item <?php if($sliderabout->current_post  == 0 ){?> active <?php } ?>">">
                                                <blockquote><p><?php the_content(); ?></p></blockquote>
                                                <div class="carousel-info">
                                                    <img class="pull-left" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                                                    <div class="pull-left">
                                                        <span class="testimonials-name"><?php the_title(); ?></span>
                                                        <span class="testimonials-post"><?php echo get_post_meta( get_the_ID(),'team-ind',true ); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            wp_reset_postdata();
                                        }
                                    } else{
                                        ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                                    }?>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
                                <a class="right-btn" href="#myCarousel1" data-slide="next"></a>
                            </div>
                        </div>
                        <!-- END TESTIMONIALS -->

                        <!-- BEGIN PROGRESS BAR -->
                        <div class="col-md-5 front-skills">
                            <h2 class="block">Our Skills</h2>
                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name'=>'percent'

                            );
                            $percentabout = new WP_Query( $args ); ?>

                            <?php if ( $percentabout->have_posts() ) {
                                while ( $percentabout->have_posts() ){
                                    $percentabout->the_post();
                                    ?>

                                    <span><?php the_title(); ?></span>
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar" style="width: <?php echo get_post_meta( get_the_ID(),'persent',true ); ?>;"></div>
                                    </div>
                                    <?php
                                    wp_reset_postdata();
                                }
                            } else{
                                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                            }?>
                        </div>
                        <!-- END PROGRESS BAR -->
                    </div>

                    <div class="row front-team">
                        <ul class="list-unstyled">
                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name'=>'team_about'

                            );
                            $teamabout = new WP_Query( $args ); ?>

                            <?php if ( $teamabout->have_posts() ) {
                                while ( $teamabout->have_posts() ){
                                    $teamabout->the_post();
                                    ?>
                                    <li class="col-md-3">
                                        <div class="thumbnail">
                                            <img alt="" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                                            <h3>
                                                <strong><?php the_title(); ?></strong>
                                                <small><?php echo get_post_meta( get_the_ID(),'spic',true ); ?> </small>
                                            </h3>
                                            <p> <?php the_content();?> </p>
                                            <ul class="social-icons social-icons-color">
                                                <li><a class="facebook" data-original-title="Facebook" href="javascript:;"></a></li>
                                                <li><a class="twitter" data-original-title="Twitter" href="javascript:;"></a></li>
                                                <li><a class="googleplus" data-original-title="Goole Plus" href="javascript:;"></a></li>
                                                <li><a class="linkedin" data-original-title="Linkedin" href="javascript:;"></a></li>
                                            </ul>
                                        </div>
                                    </li>


                                    <?php
                                    wp_reset_postdata();
                                }
                            } else{
                                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                            }?>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
<?php get_footer(); ?>