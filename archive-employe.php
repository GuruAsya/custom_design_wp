<?php get_header(); ?>
    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Meet the team</h2>
                    <p>Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. </p>
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

		<?php if($key===3) : ?> 
            <div class="row">
            <?php endif ?>
                <div class="col-sm-4">
                    <div class="team-member-style-2 row">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/team-member-2.jpg" alt="">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title();?> </a><span><?php the_content();?></span></h4>
                        
                    </div>
                    
                </div>
                <?php if($key===3) : ?> 	</div> <?php endif ?> 
		
        <?php
        endwhile; endif;
        ?>
              
            </div>			
			
			
			
			
			
			
			<div class="blog-pagination">
				<ul class="pagination"> 
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li> 
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> 
					<li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> 
					<li><a href="#">5</a></li> 
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li> 
				</ul>
			</div>
        </div>
   
    

    
    <?php get_footer(); ?>