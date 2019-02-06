<?php get_header(); ?>

<!-- This table centers the layout -->

<table border="0" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr>
<td align="center" valign="middle">

<!-- start wrapper - holds the blog content and sidebar together -->
<div id="main">

<!-- start section content -->
<div id="content">
	
	

<?php if (have_posts()) : ?>

<div class="date">Search Result</div>
		
<div class="navigation">
<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
<div class="alignright"><?php posts_nav_link('','Newer Entries &raquo;','') ?></div>
</div>

		<?php $postCount=0; ?>
<?php while (have_posts()) : the_post(); ?>
		
			<?php $postCount++;?>
<?php   if (!is_single() && in_category(16)) : ?>
        <ul class="asides asides-<?php echo $postCount ;?>" >
           <li class="aside text aside-<?php echo $postCount; ?>" >
            <span class="asidetitle"><a href="<?php the_permalink() ?>"
            rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title() ?> &raquo;</a></span>
		<?php echo wptexturize($post->post_content); ?> <a href="<?php
        the_permalink(); ?>"><?php comments_number(' Comments (0)',
        ' Comments (1)', ' Comments (%)'); ?></a> <?php edit_post_link('e', '<small>(', ')</small>'); ?>
            </li>
         </ul>

<?php else : ?>
		
<!-- start section post -->
<div class="post">
			
			
			
<!-- headline of your  post -->	
<div class="date"><?php the_time('d.m.y') ?></div>
		
<h1 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
</h1>

<h3><?php the_category(', ') ?></h3>

<!-- end headline of your post -->	
	
	
	
<!-- start entry of your  post -->	
<div class="text">
<?php the_content('Read the rest of this entry &raquo;'); ?>
            <div class="utwtags"><span class="tags"><?php UTW_ShowTagsForCurrentPost("commalist") ?></span></div>
</div>
<!-- end entry headline of your post -->	
		
		
		
<!-- start subline of your post: Author, Date, Edit and Permalink -->	
<div class="postmeta">
By <?php the_author() ?> | <?php edit_post_link('Edit','','|'); ?>  <br /><?php comments_popup_link('Comment this!', '1 Comment', '% Comments'); ?> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Permalink</a>
</div> 
<!-- end subline of your post -->
				
							
				
				<!--
				<?php trackback_rdf(); ?>
				-->
				

			</div>
			<!-- end section post -->

<?php endif ; ?>	
		<?php endwhile; ?>

<div class="navigation text">
<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
<div class="alignright"><?php posts_nav_link('','Newer Entries &raquo;','') ?></div>
</div>
	
	<?php else : ?>

<div class="date">Sorry, nothing matched your serarch criteria!</div><br /><br />
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>
		
</div>
<!-- end section content -->
	



<?php get_sidebar(); ?>


	
</div>
<!-- end section wrapper -->


<!-- End center table -->

</td>
</tr>
</table>

<?php get_footer(); ?>

</body>
</html>
