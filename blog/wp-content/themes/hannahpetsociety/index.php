<?php get_header(); ?>
		
<!-- Content
=========================================================== -->
<section id="content">

	<div class="content-wrap">


		<a class="button button-full button-purple center tright header-stick bottommargin-lg">
			<div class="container clearfix">

				
			</div>
		</a>


		<div class="container clearfix">
			<!-- Posts
			=================================================== -->			
			<div id="posts" class="post-grid grid-container post-masonry post-masonry-full grid-3 clearfix">
				
				<!-- The Loop
				=============================================== -->
				<?php if(have_posts()) : ?>
				
					<!-- add pagination functions here -->
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
						  'paged'          => $paged
						);
						
						$the_query = new WP_Query( $args ); 
					?>
				
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
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></a></li>
								<!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
							</ul>
							
							<!-- Post Content
							=================================== -->
							<div class="entry-content">
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
							</div>														
						</div><!-- clearfix end -->	
					<?php endwhile; ?>
					
					<?php else : ?>
						<p><?php __('No Posts Found'); ?></p>
				<?php endif; ?>				
			</div><!-- #posts end -->									
		</div><!-- .container clearfix end -->									
	</div><!-- .content-wrap end -->
</section><!-- #content end -->

	<!-- Pagination
	============================================= -->
	<div id="load-next-posts" class="center">
		<a href="<?php echo get_next_posts_page_link(); ?>" class="button button-3d button-dark button-large button-rounded">Load more..</a>
	</div>


<!-- INFINITE SCROLL
================================== -->
<script type="text/javascript" src="/js/jquery.js"></script>

<script type="text/javascript">

	jQuery(window).load(function(){

		var $container = $('#posts');

		$container.infinitescroll({
			loading: {
				finishedMsg: '<i class="icon-line-check"></i>',
				msgText: '<i class="icon-line-loader icon-spin"></i>',
				img: "../../images/preloader-dark.gif",
				speed: 'normal'
			},
			state: {
				isDone: false
			},
			nextSelector: "#load-next-posts a",
			navSelector: "#load-next-posts",
			itemSelector: "div.entry"
		},
		function( newElements ) {
			$container.isotope( 'appended', $( newElements ) );
			var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );
			SEMICOLON.initialize.resizeVideos();
			SEMICOLON.widget.loadFlexSlider();
			SEMICOLON.widget.masonryThumbs();
		});

	});
</script>

<?php get_footer('footer.php'); ?>