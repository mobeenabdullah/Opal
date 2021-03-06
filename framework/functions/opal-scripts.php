<?php

/**
 * --------------------------------------------------------------------------------------------------------------
 *	Register & Enqueue theme scripts and styles
 * --------------------------------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'opal_scripts' ) ) {
	function opal_scripts() {
		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// load scripts
		wp_enqueue_script( 'bootstrap.min', SCRIPTS . '/bootstrap/bootstrap.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'masonry' );
		wp_enqueue_script( 'opal-custom', SCRIPTS . '/scripts.js', array( 'jquery' ), null, true );

		// Load the stylesheets
		wp_enqueue_style( 'master', STYLES . '/master.css' );
		wp_enqueue_style( 'font-awesome', STYLES . '/font-awesome.css' );
		wp_enqueue_style( 'style', THEMEROOT . '/style.css' );

	}

	add_action( 'wp_enqueue_scripts', 'opal_scripts' );
}
