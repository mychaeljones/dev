<?php if (have_comments()) { ?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">

	<h3 id="comments-title"><span></span> Comments</h3>

	<!-- Comments List
	============================================= -->		
	<ol class="commentlist clearfix">
	<?php
		foreach($comments as $comment) {
	?>	
		<li class="comment even thread-even depth-1" id="li-comment-1">

			<div id="comment-1" class="comment-wrap clearfix">

				<div class="comment-meta">

					<div class="comment-author vcard">

						<span class="comment-avatar clearfix">
							<!-- Comment Avatar -->
							<?php echo get_avatar( $comment, 60 ); ?>
						</span>

					</div>

				</div>

				<div class="comment-content clearfix">

					<div class="comment-author"><?php comment_author(); ?><span><a href="#" title="Permalink to this comment"><?php comment_date(); ?></a></span></div>

					<p><?php comment_text(); ?></p>

					<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

				</div>

				<div class="clear"></div>

			</div>
		</li>
	<?php }	?>
	</ol>
		


	<div class="clear"></div>

<?php } else { // or, if we don't have comments:

	if(!comments_open()) { ?>
		<p class="nocomments"><?php _e('Comments are closed.', 'HPS'); ?></p>
	<?php } // end ! comments_open() ?>
<?php } // end have_comments() ?>
	
	<!-- Comment Form
	============================================= -->
	<div id="respond" class="clearfix">

		<h3>Leave a <span>Comment</span></h3>

		<form class="clearfix" action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform">
			<input type="hidden" name="comment_post_ID" value='<?php echo $post->ID; ?>' id='comment_post_ID' />

			<div class="col_one_third">
				<label for="author">Name</label>
				<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
			</div>

			<div class="col_one_third">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
			</div>

			<div class="col_one_third col_last">
				<label for="url">Website</label>
				<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
			</div>

			<div class="clear"></div>

			<div class="col_full">
				<label for="comment">Comment</label>
				<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
			</div>

			<div class="col_full nobottommargin">
				<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
			</div>

		</form>

	</div><!-- #respond end -->

	



</div><!-- #comments end -->