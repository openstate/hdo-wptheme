<?php /* Template Name: Evenementen(Events) List   */     ?>

<?php get_header(); ?>

<?php get_sidebar(3); ?>

<div id="content3">

<h6 id="list-header">Prototypes en projecten </h6>
</br>
</br>

<?php @query_posts("category_name=project&posts_per_page=-1");  ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php
$permalink = get_permalink();
?>

<div class="post-list" id="post-<?php the_ID(); ?>">


<a href="<?php echo get_permalink(); ?> "><h7  rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></h7></a>  


</br><p class="small_text"> <span><?php if (function_exists('the_tags')) { ?><?php the_tags('<strong> </strong> Tags: ', ', ', ''); ?> <?php } ?></span><span class="alignright"><?php edit_post_link('Edit',' <strong></strong> ',''); ?> </span></p>
<div class="linepost">. </div>
</div>



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