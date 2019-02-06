<!-- start sidebar -->




<div id="secondary">

<!-- start archives -->


<?php /* If this is a category archive */ if (is_category()) { ?>				
<div class="sidehead">Your are browsing</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> in the '<?php echo single_cat_title(); ?>' Category.</div>
			
<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
<div class="sidehead">Your are browsing</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> for <?php the_time('l F jS Y'); ?>.</div>
			
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<div class="sidehead">Your are browsing</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> for <?php the_time('F Y'); ?>.</div>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<div class="sidehead">Your are browsing</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> for the year <?php the_time('Y'); ?>.</div>
			
<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>


<div class="sidehead">You are searching</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> for <strong>'<?php echo $s; ?>'</strong>. In the event your search does not lead to the desired results please use the categories.</div>

<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<div class="sidehead">You are browsing</div>
<div class="sidetext">the Archives of <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>.</div>

<?php } ?>



<div class="sidehead">
<?php _e('Recent Comments'); ?>
</div>


<div class="sidetext">
<ul><?php blc_latest_comments(12, 6, false, "<li>", "</li>", true, 10, "#BDE271"); ?></ul>
</div>


<div class="sidehead">
<?php _e('Categories'); ?>
</div>


<div class="sidetext">
<ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul>
</div>

<!-- end archives -->		


<!-- start blogroll -->

<?php if (is_home()) { ?>

<ul id="links">
<?php wp_list_bookmarks(); ?>
</ul>

<div class="sidehead">
Links
</div>
 <?php
 $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
 foreach ($link_cats as $link_cat) {
 ?>
  
<div class="sidetext" id="linkcat<?php echo $link_cat->cat_id; ?>"><?php echo $link_cat->cat_name; ?>
<ul><?php wp_get_links($link_cat->cat_id); ?>
</ul></div>

<?php } ?>
<?php } ?>

<!-- end blogroll -->
		

<div class="sidehead">Archives</div>
<div class="sidetext">
<?php wp_get_archives('type=monthly'); ?>
</div>

    <!--  START META  -->
    <div class="sidehead"><?php _e('Meta'); ?></div>
    <div class="sidetext">
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
        <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
        <li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
        <li><a href="http://my.statcounter.com/project/standard/stats.php?project_id=1531256&amp;guest=1">Statistics</a></li>
        <?php wp_meta(); /* do not remove this line */ ?>
      </ul>
      </div>
    <!--  END META  -->
    <ul class="icons">
    <li>
    <a href="http://clustrmaps.com/counter/maps.php?url=http://gentillygirl.com/" ><img src="http://clustrmaps.com/counter/index2.php?url=http://gentillygirl.com/" alt="Locations of visitors to this page"/></a>
    </li>
    <li>
   <a href="http://validator.w3.org/check?uri=referer"><img
           src="http://www.w3.org/Icons/valid-xhtml10"
                   alt="Valid XHTML 1.0 Transitional" height="31"
                   width="88" /></a></li>
    </ul>

    <ul class="chicklets">
        <li>
            <!-- Site Meter XHTML Strict 1.0 -->
            <script type="text/javascript"
            src="http://sm2.sitemeter.com/js/counter.js?site=sm2gentillygirl">
            </script>
            <!-- Copyright (c)2006 Site Meter -->
        </li>
        <li>
        <a href="http://feeds.feedburner.com/gentillygirl"><img
        src="http://feeds.feedburner.com/~fc/gentillygirl?bg=99CCFF&amp;fg=444444&amp;anim=0"
        height="26" width="88" style="border:0" alt="" /></a>
        </li>
        <li>
        <a href="http://www.feedblitz.com/f/?Sub=55655">
        <img title="Subscribe and get your updates by email" border="0"
        src="http://www.feedblitz.com/i/9c/55655.bmp"/></a>
        </li>
    </ul>
<!-- end secodary -->


</div>

<!-- start Sidebar (the third column) -->

<div id="sidebar">

<div class="sidehead">About</div>
<div class="sidetext">The thoughts and dreams of a New Orleans Native exiled from her home by
Hurricane Katrina. It is also my place to defend the rebuilding of
Gentilly, the best part of the city. </div>


<div class="date"><label for="s">Search</label></div>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<div class="date"><label for="e">Subscribe via Email</label></div>
<form method="post" action="http://www.feedblitz.com/f/f.fbz?AddNewUserDirect">
<p>Enter your Email</p>
<input id="e" name="EMAIL" class="entry" maxlength="255" type="text" value=""/>
<input class="send" type="submit" value="Subscribe"/>
<input name="FEEDID" type="hidden" value="55655"/>
<p>Powered by <a href="http://www.feedblitz.com">FeedBlitz</a></p>
</form>

<div class="sidetext">
<a href="http://gentillygirl.com/?ec3_vcal">Subcribe with vCalendar</a>
</div>

<div class="sidehead">Feeds</div> 
<div class="sidetext">

<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a><br />
<a href="<?php bloginfo('comments_rss2_url'); ?>">Commentes (RSS)</a><br />

<?php if (function_exists('wp_theme_switcher')) : ?>
<div class="sidehead">Themes</div>
<div class="sidetext">
				<?php wp_theme_switcher(); ?>
</div>
<?php endif; ?>

</div>


</div>
