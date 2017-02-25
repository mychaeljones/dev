<?php get_header(); ?>

	<!-- The Loop
	=============================================== -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>	
	
		<!-- Page Title
		=============================================
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php the_title(); ?></h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li class="active">Blog Single</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-post nobottommargin">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<h2><?php the_title(); ?></h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta Data
							============================================= -->
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php the_time('F j, Y'); ?></li>
								<li><a href="#"><i class="icon-user"></i> admin</a></li>
								<li>
									<i class="icon-folder-open"></i> 
									<?php foreach((get_the_category()) as $category) {
										$cat_link = get_category_link($category->cat_ID);
										echo '<a href="'.$cat_link.'">'.$category->name.'</a> '; // category link
									}		
									?>
								</li>
								<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image bottommargin">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">
								<?php the_content(); ?>
								<!-- Post Single - Content End -->

								<!-- Tag Cloud
								============================================= -->
								<div class="tagcloud clearfix bottommargin">
									
									<?php
										/* Get Tags and display as Links
										============================================== */
										$posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
											echo '<a href="' . get_tag_link($tag->term_id) . '">';
											echo $tag->name . '</a>';
										  }
										}
									?>
									
								</div><!-- .tagcloud end -->

								<div class="clear"></div>

								<!-- Post Single - Share
								============================================= -->
								<div class="si-share noborder clearfix">
									<span>Share this Post:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div><!-- Post Single - Share End -->

							</div>
						</div><!-- .entry end -->

						<!-- Post Navigation
						============================================= -->
						<div class="post-navigation clearfix">

							<div class="col_half nobottommargin">
								<a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
							</div>

							<div class="col_half col_last tright nobottommargin">
								<a href="#">This is an Embedded Audio Post &rArr;</a>
							</div>

						</div><!-- .post-navigation end -->

						<div class="line"></div>

						<!-- Post Author Info
						============================================= -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Posted by <span><a href="#">John Doe</a></span></h3>
							</div>
							<div class="panel-body">
								<div class="author-image">
									<img src="images/author/1.jpg" alt="" class="img-circle">
								</div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
							</div>
						</div><!-- Post Single - Author End -->

						<div class="line"></div>

						<h4>Related Posts:</h4>

						<div class="related-posts clearfix">

							<div class="col_half nobottommargin">

								<div class="mpost clearfix">
									<div class="entry-image">
										<a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">This is an Image Post</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 10th July 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 12</a></li>
										</ul>
										<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
									</div>
								</div>

								<div class="mpost clearfix">
									<div class="entry-image">
										<a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">This is a Video Post</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 24th July 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 16</a></li>
										</ul>
										<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
									</div>
								</div>

							</div>

							<div class="col_half nobottommargin col_last">

								<div class="mpost clearfix">
									<div class="entry-image">
										<a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">This is a Gallery Post</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 8th Aug 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 8</a></li>
										</ul>
										<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
									</div>
								</div>

								<div class="mpost clearfix">
									<div class="entry-image">
										<a href="#"><img src="images/blog/small/22.jpg" alt="Blog Single"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">This is an Audio Post</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 21</a></li>
										</ul>
										<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
									</div>
								</div>

							</div>

						</div>
						
						<?php comments_template(); ?>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
		<?php endwhile; ?>
		
		<?php else : ?>
			<p><?php __('No Posts Found'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>