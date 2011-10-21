<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">

	<h2>By month</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

	<h2>By category</h2>
  		<ul>
   			<?php wp_list_cats(); ?>
		</ul>

         <?php if (function_exists('wp_tag_cloud')) { ?>
         <h2>All Tags</h2>

         <?php wp_tag_cloud('format=list&smallest=9&orderby=count&order=DESC'); ?>

         <?php } ?>

</div>

<?php get_footer(); ?>