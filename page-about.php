<?php 
get_header(); ?>
    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php the_field('background_photo'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('about'); ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_content(); ?></h2>
                    <p><?php the_field('about-details'); ?></p>
                    
                 
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">What we do</h2>
                    <div class="spacer-30"></div>
                    <div class="embed-responsive embed-responsive-16by9">
                      <?php the_field('what_we_do'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2>Meet the team</h2>
                        <p> <?php the_field('details_team'); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member-style-2">
                        <img src="<?php the_field('person1'); ?>" alt="" class="img-about">
                        <h4><?php the_field('pers1'); ?> <span>Project Manager</span></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member-style-2">
                        <img src="<?php the_field('person2'); ?>" alt="" class="img-about">
                        <h4><?php the_field('pers2'); ?> <span>Senior Designer</span></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member-style-2">
                        <img src="<?php the_field('person3'); ?>" alt="" class="img-about">
                        <h4><?php the_field('pers3'); ?> <span>Wordpress Developer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <?php get_footer(); ?>