<?php /* Don't remove this line. */ require(ABSPATH . 'wp-blog-header.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php global $ec3; $ec3->nocss=true; ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/1">

<!-- That's what your browser shows as title of the page -->

<title><?php bloginfo('name'); ?> <?php if (($withcomments) or ($single)) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>


<!--  Please edit the Metatags so they suit your blog -->
	
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="content-language" content="de"/>

<!-- That's your info here! -->

<meta name="author" content="Kzenon (kzenon@layers-of-stability.com)" />
<meta name="copyright" content="Kzenon (kzenon@layers-of-stability.com)" />
<meta name="audience" content="all" />


<!-- Keywords & Description - important for some search engines -->

<meta name="keywords" content="your, keyword, here"/>
<meta name="description" content="Please state here what your Blog is all about"/>

<!-- Link for CSS stylesheet -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<style type="text/css" media="screen">
    <!-- @import url( <?php bloginfo('template_directory'); ?>/ec3.css ); -->
</style>
<style type="text/css" media="screen">


#header		{
		height: 52px;
  		background: #FeFcF5;
		text-align: center;
		border-top: 4px solid #522f1c;
		min-width: 750px;
		}

#navbar 		{
		height: 29px;
  		padding-top: 11px;
  		background: #FeFbF5;
		text-align: center;
  		border-top: 1px solid #522f1c;
		border-bottom: 1px solid #522f1c;
		overflow: hidden; 
		min-width: 780px;
		}


#navbar a:hover		{
		color: #fff;
  		background: #522f1c;
		}

</style>



<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_settings('siteurl'); ?>/print.css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
<?php wp_get_archives('type=monthly&format=link'); ?>
	
<?php wp_head(); ?>
	
</head>


<!-- Finally finished declaring the HEADER of HTML 
Let's start the real page -->

<body>


<!-- Header - the CSS for this section is in THIS document - NOT the CSS. -->




<? // Begin Header ?>

<div id="header">
<div class="title"><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></div>
</div>

<? // End Header ?>


<!-- This is the line below the name of the blog. Currently it shows the Blog description. You can also abuse this as a top navigation, espcially if your Blog is part of a larger site. See an example of how to use it at www.law-blog.de if you're interested -->

<div id="navbar">
<h2>
<?php bloginfo('description'); ?> 
</h2>
</div>
