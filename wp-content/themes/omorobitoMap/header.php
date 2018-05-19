<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>
        <?php
            /*
	 * Print the <title> tag based on what is being viewed.
	 */
            global $page, $paged;


            if(is_single()||is_page()){

                // Add the blog name.
                wp_title( '|', true, 'right' );
                single_cat_title();
                echo " | ";

            }else{
                wp_title( '|', true, 'right' );
            }

            // Add the blog name.
            bloginfo( 'name' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

            ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes,maximum-scale=2" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.maximage.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="Shortcut Icon" type="image/x-icon" href="/favicon.ico" />
    <?php wp_head(); ?>
</head>
