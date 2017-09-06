<?php
/*
 Template Name: Portfolio
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Portfolio</a></li>
            <li class="active">Portfolio Item</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Portfolio Item</h1>
                <div class="content-page">
                    <div class="row margin-bottom-30">
                        <!-- BEGIN CAROUSEL -->
                        <div class="col-md-5 front-carousel">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <?php
                                    $args = array(
                                        'post_type' => 'services',
                                        'category_name'=>'portfolio',
                                        'posts_per_page' => 3
                                    );
                                    $portfolio = new WP_Query( $args ); ?>

                                    <?php if ( $portfolio->have_posts() ) {
                                        while ( $portfolio->have_posts() ){
                                            $portfolio->the_post();
                                            ?>

                                            <div class="item <?php if($sliders->current_post == 0 )?> active">
                                                <img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>">
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
                                <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a data-slide="next" href="#myCarousel" class="carousel-control right">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->

                        <!-- BEGIN PORTFOLIO DESCRIPTION -->
                        <div class="col-md-7">

                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name'=>'portfolio2',
                                'posts_per_page' => 1
                            );
                            $portfolio2 = new WP_Query( $args ); ?>

                            <?php if ( $portfolio2->have_posts() ) {
                                while ( $portfolio2->have_posts() ){
                                    $portfolio2->the_post();
                                    ?>

                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <br>
                                    <div class="row front-lists-v2 margin-bottom-15">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <?php
                                                $args = array(
                                                    'post_type' => 'services',
                                                    'category_name'=>'portfolio-social',
                                                    'posts_per_page' => 4
                                                );
                                                $portsocial = new WP_Query( $args ); ?>

                                                <?php if ( $portsocial->have_posts() ) {
                                                    while ( $portsocial->have_posts() ){
                                                        $portsocial->the_post();
                                                        ?>
                                                    <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-social',true ); ?>"></i><?php the_title(); ?></li>
                                                        <?php
                                                        wp_reset_postdata();
                                                    }
                                                } else{
                                                    ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                                                }?>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <?php
                                                $args = array(
                                                    'post_type' => 'services',
                                                    'category_name'=>'portfolio-social1',
                                                    'posts_per_page' => 4
                                                );
                                                $portsocial1 = new WP_Query( $args ); ?>

                                                <?php if ( $portsocial1->have_posts() ) {
                                                    while ( $portsocial1->have_posts() ){
                                                        $portsocial1->the_post();
                                                        ?>
                                                        <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-social1',true ); ?>"></i><?php the_title(); ?></li>
                                                        <?php
                                                        wp_reset_postdata();
                                                    }
                                                } else{
                                                    ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                                                }?>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="javascript:;"> VISIT THE PROJECT</a>
                                    <?php
                                    wp_reset_postdata();
                                }
                            } else{
                                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                            }?>
                        </div>
                        <!-- END PORTFOLIO DESCRIPTION -->
                    </div>

                    <!-- BEGIN RECENT WORKS -->
                    <div class="row recent-work margin-bottom-40">
                        <div class="col-md-3">
                            <h2><a href="portfolio.html">Recent Works</a></h2>
                            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
                        </div>
                        <div class="col-md-9">
                            <div class="owl-carousel owl-carousel3">

                                <?php
                                $args = array(
                                    'post_type' => 'services',
                                    'category_name'=>'portfolio-work'
                                );
                                $portwork = new WP_Query( $args ); ?>

                                <?php if ( $portwork->have_posts() ) {
                                    while ( $portwork->have_posts() ){
                                        $portwork->the_post();
                                        ?>

                                        <div class="recent-work-item">
                                            <em>
                                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>" alt="Amazing Project" class="img-responsive">
                                                <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                                <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                            </em>
                                            <a class="recent-work-description" href="javascript:;">
                                                <strong><?php the_title(); ?></strong>
                                                <b><?php echo get_post_meta( get_the_ID(),'company',true ); ?></b>
                                            </a>
                                        </div>
                                        <?php
                                        wp_reset_postdata();
                                    }
                                } else{
                                    ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                                }?>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT WORKS -->

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
    </div>
<?php get_footer(); ?>