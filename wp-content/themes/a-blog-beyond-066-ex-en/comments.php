<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p><?php _e("Sorry, but this post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = "graybox";
?>

<!-- You can start editing here. -->


<!-- start section content -->
<div id="comments">



<?php if ($comments) : ?>
<a name="comments"></a><div class="date"><?php comments_number('No Feedback', 'One Feedback', '% Feedbacks' );?> on "<?php the_title(); ?>"</div> 



<?php foreach ($comments as $comment) : ?>

		
		
<a name="comment-<?php comment_ID() ?>"></a><h3><?php comment_author_link() ?></h3>

<!-- start text of the comment -->	
<div class="text">
<?php comment_text() ?>
</div>
<!-- end text of the comment -->	

<div class="postmeta"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d.m.y') ?> um <?php comment_time() ?></a> <?php edit_comment_link('edit','',''); ?></div><br /><br />
	
			

<?php endforeach; /* end for each comment */ ?>



<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post-> comment_status) : ?> 
<!-- If comments are open, but there are no comments. -->
		
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<div class="postmeta">Comments closed</div>
<!-- </dov> -->
		
<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>

<div class="date">Comments</div>
<a name="comment"></a><h1>Please Leave a Comment!</h1>

<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<p><label for="author"><small>Your Neme:</small></label><br /><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" /></p>


<p><label for="email"><small>Your Email (will not be shown):</small></label><br /><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />
</p>

<p><label for="url"><small>Your Website:</small></label><br /><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" /></p>

<p><label for="subscribe"><small>Please notify me in case of further comments!</small></label><input type="checkbox" name="subscribe" id="subscribe" value="subscribe">
</p>

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<?php if ('none' != get_settings("comment_moderation")) { ?>
<div class="sidetext"><div align="center"><strong>Please not:</strong> Comments may be moderated. It may take a while for them to show on the page.</div></p>      
<?php } ?>

<p align="center"><input name="submit" type="submit" id="submit" tabindex="5" value="Send!" /></p>


</form>

	</div>
	<!-- end section comments -->
	
	<br /><br /><br /><br />

<?php // if you delete this the sky will fall on your head
endif; ?>
