<?php get_header(); ?>
    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our latest blog.</h2>
                    <p>The ultimate multipurpose Business Theme that you can use for any of your business or clients.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                   
                    <?php
	if(have_posts()):
		$key=0;
	while(have_posts()): the_post();
	    $key=$key+1;
		?> 
        <?php if(is_int($key/2)) : ?> 
        <div class="row">
		<?php endif ?>
                        <div class="col-sm-6">
                            <a href="<?php the_permalink(); ?>" class="single-boxed-item wow fadeInUp">
                                <div class="boxed-preview" style="background-image: url(<?php bloginfo('template_directory') ?>/assets/img/blog-1.jpg)"></div>
                                <h4><?php the_title();?></h4>
                                <?php $object=get_post();
                                $array=(array)$object;
    
                               echo $array['post_date'];
                               wp_reset_postdata();

                             ?>
                            </a>
                        </div>

                        <?php if(is_int($key/2)) : ?> 	</div> <?php endif ?>
		
        <?php
        endwhile; endif;

        ?>
               
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
                <div class="col-sm-4">
                    <div class="widget">
                        <form class="search-form" action="blog.html">
                            <input type="search" placeholder="Type to search here...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    
                    <div class="widget recent_posts">
                        <h3 class="widget-title">Recent posts</h3>
                        <ul>
                            <li><a href="">How to Create a Countdown Timer With a Full Screen Background Video. <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Re-Order Your Blog Posts (with 2 Methods) <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Create a Countdown Timer With a Full Screen Background Video. <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Re-Order Your Blog Posts (with 2 Methods) <span>21st Nov, 2016</span></a></li>
                        </ul>
                    </div>
                    
                    <div class="widget category_list">
                        <h3 class="widget-title">Category</h3>
                        <ul>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Business</a></li>
                            <li><a href="">Education</a></li>
                            <li><a href="">Movies</a></li>
                            <li><a href="">Travel</a></li>
                            <li><a href="">Marketing</a></li>
                            <li><a href="">Development</a></li>
                            <li><a href="">Design</a></li>
                            <li><a href="">Sports</a></li>
                            <li><a href="">Music</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
    <?php get_footer(); ?>