<?php get_header(); ?>

    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/cta-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our works</h2>
                    <p>The ultimate multipurpose Business Theme that you can use for any of your business or clients.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block gray-bg">
        <div class="container">
        <?php
	if(have_posts()):
		$key=0;
	while(have_posts()): the_post();
	    $key=$key+1;
		?> 

		<?php if(is_int($key/4)) : ?> 
            <div class="row">
            <?php endif ?>
                <div class="col-md-3 col-sm-6">
                    <a href="<?php the_permalink(); ?>" class="single-agency-project">
                        <div style="background-image: url(<?php bloginfo('template_directory') ?>/assets/img/project-1.jpg)" class="project-bg">
                            <i class="fa fa-link"></i>
                        </div>
                        <div class="agency-project-info">
                        <h3><?php the_title();?></h3>		
					<p><?php the_content();?></p>
                        </div>
                    </a>
                </div>
                <?php if(is_int($key/4)) : ?> 	</div> <?php endif ?>
		
        <?php
        endwhile; endif;
        ?>
            
                
        </div>
    </div>   
    
   <?php get_footer(); ?>