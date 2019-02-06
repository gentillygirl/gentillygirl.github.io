<?php get_header(); ?>

<!-- This table centers the layout -->

<table border="0" cellpadding="0" cellspacing="2" width="100%"><tr><td align="center" valign="middle">

<!-- start wrapper -->
<div id="main">

		
<!-- start section post -->
<div id="content">


<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<div class="navigation">
<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>
			
<!-- start headline of your post -->	
				
<div class="date"><?php the_time('d.m.y') ?></div>

<h1 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
</h1>

<h3><?php the_category(', ') ?></h3>

<!-- end headline of your post -->	
		
		
		
		
<!-- start entry of your post -->	

<div class="text">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
            <div class="utwtags"><span class="tags"><?php the_tags(); ?></span></div>
<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>	
</div>

<!-- end entry of your post -->			
		
		
<!-- start subline of your post  -->	

<div class="postmeta">
By <?php the_author() ?> <?php edit_post_link('Edit','','|'); ?>  <br />

Feedbacks on this entry via <a href="<?php bloginfo_rss('comments_rss2_url'); ?>">RSS 2.0</a><br /> 
						
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Please leave a <a href="#comment">Comment</a> or discuss via <a href="<?php trackback_url(display); ?>">Trackback</a>!<br />
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
Currently Comments are off, please use a <a href="<?php trackback_url(display); ?> ">Trackback</a>!<br />
						
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Please leave a Comment! Pings are currently off.<br />
			
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Currently, Comments and Pings are both off.<br />			
						
<?php } edit_post_link('Edit this entry.','',''); ?>
</div>

<!-- end subline of your post -->	


<?php comments_template(); ?>
	
<?php endwhile; else: ?>
	
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	
<?php endif; ?>
	

<!-- end section post -->



<!-- end section content -->
</div>
</div>

<?php get_sidebar(); ?>


<!-- end section wrapper -->	
</div>

<!-- End center table -->

</td>
</tr>
</table>

<?php get_footer(); ?>


</body>
</html>
