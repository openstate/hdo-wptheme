<?php /* Template Name: Project List   */     ?>

<?php get_header(); ?>

<?php get_sidebar(3); ?>

<div id="content">

<h6 id="list-header">Prototypes en projecten </h6>
</br>
</br>

<?php @query_posts("category_name=project&posts_per_page=-1");  ?>

<?php if (have_posts()) : ?>
<?php
  global $more;
  $more = 0;
?>
<?php while (have_posts()) : the_post(); ?>


<div class="post" id="post-<?php the_ID(); ?>">

     <div class="entry">
<?php
$title = get_the_title();
$old_content = get_the_content();
$permalink = get_permalink();
$matches = array();
$regex = '/(.*?)(\<a.*?\<img.*?\<\/a\>)(.*)/';
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

<p align="center"><?php next_posts_link('&laquo; Previous Entries') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php previous_posts_link('Next Entries &raquo;') ?></p><?php else : ?>

<h2>Not Found</h2>

<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>

</div>

</body>
</html>