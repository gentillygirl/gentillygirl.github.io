<?php
function stupid_hack($str) {
return preg_replace('|</ul>\s*<ul class="asides">|', '', $str);
}
ob_start('stupid_hack');
?>
<?php get_header(); ?>

<!-- This table centers the layout -->

<table border="0" cellpadding="0" cellspacing="2" width="100%">
<tr>
<td align="center" valign="middle">

<!-- start main - holds the layout, others name it "wrapper" -->

<div id="main">



<!-- start section content -->

<div id="content">
    <?php if (is_tag()) : ?>
    <div class="date">Posts tagged <?php single_tag_title('Currently
    browsing '); ?>
    </div>
    <?php endif; ?>

<?php if (have_posts()) : ?>
		<?php $postCount=0; ?>
<?php while (have_posts()) : the_post(); ?>
			<?php $postCount++;?>
<?php   if ($postCount != 1 && !is_single() && in_category(16)) : ?>
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

<!-- start section content -->

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
            <div class="utwtags"><span class="tags"><?php the_tags('',', ',''); ?></span></div>
</div>

<!-- end entry headline of your post -->	
		
		
		
<!-- start subline of your post: Author, Date, Edit and Permalink -->	

<div class="postmeta">
By <?php the_author() ?> <?php edit_post_link('Edit','','|'); ?>  <br /><?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Permalink</a> | <a href="<?php trackback_url(display); ?>">Trackback</a>
</div> 

<!-- end subline of your post -->
				
							
				
<!--
<?php trackback_rdf(); ?>
-->
				

</div>

<!-- end section post -->


<?php endif; ?>	
<?php endwhile; ?>

<div class="text"><div align="center"><?php posts_nav_link('','','&laquo; Previous Entries') ?><br />
<?php posts_nav_link('','Newer Entries &raquo;','') ?></div>
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

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=1531256; 
var sc_invisible=1; 
var sc_partition=14; 
var sc_security="99213e9b"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
class="statcounter"><a class="statcounter"
href="http://www.statcounter.com/"><img class="statcounter"
src="http://c15.statcounter.com/counter.php?sc_project=1531256&java=0&security=99213e9b&invisible=1"
alt="website hit counter" /></a></div></noscript>
<!-- End of StatCounter Code -->
</body>
</html>
