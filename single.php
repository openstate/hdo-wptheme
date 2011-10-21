<?php get_header(); ?>

<?php get_sidebar(3); ?>

<div id="content3">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<h6 " rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></h6>

<div class="entry">

<?php the_content('More &raquo;'); ?>

</div>

<p class="info">Geschreven door: <?php the_author_link(); ?>  <strong> |</strong> Category: <span class="red-links"><?php the_category(', ') ?><?php if (function_exists('the_tags')) { ?><?php the_tags('<strong> |</strong> Tags: ', ', ', ''); ?> <?php } ?></span><?php edit_post_link('Edit',' <strong>|</strong> ',''); ?> <?php comments_popup_link('Comment &raquo;', 'One comment &raquo;', '% comments &raquo;'); ?></p>

      
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