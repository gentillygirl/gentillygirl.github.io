<?php
/*
Template Name: Archives
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

<div class="date">Archives</div>

<h3>Monthly</h3>
<div class="text">
    <?php wp_get_archives('type=monthly'); ?>
</div>

</div>	

<!-- end content -->

<?php get_sidebar(); ?>

	
</div>


<!-- end section wrapper -->

<!-- End center table -->

</td>
</tr>
</table>

<?php get_footer(); ?>

