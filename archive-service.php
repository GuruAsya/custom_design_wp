
<?php 

get_header(); ?>



    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/cta-bg-4.jpg">
	
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Services we offer<br/> for your businsee.</h2>
                    <p>The ultimate multipurpose Business Theme that you can use for any of your business or clients.</p>
                </div>
            </div>
        </div>
    </div>
<div class="content-block">
	<div class="container">	
	<?php
	if(have_posts()):
		$key=0;
	while(have_posts()): the_post();
	    $key=$key+1;
		?> 

		<?php if(is_int($key/3)) : ?> 
		<div class="row">
		<?php endif ?>
			<div class="col-sm-4">
				<div class="service-box-style-5">
					<h3><?php the_title();?></h3>		
					<p><?php the_content();?></p>
					<a href="<?php the_permalink(); ?>" class="readmore-btn">See more  <i class="fa fa-angle-right"></i></a>
				</div>
		</div>
				<?php if(is_int($key/3)) : ?> 	</div> <?php endif ?>
		
<?php
endwhile; endif;
?>
	
	</div>
</div>

<div class="specer-70"></div>
 
<div data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/cta-bg-4.jpg" class="cta-style-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="cta-content-wrap">
					<h2>Get a free quote from our experts</h2>
					<p>Best support you might get from online</p>
				</div>
				<a href="<?php bloginfo('template_directory') ?>/get-a-quote-1.php" class="boxed-btn">Get a FREE quote <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>        
</div>   
    <?php get_footer();?>