<?php // Do not delete these lines
        if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
                die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
                                ?>

                                <p class="nocomments">This post is password protected. Enter the password to view comments.<p>

                                <?php
                                return;
            }
        }

                /* This variable is for alternating comment background */
                $oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
        <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

        <ol class="commentlist">

        <?php foreach ($comments as $comment) : ?>

                <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
                        <div class="alignright">
                         <?php echo get_avatar( $comment, $size = '24', $default = '<path_to_url>' ); ?>
                         </div><?php comment_author_link() ?>
                         <?php if ($comment->comment_approved == '0') : ?>
                        <em>Your comment is awaiting moderation.</em>
                        <?php endif; ?>
                        <br />

                         <small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('&mdash; Edit','',''); ?></small>

                        <small><?php comment_text() ?></small>


                </li>
                </br>

        <?php
                /* Changes every other comment to a different class */
                $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
        ?>

        <?php endforeach; /* end for each comment */ ?>

        </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
                <!-- If comments are open, but there are no comments. -->

         <?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <p class="nocomments">Comments are closed.</p>

        <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<br /><h5 id="respond">Comment</h5>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p class="small_text">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p align="left"><label for="author">Name <?php if ($req) echo "(required)"; ?></label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>

<p align="left"><label for="email">Mail <?php if ($req) echo "(required)"; ?> (will not be published)</label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>

<p align="left"><label for="url">Website</label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p align="left"><label for="comment"></label><br /><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><br /><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>