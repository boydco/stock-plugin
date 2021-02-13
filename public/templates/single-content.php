<?php
/**
 * The template for displaying all single job posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Motley_Fool_Stock_Advisor
 */

$meta = get_post_custom( $post->ID );

/**
 * motley-fool-stock-adviser-before-single hook
 */
do_action( 'motley-fool-stock-adviser-before-single', $meta );

?><div class="wrap-job"><?php

	/**
	 * motley-fool-stock-adviser-before-single-content hook
	 */
	do_action( 'motley-fool-stock-adviser-before-single-content', $meta );

		/**
		 * motley-fool-stock-adviser-single-content hook
		 */
		do_action( 'motley-fool-stock-adviser-single-content', $meta );

	/**
	 * motley-fool-stock-adviser-after-single-content hook
	 */
	do_action( 'motley-fool-stock-adviser-after-single-content', $meta );

?></div><!-- .wrap-employee --><?php

/**
 * motley-fool-stock-adviser-after-single hook
 */
do_action( 'motley-fool-stock-adviser-after-single', $meta );