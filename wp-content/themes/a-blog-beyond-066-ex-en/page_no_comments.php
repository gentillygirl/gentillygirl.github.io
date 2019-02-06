<?php
/*
Template Name: Page_no_comments
*/
?>

<?php get_header(); ?>

<!-- This table centers the layout -->

<table border="0" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr>
<td align="center" valign="middle">

<!-- start main - holds the layout, others name it "wrapper" -->

<div id="main">


<!-- start section content -->

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="text">
                                <?php the_title('<div class="date">', '</div>'); ?><br />
				<?php the_content('<p class="test">Read the rest of this page &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
</div>
				
<?php endwhile; endif; ?>
	
<!-- end section content -->
</div>

<?php get_sidebar(); ?>

	
</div>


<!-- end section wrapper -->

<!-- End center table -->

</td>
</tr>
</table>

<?php get_footer(); ?>