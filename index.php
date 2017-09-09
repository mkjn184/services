<?php get_header(); //get header ?>
    <div class="container">
        <div class="row">
            <!-- Carousel -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <?php
                    $args = array(
                        'post_type' => 'services',
                        'category_name' => 'sliders',
                        'posts_per_page' => 3
                    );
                    $sliders = new WP_Query($args); ?>

                    <?php if ($sliders->have_posts()) {
                        while ($sliders->have_posts()) {
                            $sliders->the_post();
                            ?>
                            <li data-target="#carousel-example-generic"
                                data-slide-to="<?php echo $i; ?>" class="<?= ($sliders->current_post == 0) ? 'active' : '' ?>"></li>
                                <?php
                        }
                    } else {
                        ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
                    } ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php if ($sliders->have_posts()) {
                        while ($sliders->have_posts()) {
                            $sliders->the_post();
                            ?>

                            <div class="item <?= ($sliders->current_post == 0) ? 'active' : '' ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                     alt="<?php echo get_post_meta(get_the_ID(), 'alt_img', true); ?>">
                                <!-- Static Header -->
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                        <h2>
                                            <span><?php the_title(); ?></span>
                                        </h2>
                                        <br>
                                        <h3>
                                            <?php the_content(); ?>
                                        </h3>
                                        <br>
                                    </div>
                                </div><!-- /header-text -->
                            </div>
                            <?php
                            wp_reset_postdata();
                        }
                    } else {
                        ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
                    } ?>
                    <!--<div class="item">
                        <img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Second slide">
                        <!-- Static Header
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h2>
                                    <span>Welcome to LOREM IPSUM</span>
                                </h2>
                                <br>
                                <h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                </h3>
                                <br>
                            </div>
                        </div><!-- /header-text
                    </div>
                    <div class="item">
                        <img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
                        <!-- Static Header
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h2>
                                    <span>Welcome to LOREM IPSUM</span>
                                </h2>
                                <br>
                                <h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                </h3>
                            </div>
                        </div><!-- /header-text
                    </div>-->
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!-- /carousel -->
        </div>
    </div>

    <div class="main">
        <div class="container">
            <!-- BEGIN SERVICE BOX -->
            <div class="row service-box margin-bottom-40">

                <?php
                $args = array(
                    'post_type' => 'services',
                    'category_name' => 'services',
                    'posts_per_page' => 3
                );
                $services = new WP_Query($args); ?>

                <?php if ($services->have_posts()) {
                    while ($services->have_posts()) {
                        $services->the_post();
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="service-box-heading">
                                <em><i class="<?php echo get_post_meta(get_the_ID(), 'font_icon', true); ?> <?php echo get_post_meta(get_the_ID(), 'color_icon', true); ?>"></i></em>
                                <span><?php the_title(); ?></span>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php
                        wp_reset_postdata();
                    }
                } else {
                    ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
                } ?>

                <!--<div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-location-arrow blue"></i></em>
                        <span>Multipurpose Template</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-check red"></i></em>
                        <span>Well Documented</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-compress green"></i></em>
                        <span>Responsive Design</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
                </div>-->
            </div>
            <!-- END SERVICE BOX -->

            <!-- BEGIN RECENT WORKS -->
            <div class="row recent-work margin-bottom-40">
                <div class="col-md-3">
                    <h2><a href="portfolio.html">Recent Works</a></h2>
                    <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde
                        voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="col-md-9">
                    <div class="owl-carousel owl-carousel3">

                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'category_name' => 'recent',
                            'posts_per_page' => 3
                        );
                        $recent = new WP_Query($args); ?>

                        <?php if ($recent->have_posts()) {
                            while ($recent->have_posts()) {
                                $recent->the_post();
                                ?>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                             alt="<?php echo get_post_meta(get_the_ID(), 'alt_ind', true); ?>"
                                             class="img-responsive">
                                        <a href="service.php"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                           class="fancybox-button"
                                           title="<?php echo get_post_meta(get_the_ID(), 'title_img', true); ?>"
                                           data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong><?php the_title(); ?></strong>
                                        <b><?php echo get_post_meta(get_the_ID(), 'corp', true); ?></b>
                                    </a>
                                </div>
                                <?php
                                wp_reset_postdata();
                            }
                        } else {
                            ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
                        } ?>


                        <!--<div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>
                    <div class="recent-work-item">
                        <em>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="javascript:;">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </div>-->
                    </div>
                </div>
            </div>
            <!-- END RECENT WORKS -->

            <!-- BEGIN TABS AND TESTIMONIALS -->
            <div class="row mix-block margin-bottom-40">
                <div class="col-md-7">
                    <div class="row margin-bottom-40 our-clients">
                        <div class="col-md-12 margin-bottom-40">
                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name' => 'our-clients'
                            );
                            $clients = new WP_Query($args); ?>

                            <?php if ($clients->have_posts()) {
                            while ($clients->have_posts()){
                            $clients->the_post();
                            ?>
                            <h2><a href="javascript:;"><?php the_title(); ?></a></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php
                        wp_reset_postdata();
                        }
                        } else {
                            ?><p><?php _e('Sorry, no clients matched your criteria.'); ?></p><?php
                        } ?>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel6-brands">
                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name' => 'our-clients_img',
                                'posts_per_page' => 6
                            );
                            $ourclientsimg = new WP_Query($args); ?>

                            <?php if ($ourclientsimg->have_posts()) {
                                while ($ourclientsimg->have_posts()) {
                                    $ourclientsimg->the_post();
                                    ?>
                                    <div class="client-item">
                                        <a href="javascript:;">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                                 class="img-responsive" alt="">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                                 class="color-img img-responsive" alt="">
                                        </a>
                                    </div>
                                    <?php
                                    wp_reset_postdata();
                                }
                            } else {
                                ?><p><?php _e('Sorry, no our-clients_img matched your criteria.'); ?></p><?php
                            } ?>
                            <!--<div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_2_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_2.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_3_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_3.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_4_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_4.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_5_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_5.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIALS -->
            <div class="col-md-5 testimonials-v1">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'category_name' => 'clients',
                            'posts_per_page' => 3
                        );
                        $clients = new WP_Query($args); ?>

                        <?php if ($clients->have_posts()) {
                            while ($clients->have_posts()) {
                                $clients->the_post();
                                ?>
                                <div class="item">
                                    <blockquote><p><?php the_content(); ?></p></blockquote>
                                    <div class="carousel-info">
                                        <img class="pull-left"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img1-small.jpg"
                                             alt="">
                                        <div class="pull-left">
                                            <span class="testimonials-name"><?php the_title(); ?></span>
                                            <span class="testimonials-post"><?php the_title(); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                wp_reset_postdata();
                            }
                        } else {
                            ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php
                        } ?>
                        <!--<div class="item">
                            <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                            <div class="carousel-info">
                                <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img5-small.jpg" alt="">
                                <div class="pull-left">
                                    <span class="testimonials-name">Kate Ford</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                            <div class="carousel-info">
                                <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img2-small.jpg" alt="">
                                <div class="pull-left">
                                    <span class="testimonials-name">Jake Witson</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>-->
                    </div>

                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
            <!-- END TESTIMONIALS -->
        </div>
        <!-- END TABS AND TESTIMONIALS -->
    </div>
<?php get_footer(); ?>