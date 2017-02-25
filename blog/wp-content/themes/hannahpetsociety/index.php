<?php get_header(); ?>
		
		<!-- Content
		=========================================================== -->
		<section id="content">

			<div class="content-wrap">

				<a class="button button-full button-purple center tright header-stick bottommargin-lg">
					<div class="container clearfix">
						Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<!-- Posts
				=================================================== -->			
				<div id="posts" class="post-grid grid-container post-masonry post-masonry-full grid-3 clearfix">
					
					<!-- The Loop
					=============================================== -->
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>	
							<div class="entry clearfix">			
											
								<!-- Post Image 
								// Image pop up. Not link 
								=================================== -->
								<div class="entry-image">
									<?php if(has_post_thumbnail()) : ?>
										<a href="<?php the_post_thumbnail_url('full'); ?>" data-lightbox="image">
											<img class="image_fade" src="<?php the_post_thumbnail_url(); ?>" alt="Standard Post with Image">
										</a>
									<?php endif; ?>
								</div>
								
								<!-- Post Title
								===================================	-->
								<div class="entry-title">
									<h2>
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>
								</div>
								
								<!-- Post Meta Data
								=================================== -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php the_time('F j, Y'); ?></li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li>
								</ul>
								
								<!-- Post Content
								=================================== -->
								<div class="entry-content">
									<p><?php the_excerpt(); ?></p>
									<a href="blog-single.html"class="more-link">Read More</a>
								</div>	
								
							</div><!-- clearfix end -->				
						<?php endwhile; ?>
						
						<?php else : ?>
							<p><?php __('No Posts Found'); ?></p>
					<?php endif; ?>
				</div><!-- #posts end -->
			</div><!-- .content-wrap end -->

		</section><!-- #content end -->

<?php get_footer('footer.php'); ?>