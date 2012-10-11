<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>
    <?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        echo " | $site_description";
    }
    
    if ( $paged >= 2 || $page >= 2 ) {
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    }
    ?>
</title>

<meta name="description" content="Fifth Third Microsite">
<meta name="author" content="xixi">

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/screen.css">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.simplemodal.1.4.3.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.tabs.js"></script>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory') ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-114x114.png">

</head>