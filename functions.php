<?php

function wd2_foundation_theme_scripts() {
wp_enqueue_style( 'framework-style', get_template_directory_uri() .'/style.css' );
/* ----- Add Foundation Support From Parent Theme ----- */
/* Add Foundation CSS */
wp_enqueue_style( 'foundation', get_template_directory_uri()  . '/foundation/css/foundation.css' );
/* Add Foundation JS */
wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', array( 'jquery' ), '1', true );

/* Foundation Init JS */
wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'wd2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wd2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
	wp_enqueue_style( 'wd2-style', get_stylesheet_uri());
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wd2_foundation_theme_scripts' );

?>