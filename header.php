<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_home()) { ?>
	<title><?php bloginfo('name'); ?> &mdash; <?php bloginfo('description'); ?></title>

	<?php } elseif(is_category() or is_archive() or is_page() or is_single() or is_404() ) { ?>
	<title><?php wp_title(''); ?> &mdash; <?php bloginfo('name'); ?></title>

         <?php } elseif(is_search() ) { ?>
	<title>Serach results &mdash; <?php bloginfo('name'); ?></title>

	<?php } else { ?>
	<title> <?php wp_title(); ?> &mdash; <?php bloginfo('name'); ?></title>
	<?php } ?>


<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Droid+Serif&subset=latin' rel='stylesheet' type='text/css'>


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-184755-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<div ><a name='up' id='up'></a></div>

<div id="wrapper">


		<div id="header">


                      <a href="<?php bloginfo('url'); ?>"><img src="http://www.hackdeoverheid.nl/wp-content/themes/blass2/images/HDO_logo.png"></a>

 	<ul id="nav" class="linetop">

		<span id="social">
			<span class="alignright"><a href="<?php bloginfo('atom_url'); ?>"><img src="http://www.hackdeoverheid.nl/wp-content/themes/blass2/images/rss.png"></a></span>
                        <span class="alignright"><a href="http://www.twitter.com/hackdeoverheid/"><img src="http://www.hackdeoverheid.nl/wp-content/themes/blass2/images/twitter.png"></a></span>
                        <span class="alignright"><a href="http://www.facebook.com/pages/HackdeOverheid/321465488922"><img src="http://www.hackdeoverheid.nl/wp-content/themes/blass2/images/facebook.png"></a></span>
                        
                </span>
<span id="social-text" class="alignright">Volg ons via: </span>
		<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
        	 <?php wp_list_pages('depth=1&title_li='); ?>
                
                   


 	</ul>
<div class="linebottom">. </div>


		</div>