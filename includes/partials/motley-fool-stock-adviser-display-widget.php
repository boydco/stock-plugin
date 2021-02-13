<?php



if ( ! empty( $instance['title'] ) ) {

	$title = apply_filters( 'widget_title', $instance['title'] );

}

if ( ! empty( $title ) ) {

	echo $before_title . $title . $after_title;

}

?><div class="motley-fool-stock-adviser-widget"><?php

// output

?></div><!-- End of .motley-fool-stock-adviser-widget --><?php
