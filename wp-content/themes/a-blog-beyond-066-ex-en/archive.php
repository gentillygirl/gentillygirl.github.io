<?php get_header(); ?>

<!-- This table centers the layout -->

<table border="0" cellpadding="0" cellspacing="2" width="100%">
<tr>
<td align="center" valign="middle">

<!-- start wrapper - holds the blog content and sidebar together -->
<div id="main">

<!-- start section content -->
<div id="content">

<?php if (have_posts()) : ?>
	
	
	
	
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>	

		
<div class="date">Category Archive '<?php echo single_cat_title(); ?>'</div>
		
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<div class="date">Archive for <?php the_time('F jS, Y'); ?></div>
		
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

<div class="date">Archive for <?php the_time('F, Y'); ?></div>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

<div class="date">Archive for <?php the_time('Y'); ?></div>
		
<?php /* If this is a search */ } elseif (is_search()) { ?>
<div class="date">Search Result</div>

		
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<div class="date">Author Archive</div>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Blog Archive</h2>

<?php } ?>


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
		
		
		
<!-- start subline of your post  -->	

<div class="postmeta">
By <?php the_author() ?> <?php edit_post_link('Edit','','|'); ?>  <br /><?php comments_popup_link('Comment This!', '1 Comment', '% Comments'); ?> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Permalink</a>
</div>  

<!-- end subline of your post -->
				
							
				
				<!--
				<?php trackback_rdf(); ?>
				-->
				

			</div>
			<!-- end section post -->



<?php endif; ?>	
		<?php endwhile; ?>

<div class="navigation">
<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
<div class="alignright"><?php posts_nav_link('','Newer Entries &raquo;','') ?></div>
</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
		<?php include "searchform.php"; ?>

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
