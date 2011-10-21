<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">

<h2>Tag: <?php echo single_tag_title(); ?></h2><br />

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="date"><small><?php the_time('F jS, Y') ?> &mdash; <?php the_time('g:ia') ?> <?php edit_post_link('Edit','<strong> |</strong> ',''); ?> </small></div>

<div class="entry">

<?php the_content('Continue reading &raquo;'); ?>

</div>

<p class="info"><?php comments_popup_link('Comment &raquo;', '1 comment &raquo;', '% comments &raquo;'); ?> <strong>|</strong> <?php the_category(', ') ?></p>

</div>

<?php comments_template(); ?>

<?php endwhile; ?>

<div class="navigation"><?php next_posts_link('&laquo; Previous Entries') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php previous_posts_link('Next Entries &raquo;') ?></div>

<p>&uarr; <a href='#up' title='Go upwards' target='_self'>Back to top</a></p>

<?php else : ?>

<h2>Not Found</h2>

<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>

</div>

</body>

</html>