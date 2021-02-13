<?php
/**
 * The view for the post content used on the single post
 */

?><div class="content-job" itemtype="description">
	<h2><?php echo esc_html( apply_filters( 'motley-fool-stock-adviser-title-job-label', 'Job Description' ), 'motley-fool-stock-adviser' ); ?></h2><?php

	the_content();

?></div>