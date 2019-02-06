<?php get_header(); ?>

<!-- This table centers the layout ------>

<table border="0" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr>
<td align="center" valign="middle">

<!-- start main - holds the layout, others name it "wrapper" -->

<div id="main">


<!-- start section content -->
<div id="content">

<?php
/*
Template Name: Links
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="text">
                                <?php the_title('<div class="date">', '</div>'); ?><br />
				<?php the_content('<p class="test">Read the Rest of this Entry &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
</div>

<!-- The Linkloop -->

 <?php
 $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
 foreach ($link_cats as $link_cat) {
 ?>
  <div class="text" id="linkcat-<?php echo $link_cat->cat_id; ?>"><h3><?php echo $link_cat->cat_name; ?></h3>
   <?php wp_get_links($link_cat->cat_id); ?>
  </div>
 <?php } ?>

<!-- start subline of your post  -->	

<div class="postmeta">
Von <?php the_author() ?> <?php edit_post_link('Edit','','|'); ?>  <br>

Reaktionen auf diesen Beitrag via <a href="<?php bloginfo_rss('comments_rss2_url'); ?>">RSS 2.0</a><br /> 
						
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Bitte <a href="#comment">Comment</a> here or via <a href="<?php trackback_url(display); ?>">Trackback</a>!<br />
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
Comments are off, but please leave a <a href="<?php trackback_url(display); ?> ">Trackback</a>!<br />
						
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Please leave a Comment, Trackbacks are currently off<br />
			
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Comments and Pings are currently off<br>			
						
<?php } edit_post_link('Edit this entry.','',''); ?>
</div>

<!-- end subline of your post -->	
					
<?php trackback_rdf(); ?>
<?php comments_template(); ?>
			
<?php endwhile; endif; ?>
	
<!-- end section content -->
</div>
</div>


<!-- end content -->

<?php get_sidebar(); ?>

	
</div>


<!-- end section wrapper -->

<!-- End center table --------------->

</td>
</tr>
</table>

<?php get_footer(); ?>