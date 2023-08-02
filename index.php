
<?php
/**
* Template name: index
*/
 get_header(); ?>

 
    <div class="hero-area wow fadeInUp">
        <div class="homepage-slidesn">
            <div class="single-slide-item slide-01">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="slide-text">
                                <h2><?php the_title();?></h2>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
	<div class="container">	
	<?php $args = array(
    'post_type'      => 'service',
    'post_status'    => 'publish',
    'posts_per_page' => - 1,
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    $key=0;
    while ( $query->have_posts() ):
        $query->the_post();
        $key=$key+1;
        if(is_int($key/3)):
            ?> 
            <div class="row">
            <?php endif ?>
                <div class="col-sm-4">
                    <div class="service-box-style-5">
                        <h3><?php the_title();?></h3>		
                        <p><?php the_content();?></p>
                        <a href="<?php the_permalink(); ?>" class="readmore-btn">See more  <i class="fa fa-angle-right"></i></a>
                    </div>
                <?php if(is_int($key/3)) : ?> 	</div> <?php endif ?>
            </div>
                        <?php
endwhile; endif;
wp_reset_postdata();

?>
	
	</div>
</div>

    
    <div class="content-block gray-bg">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="section-heading">
					<h2>Our works</h2>
					<p>Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. </p>
				</div>
			</div>
		</div>
		<div class="container">
        <?php
        $args1 = array(
            'post_type'      => 'case',
            'post_status'    => 'publish',
            'posts_per_page' => - 1,
        );
        
        $query = new WP_Query( $args1 );
        
	if($query->have_posts() ) :
		$key=0;
	while($query->have_posts()): $query->the_post();
	    $key=$key+1;
		 if(is_int($key/4)) : ?> 
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
        wp_reset_postdata();
        ?>
        </div>
            

    </div>
	
      
	
    <div class="content-block">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2>Meet the team</h2>
                        <p>Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. </p>
                    </div>
                </div>
            </div>
            <?php
             $args2 = array(
                'post_type'      => 'employe',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            );
            
            $query = new WP_Query( $args2 );
            
         
	if($query->have_posts() ) : 
		$key=0;
	while($query->have_posts()): 
        $query->the_post();
	    $key=$key+1;
        if($key<4):
?>
           
                <div class="col-sm-4">
                    <div class="team-member-style-2">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/team-member-2.jpg" alt="">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title();?> </a><span><?php the_content();?></span></h4>
                    </div>
                </div>
               	<?php  endif ?>
		
        <?php
        endwhile; endif;
        wp_reset_postdata();
        ?>
            
        </div>
   </div> 
		
    <div class="content-block gray-bg wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Customers loves us for our work.<br/> Here are some valuable comments.</h3>
                    
                    <div class="testimonial-carousel">
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p><?php if ( comments_open() || get_comments_number() ) :
	comments_template('comments.php');

endif;

$comment=get_comments(); 

$comment0=$comment[0];
$comment0=(array)$comment0;
echo $comment0['comment_content'];?></p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/author.jpg" alt="">
                                <h4><?php echo $comment0['comment_author'];?></h4>
                                <?php echo $comment0['comment_date']; ?>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p><?php 

$comment1=$comment[1];
$comment1=(array)$comment1;
echo $comment1['comment_content'];?></p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/author-2.jpg" alt="">
                                <h4><?php echo $comment1['comment_author'];?></h4>
                                <?php echo $comment1['comment_date']; ?>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p><?php 

$comment2=$comment[2];
$comment2=(array)$comment2;
echo $comment2['comment_content'];?></p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/author.jpg" alt="">
                                <h4><?php echo $comment2['comment_author'];?></h4>
                                <?php echo $comment2['comment_date']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php get_footer(); ?>
    
